<?php
	session_start();
	require_once('../db.php');
	if(isset($_POST['submit']) != "") {
		$classid = mysqli_real_escape_string($conn, $_POST['classid']);
		$classcode = mysqli_real_escape_string($conn, $_POST['classcode']);
		$classname = mysqli_real_escape_string($conn, $_POST['classname']);
		$query = mysqli_query($conn, "INSERT INTO class(class_id,class_code,class_name)VALUES
										('$classid','$classcode','$classname')");
	
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
				<a href="courses.php" class="list-group-item list-group-item-action py-2 ripple active">
				<span>Courses</span>
				</a>
				<a href="addstudents.php" class="list-group-item list-group-item-action py-2 ripple"
				><span>Add Students</span></a
				>
				<a href="addteachers.php" class="list-group-item list-group-item-action py-2 ripple"
				><span>Add Teachers</span></a
				>
				<a href="announcements.php" class="list-group-item list-group-item-action py-2 ripple"
				><span>Announcements</span></a
				>
				<a href="../messages.php" class="list-group-item list-group-item-action py-2 ripple"
				><span>Messages</span></a>     
			</div>
    	</div>
  	</nav>
	
  <!-- Sidebar ends -->

  <div class="form-holder">
    <p>Add Course</p>
	<form action="courses.php" method="post" name="insertform">
					<p>
					<label for="classid"> Course ID: </label>
					<input type="text" name="classid" placeholder="Enter Course ID"/>
					</p>
					<p>
					<label  for="classcode"> Course code : </label>
					<input type="text" name="classcode" placeholder="Enter Course Code"/>
					</p>
					<p>
					<label for="classname"> Course Title: </label>
					<input type="text" name="classname" placeholder="Enter Course Title"/>
					</p>
					<p>
					<input type="submit" class="btn btn-primary" name="submit" value="Add Course"/>
					</p>
		</form>
	</div>
		
	
	
	

</body>
</html>