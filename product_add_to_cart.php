<?php

    include_once "php/functions.php";

    $product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];
    
?><html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cart Page</title>
	<link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="https://use.typekit.net/mzq5qsc.css">
    <?php include "parts/meta.php"; ?>
</head>

<body>
	
	<?php include "parts/navbar.php"; ?>

	<div>
		<h1>You added <?= $product->name ?> to your cart</h1>
	</div>
	<div>
		<p><a href="store.php">Continue Shopping</a></p>
		
		<p><a href="cart.php">Go to Cart</a></p>

	</div>


</body>
</html>