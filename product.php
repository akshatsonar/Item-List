<?php

    include_once "php/functions.php";

    $product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];
    
    $images = explode(",", $product->images);

    $image_elements = array_reduce($images,function($r,$o){
        return $r. "<img src='../sonar.akshat/img/$o'>";
    });

    //print_p($product);

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product</title>
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="https://use.typekit.net/mzq5qsc.css">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/productthumbs.js"></script>
</head>


<body>
    <?php include "parts/meta.php"; ?>
   	<?php include "parts/navbar.php"; ?>
    
    <div class="content">
        <div class="">
            <figure class="fig">
                <div class="mainimg">
                    <img src="img/<?= $product->thumbnail ?>" width="450px" object-fit="contain" alt="">
                </div>
                <div class="thumbnails">
                    <?= $image_elements ?>
                </div>
            </figure>
        </div>


        <div class="productinfo">
            <div class="info">

                <h1 class="title"><?= $product->name ?></h1> 
                <h2 style="font-family: aktiv-grotesk,sans-serif;font-weight: 700;font-style: bold;color: #2C23F7;margin:0px;padding-left: 30px;">&#8377;<?= $product->price ?></h2>
                <div class="ps">
                    <label class="h3" for="product-amount">Quantity</label>
                    <div class="select" id="product-amount">
                        <select class="sel">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                </div>
                <p class="para"><?= $product->description ?></p>
            </div>
            
            <div class="button">
                <button class="cart" onclick="location.href='product_add_to_cart.php?id=<?= $product->id ?>'"> ADD TO CART</button> 
            </div>
        </div>
    </div>  
</body>