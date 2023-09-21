<?php error_reporting (E_ALL ^ E_NOTICE); ?> 
<!DOCTYPE html>
<html>
  
	<head>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="Author" content="Harrison">
			<meta name="Keywords" content="HTML, CSS, PHP, SQL, JavaScript, Music Database">
			<meta name="Description" content="13CSI Music Database with 13DIT Project">

			<title>Graeme's Music</title>

			<link rel="stylesheet" type="text/css" href="css/style5.css">
			<link rel="stylesheet" type="text/css" href="css/nav.css">
	</head>
 
	<body>
		<?php require "admin_nav.php";?>
		<div class= "header">
			<h1>Graeme's Music</h1>
		</div>
		<div class="merge">
		</div>
		<div class="content"><!-- Holds the main page content -->
					<section1>
						<h2>USERS</h2>
						<h2>PASSWORDS</h2>
					</section1>
					<h4>
					<?php
						//connect.php (tells where to connect servername, username, password, dbaseName)
						require "91902_Assessment_HHawkins_mysqli.php";
							
						//create a variable to store sql code for the 'display all users' query
						$query = ("SELECT * FROM Users");
												
						//run the query
						$result = mysqli_query($conn,$query);
					
						while ($output = mysqli_fetch_array($result))
						{
							?> <section2> <?php
							echo "<user1>" . $output['Username'] . "</user1>";
							echo "<user2>" . $output['Password'] . "</user2>";
							?> </section2> <?php
						//closes the while loop
							}
					?>
					<footer><p>&copy Copyright Harrison Hawkins 2023</p></footer>
			</h4>
		</div>
	</body>
</html>
