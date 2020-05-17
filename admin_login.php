<?php  
 session_start();  
 if(isset($_SESSION["user"]))  
 {  
      header("location:home.php");  
 }  
 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
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
<body style="background-color: bisque">
	<div style="padding: 1px;margin-top: -6px;text-align: center;">
      <a href="homepage.php" style="text-decoration: none;">
		<h1 style="color: darkred;font-size: 65px;margin-left: 5px;cursor: pointer;">Hotel Sunrise <i class="fas fa-sun" style="color: gold"></i></h1></a></div>
	<h1 style="text-align: center;color: red">Admin Login</h1>
	<div style="text-align: center;width: 400px;margin-left: 490px;border-radius: 8px;">
		<form method="post">
		<h3 style="margin-top: 10px"><b>Username</b></h3>
		<input type="text" name="user" style="width: 150px;padding: 5px;margin-top: -5px"><br>
		<h3><b>Password</b></h3>
		<input type="Password" name="pass" style="width: 150px;padding: 5px;margin-top: -5px"><br><br>
		<input type="submit" name="submit" value="Login" style="padding: 5px;margin-bottom: 20px;width: 100px;background-color: cyan;border-style: none;cursor: pointer;border-radius: 8px">
		</form>
	</div>
</body>
</html>

<?php
   include('db.php');
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['user']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pass']); 
      
      $sql = "SELECT id FROM loginform WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['user'] = $myusername;
         
         header("location: adminpage.php");
      }else {
         echo '<script>alert("Your Login Name or Password is invalid") </script>' ;
      }
   }
?>
