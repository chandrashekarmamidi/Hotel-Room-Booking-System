<?php
include('db.php')
?>
<!DOCTYPE html>
<html>
<head>
	<title>Room Reservation</title>
	<script src="https://kit.fontawesome.com/d9441af10e.js"></script>

<style>
	body{
	background-image: url('back12.jpg');
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
	height: 1000px;

	
}

</style>
</head>
<body>
	<div style="padding: 1px;margin-top: -6px;text-align: center;">
		<a href="homepage.php" style="text-decoration: none;">
		<h1 style="color: darkred;font-size: 65px;margin-left: 5px;cursor: pointer;">Hotel Sunrise <i class="fas fa-sun" style="color: gold"></i></h1></div>
	</a>

		<div style="text-align: center;height: 500px ">
	<div><h1 style="color: red;font-size: 35px">Room Reservation</h1></div>
	<div style="float: left;margin-left: 400px;">
		<form name="form" method="post">
		<h2 style="color: #B30505">Personal Details</h2>
		<p><b>Name</b></p>
		<input type="text" name="name" style="padding: 5px;width: 200px"><br>
		<p><b>Email</b></p>
		<input type="Email" name="email" style="padding: 5px;width: 200px"><br>
		<p><b>Phone Number</b></p>
		<input type="text" name="mobile" style="padding: 5px;width: 200px"><br>
		<p><b>Nationality</b></p>
		<select name="Nationality" style="padding: 5px;width: 200px">
    		<option value="Indian">Indian</option>
    		<option value="Non Indian">Non Indian</option>
    	</select>
	</div>
<br><br>
	<div style="float: left;margin-left: 100px;margin-top: -34px">
		<h2 style="color: #B30505">Room Details</h2>
		<p><b>Number of Guests</b></p>
		<input type="number" name="numofguest" style="padding: 5px;width: 200px"><br>
		<p><b>Type of Room</b></p>
		<select name="roomtype" style="padding: 5px;width: 200px">
    		<option value="Single Room">Supreme Room</option>
    		<option value="Deluxe Room">Deluxe Room</option>
    		<option value="Supreme Room">Single Room</option>
    	</select>
    	<p><b>Bedding Type</b></p>
		<select name="bedding" style="padding: 5px;width: 200px">
    		<option value="Single">Single</option>
    		<option value="Double">Double</option>
    		<option value="Triple">Triple</option>
    	</select>
		<p><b>Check In Date</b></p>
		<input type="Date" name="checkin" style="padding: 5px;width: 200px"><br>
		<p><b>Check Out Date</b></p>
		<input type="Date" name="checkout" style="padding: 5px;width: 200px"><br>
		

	</div>
</div>
<br><br><br><br><br>
<div style="text-align: center;"><input type="submit" name="submit" value="BOOK" style="padding: 6px;width:100px;cursor: pointer;background-color:red "></div>

<?php
							if(isset($_POST['submit']))
							{
							
							
									$con=mysqli_connect("localhost","root","","demo");
									$check="SELECT * FROM reservations WHERE email = '$_POST[email]'";
									$rs = mysqli_query($con,$check);
									$data = mysqli_fetch_array($rs, MYSQLI_NUM);
									if($data[0] > 1) {
										echo "<script type='text/javascript'> alert('User Already in Exists')</script>";
										
									}

									else
									{
										$new ="Not Conform";
										$newUser="INSERT INTO reservations(name, email, mobile,numofguest, roomtype,bedding, checkin, checkout,status,numofdays) VALUES ('$_POST[name]','$_POST[email]','$_POST[mobile]','$_POST[numofguest]','$_POST[roomtype]','$_POST[bedding]','$_POST[checkin]','$_POST[checkout]','$new',datediff('$_POST[checkout]','$_POST[checkin]'))";
										if (mysqli_query($con,$newUser))
										{
											echo "<script type='text/javascript'> alert('Your Booking application has been sent. Booking Status will be sent to your email in 10 min.')</script>";
											
										}
										else
										{
											echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
											
										}
									}

							
							}
							
							?>
						</form>
	




 
</body>
</html>
