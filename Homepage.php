<!DOCTYPE html>
<html>
<head><title>Hotel Sunrise</title>
<script src="https://kit.fontawesome.com/d9441af10e.js"></script>
<style>

.bedroom{
	border: 1px none black;width: 180px;height: 170px;float: left;margin-left: 250px;cursor: pointer;text-align: center;
}
.cafe{
	border: 1px none black;width: 200px;height: 170px;float: left;margin-left: 40px;cursor: pointer;text-align: center;
}
.pool{
	border: 1px none black;width: 200px;height: 170px;float: left;margin-left: 30px;cursor: pointer;text-align: center;
}

.bookroom{
	background-color:lightsalmon ;border: 2px ;font-size: 20px;width: 130px;margin-left: 10px;cursor: pointer;
}
.pool:hover{
	background-color:  	darkslategrey;
}
.bedroom:hover{
	background-color:  darkslategrey;
}
.cafe:hover{
	background-color:  	darkslategrey;
}
body{
	background-image: url('back12.jpg');
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;

	
}

</style>
</head>
<body >
	
	<div style="padding: 2px;margin-top: -6px;text-align: center;">
		<h1 style="color: darkred;font-size: 70px;margin-left: 5px">Hotel Sunrise <i class="fas fa-sun" style="color: gold"></i></h1>
	
	<a href="reservation.php"><input type="button" name="" value="Book a Room" class="bookroom"></a>
	<a href="gallery.php"><input type="button" name="" value="Gallery" class="bookroom"></a>
	<a href="contactus.php"><input type="button" name="" value="Contact Us" class="bookroom"><a>
	 </div>
	
	<p style="text-align: center;padding: ;margin-top: 70px;font-size: 36px;color:darkred"><b>Facilities Available</b></p><br><br>
	<div style="height: 200px">
	<div class="bedroom"><a href="rooms.php" style="text-decoration: none;color:  	red"><i class="fas fa-bed fa-6x" ></i><br><b><h3>MASTER BEDROOMS</h3></b></a></div>
	<div class="cafe"><a href="cafe.php" style="text-decoration: none;color:  	red"><i class="fas fa-coffee fa-6x"></i><br><b><h3>CAFETERIA</h3></b></a></div>
	<div class="cafe"><a href="wifi.php" style="text-decoration: none;color:  red"><i class="fas fa-wifi fa-6x"></i><br><b><h3>HIGH SPEED WIFI</h3></b></a></div>
	<div class="pool"><a href="pool.php" style="text-decoration: none;color:	red"><i class="fas fa-swimmer fa-6x"></i><br><b><h3>SWIMMING POOL</h3></b></a></div>
</div>
<br>
	<p style="text-align: center;font-size: 36px;color: darkred"><b>Services We Provide</b></p><br>
	<div style="height: 300px;">
	<div style="width: 300px;margin-left: 290px;margin-top: 30px;background-color:  	rgb(220,220,220)">
		<h2 style="color: red;text-align: center;">Stay First, Pay Later</h2>
		<p style="font-size: 20px;padding: 0px 20px 10px 20px"><b>We want our customers to enjoy their stay at our hotel and allow them to pay later at the end of their stay.</b></p>
	</div>
	<div style="width: 300px;margin-left: 730px;margin-top: -170px;background-color:  	rgb(220,220,220)">
		<h2 style="color: red;text-align: center;">24 Hrs Open Restaurant</h2>
		<p style="font-size: 20px;padding: 0px 20px 10px 20px"><b>Our hotel is equiped with a 5 star restaurent which is open 24 Hrs. Enjoy your meals and have a nice day</b></p>
	</div>
</div>
</body>