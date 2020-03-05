<?php
	session_start();
	include('config.php');
?>
<?php
		if(isset($_GET['page'])){
			$_SESSION['page'] = $_GET['page'];
		}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eICT</title>
    <link href="images/logo.png" rel="shortcut icon" type="icon">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font.css" rel="stylesheet" />
	<link href="css/all.css" rel="stylesheet" />
	<link href="css/fontawesome.css" rel="stylesheet" />
	<link href="css/fontawesome.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
	
  </head>
  <body>
	<img src="images/background1.jpg" style="position:absolute; width:100%; height:100%;margin:0;padding:0;opacity:0.1;" > 
	<div class="whole">
	
	<div class="container">
		<div class="content">
			<div class="desh_main">
				<div class="sidebar">
					<div class="sidebar_logo">
						<a href="#">
						<img src="images/logo.png" style="width: 50%; display: block; margin: 0 auto; padding: 10px;">
						</a>
					</div>
					<div class="sidebar_nav">
						<ul class="navi">
							<li><a href="sdashboard.php?page=Home" class="on"> <i class="fas fa-home"></i> Home</a></li>
							<li><a href="snotifications.php?page=Notification"> <i class="fas fa-bell"></i> Notifications</a></li>
							<li><a href="exams.php?page=Exams" > <i class="fas fa-eye-dropper"></i> Exams</a></li>
							<li><a href="sstandings.php?page=Standings"> <i class="fas fa-chart-line"></i> Standings</a></li>
							<li><a href="student_profile.php?page=Profile"> <i class="fas fa-user-circle"></i> My Profile</a></li>
							<li><a  href="signout.php?page=" > <i class="fas fa-sign-out-alt"></i> Sign Out</a></li>
						</ul>
					</div>
				</div>