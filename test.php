<?php
$con = mysqli_connect("localhost","root","","demo") or die(mysql_error());
$new ="Not Conform";
							$neser="INSERT INTO reservations(name, email) VALUES ('shekar','shekar@gmail.com')";
										if (mysqli_query($con,$neser))
										{
											echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
											
										}
										else
										{
											echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
											
										}
										