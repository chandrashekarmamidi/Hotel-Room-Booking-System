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


       
      <div style="margin-left: 250px;width: 1100px;margin-top: -540px;background-color: rgb(255,255,224)">
        <h1 style="color: red">Add a New Room</h1>
        <form name="form" method="post">
        <label><b>Room Type :</b></label><br><br>
                        <select name="troom">
                        <option value selected ></option>
                        <option value="Supreme Room">SUPERIOR ROOM</option>
                        <option value="Deluxe Room">DELUXE ROOM</option>
                        <option value="Single Room">SINGLE ROOM</option>
                        </select><br><br>
        <label><b>Bedding Type :</b></label><br><br>
                        <select name="bedding">
                        <option value selected ></option>
                          <option value="Single">Single</option>
                          <option value="Double">Double</option>
                          <option value="Triple">Triple</option>
                        </select><br><br>
                         <input type="submit" name="add" value="Add New Room"> 
                      </form>

                    <?php
                    $con = mysqli_connect("localhost","root","","demo") or die(mysql_error());

               include('db.php');
               if(isset($_POST['add']))
               {

                   $room = $_POST['troom'];
                    $bed = $_POST['bedding'];
                    $place = 'Free';
                    
                    $check="SELECT * FROM rooms WHERE type = '$room' AND bedding = '$bed'";
                    $rs = mysqli_query($con,$check);
                    $data = mysqli_fetch_array($rs, MYSQLI_NUM);
                    if($data[0] > 1) {
                      echo "<script type='text/javascript'> alert('Room Already in Exists')</script>";
                      
                    }

                    else
                    {
               
                    
                    $sql ="INSERT INTO `rooms`( `type`, `bedding`,`place`) VALUES ('$room','$bed','$place')" ;
                    if(mysqli_query($con,$sql))
                    {
                     echo '<script>alert("New Room Added") </script>' ;
                    }else {
                      echo '<script>alert("Sorry ! Check The System") </script>' ;
                    }
               
              }}
              
              ?>

              <br><br><br>

              <h1 style="color: red">Remove and Existing Room</h1>
               <form name="form" method="post">
        <label><b>Select which room you want to remove :</b></label><br><br>
                        <select name="typeroom">
                        <option value selected ></option>
                        <option value="Supreme Room">SUPERIOR ROOM</option>
                        <option value="Deluxe Room">DELUXE ROOM</option>
                        <option value="Single Room">SINGLE ROOM</option>
                        </select><br><br>
        <label><b>Bedding Type :</b></label><br><br>
                        <select name="beddingdel">
                        <option value selected ></option>
                          <option value="Single">Single</option>
                          <option value="Double">Double</option>
                          <option value="Triple">Triple</option>
                        </select><br><br>
                         <input type="submit" name="del" value="Remove Room"> 
                      </form>

                    <?php
               include('db.php');
               if(isset($_POST['del']))
               {

                    $room = $_POST['typeroom'];

                    $beddingdel = $_POST['beddingdel'];
                    $place = 'Free';
                    
                    $delete="DELETE FROM rooms WHERE type = '$room' AND place= '$place' AND bedding= '$beddingdel' ";
                    
                    if(mysqli_query($con,$delete))
                    {
                     echo '<script>alert("Room has been removed") </script>' ;
                    }else {
                      echo '<script>alert("Sorry ! Check The System") </script>' ;
                    }
               
              }
              
              ?>

      </div>


    </div>

</body>
</html>