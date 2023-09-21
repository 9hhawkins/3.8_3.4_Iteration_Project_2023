<!DOCTYPE html>
<html>
	<head>
		<?php 
			session_start();
			$_SESSION['admin']="False";
		?>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="Author" content="Harrison">
			<meta name="Keywords" content="HTML, CSS, PHP, SQL, JavaScript, Music Database">
			<meta name="Description" content="13CSI Music Database with 13DIT Project">

			<title>Graeme's Music</title>

			<link rel="stylesheet" type="text/css" href="css/style2.css">
			<link rel="stylesheet" type="text/css" href="css/nav.css">
	</head>
	<body>
		<?php require "nav.php";?>
		<div class= "header">
			<h1>Graeme's Music</h1>
		</div>
		<div class= "merge">
		</div>
		<?php require "slideshow.php";?>
	</body>
</html>
