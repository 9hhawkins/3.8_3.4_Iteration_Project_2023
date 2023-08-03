<?php error_reporting (E_ALL ^ E_NOTICE); ?> 
<!DOCTYPE html>
<html lang="en">
        <head>
                <meta charset = "utf-8" />
                <title>Graeme's Music</title>
                <link rel="stylesheet" type="text/css" href="css/style1.css">
        </head>
        <body>
                <main>
                        <div class="container"><!-- the div that holds the grid -->
								<div class="title">
									<h1 ><center>Delete User</center></h1>
								</div>
                                <center><div class="content">
									<!-- Holds the main page content -->
										<form method="post" id="Sign Up">
											<input type="text" name="username" placeholder="Enter user name" required/><br/>
											<input type="submit" value="Delete"/><br/>
										</form>
										<?php
											//connect.php (tells where to connect servername, username, password, dbaseName)
											require "91902_Assessment_HHawkins_mysqli.php";
											print "<p>Connected to server</p>";

											$UserID = $_POST['username']; 

											//create a variable to store sql code for the 'Add Users' query
											$insertquery = "DELETE FROM Users WHERE `Username` = '$UserID'";

											if ($_SERVER["REQUEST_METHOD"] == "POST")
												{
													if (mysqli_query($conn,$insertquery))
													{
													echo "<p>Record deleted:</p>";
													}
													else
													{
													echo "<p>Error deleting record:</p>";
													}
											}

											else{
												echo "<p>Delete user above</p>";
											}
											?>
								</div></center>
                        </div>
					<footer>
            		<p>&copy Copyright Harrison Hawkins 2023</p>
					</footer>
                </main>
        </body>
</html>
