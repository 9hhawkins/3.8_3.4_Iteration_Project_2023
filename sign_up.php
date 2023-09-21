<!DOCTYPE html>
<html lang="en">
        <head>
                <meta charset = "utf-8" />
                <title>Graeme's Music</title>
                <link rel="stylesheet" type="text/css" href="css/style1.css">
				<link rel="stylesheet" type="text/css" href="css/nav.css">
        </head>
        <body>
                <main>
					<?php
						session_start();
						error_reporting (E_ALL ^ E_NOTICE);
						if ($_SESSION['admin'] == "True"){
							require "admin_nav.php";
						}
						else{
							
						}
					?>
                        <div class="container"><!-- the div that holds the grid -->
								<div class="title">
									<h1 ><center>Sign Up</center></h1>
								</div>
                                <center><div class="content">
									<!-- Holds the main page content -->
										<form method="post" id="Sign Up">
											<label><input type="text" name="username" placeholder="Enter user name" style="background-image: url(images/user.png);" required/></label>
											<label><input type="password" name="password" placeholder="Enter user password" style="background-image: url(images/padlock.png);" required/></label>
											<input type="submit" value="Sign Up"/>
										</form>
	
										<?php
											//connect.php (tells where to connect servername, username, password, dbaseName)
											require "91902_Assessment_HHawkins_mysqli.php";

											$UserID = $_POST['username']; 
											$PW = $_POST['password'];

											//create a variable to store sql code for the 'Add Users' query
											$insertquery = "INSERT INTO Users(Username, Password) VALUES( '$UserID', '$PW' )";

											if ($_SERVER["REQUEST_METHOD"] == "POST")
												{
													if (mysqli_query($conn,$insertquery))
													{
													echo "<p>Record inserted:</p>";
													}
													else
													{
													echo "<p>Error inserting record:</p>";
													}
											}
											else{
												echo "<p>Sign up above</p>";
												echo $error;
											}
											?>
									<a href="login.php"><p>Already have an account click here</p></a>
								</div>
							</center>
                        </div>
					<footer>
            		<p>&copy Copyright Harrison Hawkins 2023</p>
					</footer>
                </main>
        </body>
</html>
