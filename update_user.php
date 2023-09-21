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
									<h1 ><center>Update User</center></h1>
								</div>
                                <center><div class="content">
									<!-- Holds the main page content -->
										<form method="post" id="Update user">
											<label><input type="text" name="username" placeholder="Enter user name" style="background-image: url(images/user.png);"/></label>
											<label><input type="password" name="password" placeholder="Enter user password" style="background-image: url(images/padlock.png);"/></label>
											<label><input type="password" name="password2" placeholder="Enter new password" style="background-image: url(images/padlock.png);"/></label>
											<input type="submit" value="Update"/><br/>
										</form>
										<?php
											//connect.php (tells where to connect servername, username, password, dbaseName)
											require "91902_Assessment_HHawkins_mysqli.php";

											$username = $_POST['username'];
											$password = $_POST['password'];
											$newpassword = $_POST['password2'];

											//create a variable to store sql code for the 'Add Users' query
											$insertquery = "UPDATE Users SET `Password` = '$newpassword' WHERE `Username` = '$username' AND `Password` = '$password'";

											if ($_SERVER["REQUEST_METHOD"] == "POST")
												{
													if (mysqli_query($conn,$insertquery))
													{
													echo "<p>Record Updated:</p>";
													}
													else
													{
													echo "<p>Error Updating record:</p>";
													}
											}

											else{
												echo "<p>Update user above</p>";
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
