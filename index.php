<?php

  $user = "";
  $pass = "";
  $validated = false;

  if ($_POST)
  {
    $user = $_POST['username'];
    $pass = $_POST['password'];
  }

 
  $_SESSION['login'] = "";
  if($user!="" && $pass!="")
  {
    $conn = @mysqli_connect ("localhost", "root", "", "a_learning") or die ("Could not access MySQL database.");
    //$rs = @mysqli_select_db ($conn, "a_learning") or die ("error");
    $sql = "SELECT * FROM user WHERE username = '$user' AND password = '$pass'";
    $rs = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($rs);
	$usertype = $row['usertype'];
    $result = mysqli_num_rows($rs);

    if ($result > 0) $validated = true;
    if($validated)
    {
      $_SESSION['login'] = "OK";
      $_SESSION['username'] = $user;
      $_SESSION['password'] = $pass;
      if($usertype==1){
		header('Location: admin/dashboard.php');
	  }
	  else if($usertype==2){
		header('Location: teacher/teacherdashboard.php');
	  }
	  if($usertype==3){
		header('Location: studentdashboard.php');
	  }

    }
    else
    {
      $_SESSION['login'] = "";
      echo "Please enter correct username and password.";
    }
  }
  else $_SESSION['login'] = "";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Learning Management System</title>

		<link rel ="stylesheet" href ="css/bootstrap.min.css" type="text/css">
		
		
		<style>
			#loginform{

				
				width: 50%;
				margin: auto;
				border: 1px solid gray;
				border-radius: 10px;
				padding: 10px 10px;
		
			
				background-color: white;
				
				
			}
			#desc{
				width: 300px;
				height: 500px;
				float: left;
				margin-left: 30px;
				color: white;
			}
			
			body{
				
				background-color: purple;
				background-image: url(images/back3.png);
				background-repeat: no-repeat;
				background-size: 1400px 650px;;

			}
			.nv{
				color: #000;
			}
			.nv nav div ul li a, .nv a{
				color: #fff;
			}
			#login{
				margin-top: 150px;
				margin-left: 900px;
			}
		</style>
	</head>	
<body>	
	<div class="row">
		<div class="col-md-12 nv">
			<?php include('includes/homenav.php'); ?>
		</div>
	</div>
		<div id="login">
			
		<div id="loginform">
			<p><b>Log in:</b></p>
			<form  action="index.php" method="post">
				<div class="form-group">
					<label for="username">Username:</label>
					<input type="text" class="form-control" name="username" id="username">
				
					<label for="password">Password:</label>
									
					<input type="password" class="form-control" name="password" id="password">
									
					<input type="submit" class="btn btn-primary" value="Login" style="float: left">
					<br>
					<br>
					<a href="">Register as a student</a>
					<br>
					<a href="">Register as a teacher</a>
				</div>
			</form>
		</div>  <!-- login form ends -->
		</div>


</body>
</html>

<?php ?>