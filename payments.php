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
	<title>Payment</title>
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

table ,th{
  font-size: 18px;padding-right: 34px;color: red;padding-bottom: 10px;
} 
td{
  color: black;
  text-align: left;
  padding-right: 32px;
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

       <div style="margin-left: 250px;width: 1100px;margin-top: -500px;background-color: rgb(255,255,224)">
        <h1 style="color: blue">Payments</h1>
        <table class="table">
          <thead>
           
         <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Guests</th>
            <th>Room Type</th>
            <th>Check In</th>
            <th>Check Out</th> 
            <th>Bill</th>
           
                      
        </tr>
      </thead>

      <tbody>
        
         <tbody>

                                        
                  <?php
                  $con = mysqli_connect("localhost","root","","demo") or die(mysql_error());
                  $tsql = "select * from payment";
                  $tre = mysqli_query($con,$tsql);
                  while($trow=mysqli_fetch_array($tre,MYSQLI_ASSOC))
                  { 
                    
                    
                      echo"

                      <tr>
                        <td>".$trow['id']."</td>
                        <td>".$trow['name']."</td>
                        <td>".$trow['email']."</td>
                        <td>".$trow['mobile']."</td>
                        <td>".$trow['numofguest']."</td>
                        <td>".$trow['roomtype']."</td>
                        <td>".$trow['checkin']."</td>
                        <td>".$trow['checkout']."</td>
                        <td>".$trow['total']."</td>
                        
                        </tr>";
                        
                       
                    
                  
                  }
                  ?>
                                        
                                    </tbody>
      </tbody>
        </table>
        <br>

        <?php
            $con = mysqli_connect("localhost","root","","demo") or die(mysql_error());
            $sum=0;
            $num=0;
            $psql = "select * from payment";
            $rsql =mysqli_query($con,$psql);
            while($trow=mysqli_fetch_array($rsql,MYSQLI_ASSOC))
                {
                    $num+=1;
                    $sum+=$trow['total'];
                }
              echo "<h2>Total Number of Bookings: <span style='margin-left: 40px'>$num</span></h2>";
               echo "<h2>Total Profit: <span style='margin-left: 210px'>$ $sum</span></h2>";
                   
              
              ?>

        

      </div>

       
    <

</body>
</html>