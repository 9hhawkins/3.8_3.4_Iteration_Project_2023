<?php error_reporting (E_ALL ^ E_NOTICE); ?> 
<!DOCTYPE html>
<html lang="en">
        <head>
                <meta charset = "utf-8" />
                <title>Graeme's Music</title>
                <link rel="stylesheet" type="text/css" href="css/style1.css">
				<link rel="stylesheet" type="text/css" href="css/nav.css">
        </head>
        <body>
			<?php require "admin_nav.php";?>
                <main>
                        <div class="container"><!-- the div that holds the grid -->
								<div class="title">
									<h1 ><center>Delete User</center></h1>
								</div>
                                <center><div class="content">
									<!-- Holds the main page content -->
										<form method="post" id="Delete User">
											<label><input type="text" name="username" placeholder="Enter user name" style="background-image: url(images/user.png);" required/></label>
											<label><input type="text" name="password" placeholder="Enter password" style="background-image: url(images/padlock.png);" required/></label>
											<input type="submit" value="Delete"/><br/>
										</form>
										<?php
											//connect.php (tells where to connect servername, username, password, dbaseName)
											require "91902_Assessment_HHawkins_mysqli.php";

											$UserID = $_POST['username'];
											$PW = $_POST['password'];

											//create a variable to store sql code for the 'Add Users' query
											$insertquery = "DELETE FROM Users WHERE `Username` = '$UserID' AND `Password` = '$PW'";

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
