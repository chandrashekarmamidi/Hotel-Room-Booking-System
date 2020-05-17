<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:admin_login.php");
}
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
        <script src="https://kit.fontawesome.com/d9441af10e.js"></script>
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 230px;
  position: relative;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:  bisque;
  overflow-x: hidden;
  padding-top: 0px;
  
}

.sidenav a {
  padding: 15px 8px 20px 16px;
  text-decoration: none;
  font-size: 21px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: white;
}

.main {
  margin-left: 10px; /* Same as the width of the sidenav */
  font-size: 8px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
    
</head>
<body>

    <div style="background-color:  bisque;padding: 0px;margin-top: -5px;text-align: center;;height:70px">
        <h1 style="color: darkslategray;font-size: 40px;margin-left: 5px;margin-top: 6px;padding-top: 5px">Hotel Sunrise <i class="fas fa-sun" style="color: gold"></i></h1></div>

    <div style="width: 230px;height: 500px;background-color:  bisque">
        <h2 style="font-size: 35px;text-align: center;margin-top: 0px;height: 15px">Admin</h2>
        <hr style="border: 2px solid red;">



        <div class="sidenav"; style="margin-top: -10px">
        <a href="roombook.php"><i class="far fa-chart-bar"></i>&nbspRoom Booking</a>
        <a href="roomsavailable.php"><i class="fas fa-bed"></i>&nbspRooms Available</a>
        <a href="payments.php"><i class="fas fa-money-bill-wave-alt"></i>&nbspPayments</a>
        <a href="adddeleteroom.php"><i class="fas fa-plus-circle"></i>&nbspAdd/Delete Room</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbspLogout</a>
      </div>



       
    </div>

</body>
</html>