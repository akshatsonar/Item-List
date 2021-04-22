<?php

include_once "php/functions.php";
include_once "parts/templates.php";

$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (4,7,10)");
    
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cart Page</title>
	<link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="https://use.typekit.net/mzq5qsc.css">
    <?php include "parts/meta.php"; ?>
    <style>
    .checkbtn {
    display: inline-block;
    background: rgb(43,111,247);
    background: linear-gradient(90deg, rgba(43,111,247,1) 35%, rgba(44,35,247,1) 100%);
    border-width: 0;
    font-family: aktiv-grotesk,sans-serif;
    font-weight: 700;
    font-style: normal;
    font-size: 18px;
    color: white;
    width: 500px;
    height: 50px;
    outline: 0;
    border-radius: 10px;
	}

	.checkbtn:hover {
		background: linear-gradient(270deg, rgba(43,111,247,1) 35%, rgba(44,35,247,1) 100%);
	}
		    </style>
</head>

<body>
	
	<?php include "parts/navbar.php"; ?>

	<div>
		<h1 style="padding-left: 0px;">My Cart</h1>
	</div>

	<div style="display: flex; justify-content: center; padding-top: 30px; padding-bottom: 30px;">
		<div style="box-shadow: 0 2px 20px rgba(0,0,0,0.2); border-radius: 10px;">
			<?= array_reduce($cart, 'cartListTemplate') ?>
		</div>

		<div style="box-shadow: 0 2px 50px rgba(0,0,0,0.2); border-radius: 10px; margin-left: 50px;">
			<div style="display: flex;">
				<div><p style="font-weight: 700; padding-left: 30px;">Sub Total</p></div>
				<div><p style="padding-left: 50px; padding-right: 30px;">3500</p></div>
			</div>
			<div style="display: flex;">
				<div><p style="font-weight: 700; padding-left: 30px;">Taxes</p></div>
				<div><p style="padding-left: 50px; padding-right: 30px;">500</p></div>
			</div>
			<div style="display: flex;">
				<div><p style="font-weight: 700; padding-left: 30px;">Total</p></div>
				<div><p style="padding-left: 50px; padding-right: 30px;">4000</p></div>
			</div>
		</div>
	</div>

	<div style="display: flex; justify-content: center;">
		<button class="checkbtn" onclick="location.href='checkout.php'">Checkout</button> 
	</div>

</body>
</html>