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
<!DOCTYPE html>
<html>
<head><title>Hotel Sunrise</title>
<script src="https://kit.fontawesome.com/d9441af10e.js"></script>
<style>


.book{
	text-decoration: none;background-color:gainsboro;padding: 10px;font-size: 20px;color: black;border-radius: 8px;margin-left: 50px
}
.book:hover{
	background-color:  grey;
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
		<a href="homepage.php" style="text-decoration: none;">
		<h1 style="color: darkred;font-size: 65px;margin-left: 5px">Hotel Sunrise <i class="fas fa-sun" style="color: gold"></i></h1>
		</a>
	</div>
	<h1 style="text-align: center;padding-top: 20px;color: red">OUR ROOMS</h1>
	<div style="border: 1px solid black;width:280px;height: 700px;background-color: navajowhite;margin-left: 200px;margin-top: 50px">
		<h1 style="text-align: center;color: red">Single Room</h1>
		<img src="single.jpg" style="width: 200px;height: 200px;margin-left: auto;margin-right: auto;display: block;">
		<p>
			<h2 style="text-align: center;color: red">Highlights</h2>
			<h3 style="text-align: left;padding-left: 10px">&#9830 Single Bed</h3>
			<h3 style="text-align: left;padding-left: 10px">&#9830 Equiped with T.V and AC</h3>
			<h3 style="text-align: left;padding-left: 10px">&#9830 Free Breakfast at cafeteria</h3>
			<br>
			<h2 style="text-align: center;">Price:</h2>
			<h2 style="text-align: center;background-color: crimson">$150</h2>
			<h2 style="text-align: center;">Rooms Available:<?php
                $f3 =$sr - $csr;
                if($f3 <=0 )
                  { $f3 = "NO";
                    echo $f3;
                  }
                  else{
                      echo $f3;
                  }

                ?></h2>
			<a href="reservation.php" class="book">Book Your Room</a>
		</p>
	</div>

	<div style="border: 1px solid black;width:280px;height: 700px;background-color: navajowhite;float: left;margin:-700px 0px 0px 530px">
		<h1 style="text-align: center;color: red">Deluxe Room</h1>
		<img src="deluxe.jpg" style="width: 200px;height: 200px;margin-left: auto;margin-right: auto;display: block;">
		<p>
			<h2 style="text-align: center;color: red">Highlights</h2>
			<h3 style="text-align: left;padding-left: 10px">&#9830 Double Bed</h3>
			<h3 style="text-align: left;padding-left: 10px">&#9830 Equiped with T.V and AC</h3>
			<h3 style="text-align: left;padding-left: 10px">&#9830 Free Breakfast and Lunch </h3>
			<br>
			<h2 style="text-align: center;">Price:</h2>
			<h2 style="text-align: center;background-color: crimson">$230</h2>
			<h2 style="text-align: center;">Rooms Available: <?php 
                
                $f4 =$dr - $cdr; 
                if($f4 <=0 )
                  { $f4 = "NO";
                    echo $f4;
                  }
                  else{
                      echo $f4;
                  }
                ?></h2>
			<a href="reservation1.php" class="book">Book Your Room</a>
		</p>
	</div>

	<div style="border: 1px solid black;width:280px;height: 700px;background-color: navajowhite;margin:-700px 0px 0px 860px">
		<h1 style="text-align: center;color: red">Supreme Room</h1>
		<img src="supreme.jpg" style="width: 200px;height: 200px;margin-left: auto;margin-right: auto;display: block;">
		<p>
			<h2 style="text-align: center;color: red">Highlights</h2>
			<h3 style="text-align: left;padding-left: 10px">&#9830 King Size Bed</h3>
			<h3 style="text-align: left;padding-left: 10px">&#9830 Equiped with T.V and AC</h3>
			<h3 style="text-align: left;padding-left: 10px">&#9830 Free Breakfast and Lunch </h3>
			<h3 style="text-align: left;padding-left: 10px">&#9830 Free access to Swimming pool </h3>
			<h2 style="text-align: center;">Price:</h2>
			<h2 style="text-align: center;background-color: crimson">$320</h2>
			<h2 style="text-align: center;"> Rooms Available:<?php  
                  $f1 =$sc - $csc;
                  if($f1 <=0 )
                  { $f1 = "NO";
                    echo $f1;
                  }
                  else{
                      echo $f1;
                  }
                
                
                ?></h2>
			<a href="reservation2.php" class="book">Book Your Room</a>
		</p>
	</div>

         