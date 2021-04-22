<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cart Page</title>
	<link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="https://use.typekit.net/mzq5qsc.css">
</head>

<body>
	
	<?php include "parts/navbar.php"; ?>

	<div>
		<h1>Checkout</h1>
	</div>

	<div class="section">
		<div>
			<h2>Payment Method</h2>
				
				<label class="container">VISA
					<input type="checkbox">
					<span class="checkmark"></span>
				</label>

				<label class="container">Mastercard
					<input type="checkbox">
					<span class="checkmark"></span>
				</label>

				<label class="container">Rupay
					<input type="checkbox">
					<span class="checkmark"></span>
				</label>

				<label class="container">UPI
					<input type="checkbox">
					<span class="checkmark"></span>
				</label>
		</div>

		<div class="form">
			<form>	
				<h2>Payment</h2>
				<label for="full-name">Full Name</label><br>
				<input class="definput" name="full-name" id="full-name" type="text" placeholder="Akshat Sonar"><br>
			
				<label for="card">Card Number</label><br>
				<input class="definput" name="card" id="card" type="text" placeholder="4233 1545 2111 4532"><br>

				<label for="exp">Expiration</label><br>
				<input class="definput" name="exp" id="exp" type="month" placeholder="MM-YY"><br>

				<label for="cvv">CVV</label><br>
				<input class="definput" name="cvv" id="cvv" type="text" placeholder="340"><br>

				<label for="zip">Zip Code</label><br>
				<input class="definput" name="zip" id="zip" type="text" placeholder="400 101"><br>
			</form>
		</div>

		<div class="form">
				<form>
					<h2>Address</h2>	
					<label for="street">Street</label><br>
					<input class="definput" name="street" id="street" type="text" placeholder="Enter Address"><br>

					<label for="city">City</label><br>
					<input class="definput" name="city" id="city" type="text" placeholder="Mumbai"><br>

					<label for="state">State</label><br>
					<input class="definput" name="state" id="state" type="text" placeholder="Maharashtra"><br>

					<label for="country">Country</label><br>
					<input class="definput" name="country" id="country" type="text" placeholder="India"><br>

					<label for="zip">Zip Code</label><br>
					<input class="definput" name="zip" id="zip" type="text" placeholder="400 101"><br>
				</form>
		</div>
	</div>
	
	<div class="btns">	
		<button class="defbutton4" onclick="location.href='cart.php'">Back</button> 
		<button class="defbutton3" onclick="location.href='confirmation.php'">Complete Checkout</button> 
	</div>


</body>
</html>