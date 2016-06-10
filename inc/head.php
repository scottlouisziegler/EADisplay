<!DOCTYPE html>
<html>
    <head>
		<title><? echo $pageTitle ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
		<script src="http://code.jquery.com/jquery.js"></script>
		<!-- tab test-->
			<!-- jQuery UI -->
			<script src="http://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
			<!-- jQuery UI CSS -->
			<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
			<!-- Tabs -->
			<script>
				$(function() {
				$( "#tabs" ).tabs();
				});
			</script>
		<!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=IM+Fell+English' rel='stylesheet' type='text/css'>
		
		 <!-- Site-specific styles-->
		<link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
		<div class="container">
			<header>
				<div id="banner">
					<!-- <img src="img/WebExhibitBanner1.gif"> -->
				</div>
					<!-- 
				<div class="navbar">
					<div class="navbar-inner">
						<ul class="nav">
							<li>Menu Here</li>
						</ul>
					</div>
				</div>
				-->
			</header>
			
			<?php include 'eadUrl.php'; ?>
			