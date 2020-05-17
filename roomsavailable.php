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
	<title>Add/Delete Room</title>
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

    <div style="width: 230px;height: 500px;background-color: bisque">
        <h2 style="font-size: 35px;text-align: center;margin-top: 0px;height: 15px">Admin</h2>
        <hr style="border: 2px solid red;">



        <div class="sidenav"; style="margin-top: -10px">
          <a href="roombook.php"><i class="far fa-chart-bar"></i>&nbspRoom Booking</a>
          <a href="roomsavailable.php"><i class="fas fa-bed"></i>&nbspRooms Available</a>
          <a href="payments.php"><i class="fas fa-money-bill-wave-alt"></i>&nbspPayments</a>
          <a href="adddeleteroom.php"><i class="fas fa-plus-circle"></i>&nbspAdd/Delete Room</a>
          <a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbspLogout</a>
      </div>
      <?php
      $con = mysqli_connect("localhost","root","","demo") or die(mysql_error());
            $rsql ="select * from rooms";
            $rre= mysqli_query($con,$rsql);
            $r =0 ;
            $sc =0;
            $gh = 0;
            $sr = 0;
            $dr = 0;
            while($rrow=mysqli_fetch_array($rre))
            {
              $r = $r + 1;
              $s = $rrow['type'];
              $p = $rrow['place'];
              if($s=="Supreme Room" )
              {
                $sc = $sc+ 1;
              }
              
             
              if($s=="Single Room" )
              {
                $sr = $sr + 1;
              }
              if($s=="Deluxe Room" )
              {
                $dr = $dr + 1;
              }
              
            
            }
            ?>
            
            <?php
            $csql ="select * from payment";
            $cre= mysqli_query($con,$csql);
            $cr =0 ;
            $csc =0;
            $cgh = 0;
            $csr = 0;
            $cdr = 0;
            while($crow=mysqli_fetch_array($cre))
            {
              $cr = $cr + 1;
              $cs = $crow['roomtype'];
              
              if($cs=="Supreme Room"  )
              {
                $csc = $csc + 1;
              }
              
             
              if($cs=="Single Room" )
              {
                $csr = $csr + 1;
              }
              if($cs=="Deluxe Room" )
              {
                $cdr = $cdr + 1;
              }
              
            
            }
        
          ?>
          <div style="margin-left: 400px;margin-top: -500px;width: 600px;text-align: center;">
                    
                           <h1 style="color: red">Available Room Details</h1>
                       
            <table width="600px">
              
              <tr>
                <td style="font-size: 20px"><h2>Supreme Room   </h2></td>
                <td><button type="button" style="border-radius: 4px;color: red;padding: 10px"><?php  
                  $f1 =$sc - $csc;
                  if($f1 <=0 )
                  { $f1 = "NO";
                    echo $f1;
                  }
                  else{
                      echo $f1;
                  }
                
                
                ?> </button ></td> 
              </tr>
              
              <tr>
                <td style="font-size: 20px"><h2>Single Room   </h2></td>
                <td><button type="button" style="border-radius: 4px;color: red;padding: 10px" ><?php
                $f3 =$sr - $csr;
                if($f3 <=0 )
                  { $f3 = "NO";
                    echo $f3;
                  }
                  else{
                      echo $f3;
                  }

                ?> </button></td> 
              </tr>
              <tr>
                <td style="font-size: 20px"><h2>Deluxe Room</h2>   </td>
                <td><button type="button" style="border-radius: 4px;color: red;padding: 10px"><?php 
                
                $f4 =$dr - $cdr; 
                if($f4 <=0 )
                  { $f4 = "NO";
                    echo $f4;
                  }
                  else{
                      echo $f4;
                  }
                ?> </button></td> 
              </tr>
              <tr>
                <td style="font-size: 20px"><h2>Total Rooms  </h2> </td>
                <td> <button type="button" style="border-radius: 4px;color: red;padding: 10px"><?php 
                
                $f5 =$r-$cr; 
                if($f5 <=0 )
                  { $f5 = "NO";
                    echo $f5;
                  }
                  else{
                      echo $f5;
                  }
                 ?> </button></td> 
              </tr>
            </table>
  </div>

</body>

</html>