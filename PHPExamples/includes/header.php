<?php 

	$companyName = "Golf Course Booking";
	require('includes/arrays.php'); 

?><!--allows nav.php to grab from arrays.php-->

<!DOCTYPE html>
<html lang="EN" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="Index">
		<title><?php echo TITLE; ?></title>
		<title></title>
		<link href="styles.css" rel="stylesheet">
	</head>
	<body id="final-example">
	
		<div class="wrapper">
			
			<div id="banner">
				<a href="index.php" title="Return to Home">
					<img src="img/banner.jpg" alt="Golf Course">
				</a>
			</div><!--banner-->
			
			<div id="nav">
					<?php include('includes/nav.php'); ?>
			</div><!--nav-->
			
			<div class="content">