<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Store</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/store.css">
    <link rel="stylesheet" href="https://use.typekit.net/mzq5qsc.css">
    <meta name="viewport" content="width=device-width">
</head>

<body>
	
	<?php include "parts/navbar.php"; ?>
    
    <div class="search">
        <form>
            <input class="hotdog" style="transition: all 0.3s;" type="search" placeholder="Search">
        </form>
    </div>
    
    <!--<div class="figures">
    	<a href="product.php?id=Spiderman Miles Morales">
        	<div class="fig">
            	<figure class="figure">
                	<img src="https://images-na.ssl-images-amazon.com/images/I/81tH0uekxiL._SL1500_.jpg" alt="" style="display: block;margin-left: auto;margin-right: auto;margin-top:5px;width: 72%;">
                	<figcaption>Spiderman Miles Morales<br>₹ 4,425</figcaption>
           		</figure>
        	</div>
    	</a>
        <a href="product.php?id=Demon's Souls">
        	<div class="fig">
            	<figure class="figure">
                	<img src="https://images-na.ssl-images-amazon.com/images/I/81szAXdCKHL._SL1500_.jpg" alt="" style="display: block;margin-left: auto;margin-right: auto;margin-top:5px;width: 72%;">
                	<figcaption>Demon's Souls<br>₹ 4,499</figcaption>
           		</figure>
        	</div>
    	</a>
    	<a href="product.php?id=Returnal">
        	<div class="fig">
            	<figure class="figure">
                	<img src="https://images-na.ssl-images-amazon.com/images/I/81rhgipngdL._SL1500_.jpg" alt="" style="display: block;margin-left: auto;margin-right: auto;margin-top:5px;width: 72%;">
                	<figcaption>Returnal<br>₹ 4,999</figcaption>
           		</figure>
        	</div>
    	</a>
        </div> -->

        <?php

       include_once "php/functions.php";
       include_once "parts/templates.php";

       $result = makeQuery
        (makeConn(),
        "
        SELECT *
        FROM `products`
        ORDER BY `date_create` ASC
        LIMIT 12
        "
        );

       echo "<div class='items' style='padding-top:50px; padding-left:50px; padding-right:50px; display:flex; flex-wrap:wrap; justify-content:center;'>",array_reduce($result,'productListTemplate');


        



        ?>
</body>
</html>