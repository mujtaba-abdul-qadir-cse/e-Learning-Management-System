<?php
	session_start();
	require_once('../db.php');

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
				<a href="dashboard.php" class="list-group-item list-group-item-action py-2 ripple active" aria-current="true">
				<span>Dashboard</span></a>
				<a href="courses.php" class="list-group-item list-group-item-action py-2 ripple">
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
  <!-- Sidebar -->
	  
	
<!-- <main id="main1">	-->
	<!--
	<div class="card box">
		<?php 
			
			$query_students = mysqli_query($conn,"select * from user where usertype=3")or die(mysqli_error());
			$totalstudents = mysqli_num_rows($query_students);
			$query_teachers = mysqli_query($conn,"select * from user where usertype=2")or die(mysqli_error());
			$totalteachers = mysqli_num_rows($query_teachers);
			$query_courses = mysqli_query($conn,"select * from class")or die(mysqli_error());
			$totalcourses = mysqli_num_rows($query_courses);
		?>
			<p class="card-text">Total students: 
			<br> <?php echo $totalstudents ?>
			</p>
	
	
	</div>
	
	-->
	
	<div class="row">
		<div class="col-md-4">
			<div class="card" style="width: 18rem;">
				  <div class="card-body">
					<h5 class="card-title text-center">No. of students:</h5>
					<!--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>-->
					<p class="card-text text-center"><?php echo $totalstudents ?></p>
					<!--
					<a href="#" class="card-link">Card link</a>
					<a href="#" class="card-link">Another link</a>
					-->
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card" style="width: 18rem;">
				  <div class="card-body">
					<h5 class="card-title text-center">No. of teachers:</h5>
					<!--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>-->
					<p class="card-text text-center"><?php echo $totalteachers ?></p>
					<!--
					<a href="#" class="card-link">Card link</a>
					<a href="#" class="card-link">Another link</a>
					-->
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card" style="width: 18rem;">
				  <div class="card-body">
					<h5 class="card-title text-center">Total courses:</h5>
					<!--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>-->
					<p class="card-text text-center"><?php echo $totalcourses ?></p>
					<!--
					<a href="#" class="card-link">Card link</a>
					<a href="#" class="card-link">Another link</a>
					-->
				</div>
			</div>
		</div>
		
	</div>	
		

</div>	
	
	
	
	

</body>
</html>