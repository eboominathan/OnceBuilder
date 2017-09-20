<?php
ob_start("ob_gzhandler");
$home=true;

# SESSION -----------------
session_start();

# CONFIG -----------------
require_once($_SERVER['DOCUMENT_ROOT'].'/once/config.php');

# PAGE START -------------------
echo '
<!DOCTYPE html>
<html>
	<head>
		<!-- Latest compiled and minified jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

		<!-- Latest compiled and minified modernizr -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!-- Latest font awesome -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		
		<!-- Latest compiled and minified modernizr -->
		<link rel="stylesheet" href="plugin.css">
		
		<!-- Latest compiled and minified modernizr -->
		<script src="plugin.js"></script>
	</head>
	<body>';
		# PAGE GRIDS -------------------
		require_once('plugin.php');
		echo '
	</body>
</html>';
ob_end_flush(); 
?>