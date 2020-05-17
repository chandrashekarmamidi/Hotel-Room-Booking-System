 <?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:admin_login.php");
}
?> 
 <?php
              $con = mysqli_connect("localhost","root","","demo") or die(mysql_error());
              if(!isset($_GET["rid"]))
    {
        
       header("location:adminpage.php");
    }
    else {
      
        $id = $_GET['rid'];
        
        
        $sql ="Select * from reservations where id = '$id'";
        $re = mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($re))
        {
          
          $name = $row['name'];
          $email = $row['email'];
          $mobile = $row['mobile'];
          $roomtype = $row['roomtype'];
          $bedding = $row['bedding'];
          $nguest = $row['numofguest'];
          $cin = $row['checkin'];
          $cout = $row['checkout'];
          $days = $row['numofdays'];
          $status = $row['status'];
          
          
        
        
        } 
  }
      ?> 
    
<!DOCTYPE html>
<html>
<head>
	<title>Action</title>
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
  background-color:   bisque;
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
table.t1{
  border: 1px solid grey;
  border-collapse: collapse;
  
}
table.t1 th{
  text-align: left;
  font-size: 18px;
  padding:10px 80px 10px 10px;
  

}
table.t1 tr{
  
  border-bottom:1px solid grey;
  margin:5px;
}
table.t2{
  border: 1px solid black;
}
table.t2 td{
  padding: 10px;
}

</style>
    
</head>
<body>

    <div style="background-color: #FFFF99;padding: 0px;margin-top: -5px;text-align: center;;height:70px">
        <h1 style="color: darkslategray;font-size: 40px;margin-left: 5px;margin-top: 6px;padding-top: 5px">Hotel Sunrise <i class="fas fa-sun" style="color: gold"></i></h1></div>

    <div style="width: 230px;height: 500px;background-color:  rgb(240,230,140)">
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
<div style="margin-left: 250px;width: 1100px;margin-top: -500px">
        <h1 style="color: red">Booking Confirmation</h1>
      <table class="t1">
                                  
                                        <tr>
                                            <th>Name</th>
                                            <th><?php echo $name; ?> </th>

                                            
                                        </tr>

                                        <tr>
                                            <th>Email</th>
                                            <th><?php echo $email; ?> </th>
                                            
                                        </tr>
                   
                 
                                        <tr>
                                            <th>Phone No </th>
                                            <th><?php echo $mobile; ?></th>
                                            
                                        </tr>

                                        <tr>
                                            <th>Number of Guests </th>
                                            <th><?php echo $nguest; ?></th>
                                            
                                        </tr>

                                        <tr>
                                            <th>Type Of the Room </th>
                                            <th><?php echo $roomtype; ?></th>
                                            
                                        </tr>

                                        <tr>
                                            <th>Bedding Type </th>
                                            <th><?php echo $bedding; ?></th>
                                            
                                        </tr>
               
                                        <tr>
                                            <th>Check-in Date </th>
                                            <th><?php echo $cin; ?></th>
                                            
                                        </tr>

                                        <tr>
                                            <th>Check-out Date</th>
                                            <th><?php echo $cout; ?></th>
                                            
                                        </tr>
                   
                                         <tr>
                                            <th>Number of Days</th>
                                            <th><?php echo $days; ?></th>
                                            
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <th><?php echo $status; ?></th>
                                            
                                        </tr>
                                                                        
                                </table>

                                
                            <form method="post">
                            <div style="padding: 10px;">
                            <label style="font-size: 20px">Select the Confirmation</label><br>
                            <select name="conf" style="width: 200px;padding: 5px">
                              <option value selected> </option>
                              <option value="Conform">Confirm</option>
                              
                              
                            </select>
                     </div>
              <input type="submit" name="co" value="Conform">
              
              </form>
                               
      </div>

       
            <?php
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
          <div style="margin-left: 900px;margin-top: -500px">
                    
                           Available Room Details
                       
            <table width="200px">
              
              <tr>
                <td><b>Supreme Room   </b></td>
                <td><button type="button" ><?php  
                  $f1 =$sc - $csc;
                  if($f1 <=0 )
                  { $f1 = "NO";
                    echo $f1;
                  }
                  else{
                      echo $f1;
                  }
                
                
                ?> </button></td> 
              </tr>
              
              <tr>
                <td><b>Single Room   </b></td>
                <td><button type="button" ><?php
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
                <td><b>Deluxe Room</b>   </td>
                <td><button type="button"><?php 
                
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
                <td><b>Total Rooms  </b> </td>
                <td> <button type="button" ><?php 
                
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

<?php
            if(isset($_POST['co']))
            { 
              $st = $_POST['conf'];
              
               
              
              if($st=="Conform")
              {
                  $urb = "UPDATE `reservations` SET `status`='$st' WHERE id = '$id'";
                  
                if($f1=="NO" )
                {
                  echo "<script type='text/javascript'> alert('Sorry! Not Available Supreme Room ')</script>";
                }
              
                  else if ($f3 == "NO")
                  {
                    echo "<script type='text/javascript'> alert('Sorry! Not Available Single Room')</script>";
                  }
                    else if($f4=="NO")
                    {
                    echo "<script type='text/javascript'> alert('Sorry! Not Available Deluxe Room')</script>";
                    }
                    
                    
                    else if( mysqli_query($con,$urb))
                      { 
                        //echo "<script type='text/javascript'> alert('Guest Room booking is conform')</script>";
                        //echo "<script type='text/javascript'> window.location='home.php'</script>";
                         $type_of_room = 0;       
                            if($roomtype=="Supreme Room")
                            {
                              $type_of_room = 320;
                            
                            }
                            else if($roomtype=="Deluxe Room")
                            {
                              $type_of_room = 230;
                            }
                           
                            else if($roomtype=="Single Room")
                            {
                              $type_of_room = 150;
                            }


                            $ttot = $type_of_room * $days ;
                            
                              
                            $psql = "INSERT INTO payment(id, name, email,mobile,numofguest,roomtype,bedding, checkin, checkout,numofdays, total) VALUES ('$id','$name','$email','$mobile','$nguest','$roomtype','$bedding','$cin','$cout','$days','$ttot')";
                            
                            if(mysqli_query($con,$psql))
                            { $notfree="Not Free";
                              $rpsql = "UPDATE `rooms` SET `place`='$notfree',`cusid`='$id' where  type='$roomtype' AND bedding='$bedding' ";
                              if(mysqli_query($con,$rpsql))
                              {
                              $to_email = $email;
                              $subject = 'Status of Room Booking';
                              $message = 'Your Room Booking at Hotel Sunrise has been CONFIRMED. We hope you enjoy your stay.';
                              $headers = 'From: prcmcs001@gmail.com';
                              mail($to_email,$subject,$message,$headers);
                              echo "<script type='text/javascript'> alert('Booking Conform')</script>";
                              
                              echo "<script type='text/javascript'> window.location='roombook.php'</script>";
                              }
                              
                            }  
                      }
                                   
              }
          
            }  
            ?>