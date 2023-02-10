<?php

session_start();



include 'common/connect.php';

if(!isset($_SESSION['admin_id']))
{
    header('location:index.php');
}

//session close

$id = $_GET['moreid'];

$city = $obj->query("select user.user_id,user.name,user.email,user.address,user.city_id,city.city_name from user inner join city on user.city_id = city.city_id");
$v_city = $city->fetch_object();

$area = $obj->query("select user.user_id,user.name,user.email,user.address,user.area_id,.area.area_name from user inner join area on user.area_id = area.area_id");
$v_area = $area->fetch_object();

$result = $obj->query("select * from user where user_id='$id'");
$row = $result->fetch_object();
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>User more details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<?php include 'common/sidebar.php'; ?>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<?php include 'common/header.php'; ?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h3 class="title1">Tables</h3>
					<div class="panel-body widget-shadow">
						<h4>Basic Table:</h4>
						<table class="table">
							<thead>
								<tr>
								  <td>ID</td>
								  <td><?php echo $row->user_id; ?></td>
								</tr>
							</thead>
							<tbody>
                                <tr>
								  <td>Name</td>
								  <td><?php echo $row->name; ?></td>
								</tr>
								<tr>
								  <td>Email</td>
								  <td><?php echo $row->email; ?></td>
								</tr>
                                <tr>
								  <td>Contact</td>
								  <td><?php echo $row->contact; ?></td>
								</tr>
                                <tr>
								  <td>Address</td>
								  <td><?php echo $row->address; ?></td>
								</tr>
                                <tr>
								  <td>Register date</td>
								  <td><?php echo $row->reg_date; ?></td>
								</tr>
                                <tr>
								  <td>Gender</td>
								  <td><?php echo $row->gender; ?></td>
								</tr>
                                <tr>
								  <td>Password</td>
								  <td><?php echo $row->password; ?></td>
								</tr>
                                <tr>
								  <td>DOB</td>
								  <td><?php echo $row->dob; ?></td>
								</tr>
                                <tr>
								  <td>City name</td>
								  <td><?php echo $v_city->city_name; ?></td>
								</tr>
                                <tr>
								  <td>Area name</td>
								  <td><?php echo $v_area->area_name; ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		<?php include 'common/footer.php'; ?>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"> </script>
</body>
</html>