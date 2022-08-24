<?php
	session_start();
	require_once('../db.php');
	if(isset($_POST['submit']) != "") {
		$sid= mysqli_real_escape_string($conn, $_POST['sid']);
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$dept = mysqli_real_escape_string($conn, $_POST['dept']);
		$query = mysqli_query($conn, "INSERT INTO user(user_id,username,password,name,dept, usertype, reg_status)VALUES
										('$sid','$username', 'student','$name','$dept', 3, 1)");
	
	if($query) {
		$msg="Class added succesfully!";
		echo "<script type='text/javascript'>alert('$msg');</script>";
		//header('Location:dashboard.php');
	} else {
	   $errormsg="There was an error.";
		echo "<script type='text/javascript'>alert('$errormsg');</script>";
		//header('Location:dashboard.php');
	}
	}
   ob_end_flush();

?>



<html>
<head>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/mdb.min.css">
	 <link rel="stylesheet" href="../css/codebase.min.css">
	 <link rel="stylesheet"  href="../css/style.css">
	
	<style>
		.box{
			background-color: blue;
			width: 200px;
			height: 100px
			opacity: 0.7;
			border-radius: 10px;
			
			
		}
		#main1{
			margin-top: 150px;
		}
		body{
				
				background-color: #00DBDE;
				background-image: linear-gradient(90deg, #00DBDE 0%, #FC00FF 100%);

				
			}

		.nv{
			color: #000;
		}
		.nv nav div ul li a, .nv a{
			color: #fff !important; 
		}

		.form-holder{
			width: 50%;
			margin: auto;
			background-color: white;
			padding: 10px;
			border-radius: 10px;
		}
	
	</style>
</head>	
<body>

	

<div class="container-fluid">
	
	<div class="row">
		<div class="col-md-12 nv">
			<?php include('../includes/homenav.php'); ?>
		</div>
	</div>
	







	<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white float-left">
		<div class="position-sticky">
			<div class="list-group list-group-flush mx-3 mt-4">
				<a href="dashboard.php" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
				<span>Dashboard</span></a>
				<a href="#" class="list-group-item list-group-item-action py-2 ripple">
				<span>Add Classes</span>
				</a>
				<a href="#" class="list-group-item list-group-item-action py-2 ripple active"
				><span>Add Students</span></a
				>
				<a href="#" class="list-group-item list-group-item-action py-2 ripple"
				><span>Add Teachers</span></a
				>
				<a href="#" class="list-group-item list-group-item-action py-2 ripple"
				><span>Announcements</span></a
				>
				<a href="#" class="list-group-item list-group-item-action py-2 ripple"
				><span>Messages</span></a>     
			</div>
    	</div>
  	</nav>
  <!-- Sidebar ends -->
  <div class="form-holder">
	<p>Add student</p>
	<form action="addstudents.php" method="post" name="sinsertform">
					<p>
					<label for="sid"> Student ID: </label>
					<input type="text" name="sid" placeholder="Enter Student ID"/>
					</p>
					<p>
					<label  for="username"> Username : </label>
					<input type="text" name="username" placeholder="Enter Username"/>
					</p>
					<p>
					<label for="name"> Name: </label>
					<input type="text" name="name" placeholder="Enter Student Name"/>
					</p>
					<p>
					<label for="dept"> Department: </label>
					<input type="text" name="dept" placeholder="Enter Department Code"/>
					</p>
					
					<p>
					<input type="submit" class="btn btn-primary" name="submit" value="Add Student"/>
					</p>
		</form>
	</div>
		
	
	
	

</body>
</html>