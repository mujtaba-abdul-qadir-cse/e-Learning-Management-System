<?php
	session_start();
	require_once('db.php');

?>

<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/mdb.min.css">
	 <link rel="stylesheet" href="css/codebase.min.css">
	 <link rel="stylesheet"  href="css/style.css">
	
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
		.center{
			width: 100%;
			margin: auto;
			height: 400px;
			
		}
	</style>
</head>	
<body>

	

<div class="container-fluid">
	
	<div class="row">
		<div class="col-md-12 nv">
			<?php include('includes/homenav.php'); ?>
		</div>
	</div>
	







	<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white float-left">
		<div class="position-sticky">
			<div class="list-group list-group-flush mx-3 mt-4">
				<a href="teacher/teacherdashboard.php" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
				<span>Dashboard</span></a>
				<a href="#" class="list-group-item list-group-item-action py-2 ripple">
				<span>My Classes</span>
				</a>
                <a href="whiteboard.php" class="list-group-item list-group-item-action py-2 ripple active"
				><span>Whiteboard</span></a
				>
				<a href="#" class="list-group-item list-group-item-action py-2 ripple"
				><span>Share Materials</span></a
				>
				
				<a href="#" class="list-group-item list-group-item-action py-2 ripple"
				><span>Quizzes</span></a
				>
				<a href="#" class="list-group-item list-group-item-action py-2 ripple">
				<span>Assignments</span>
				</a>
				<a href="#" class="list-group-item list-group-item-action py-2 ripple"
				><span>Announcements</span></a
				>
				<a href="#" class="list-group-item list-group-item-action py-2 ripple"
				><span>Messages</span></a>     
			</div>
    	</div>
  	</nav>
  <!-- Sidebar -->
	  
	

	<div class="row">
		<div class="col-md-12">
			<div class="card center" id="wt-container"></div>
					<script src="https://www.whiteboard.team/dist/api.js"></script>
					<script type="text/javascript">
						var wt = new api.WhiteboardTeam('#wt-container', {
							clientId: 'f7ad4ebfca2e32ac62af7f67853d9c3a',
							boardCode: 'newwhiteboardlms'
						});
					</script>
		
		</div>
	</div>
		
	
		

</div>	
	
	
	
	

</body>
</html>