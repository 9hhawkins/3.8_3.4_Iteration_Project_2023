<!DOCTYPE html>
<html lang="en">
        <head>
                <meta charset = "utf-8" />
                <title>Graeme's Music</title>
                <link rel="stylesheet" type="text/css" href="css/style1.css">
        </head>
        <body>
                <main>
					<?php
							session_start();
							error_reporting (E_ALL ^ E_NOTICE); 
        					if(!isset($_SESSION['login_user'])){
								print "<p>Not logged in</p>";
					?>
								<div class="login-box">
									<h1>Please use admin login</h1>
									<form method="post" id="Login">
										<input type="text" name="username" placeholder="Enter user name" required/><br/>
										<input type="password" name="password" placeholder="Enter user password" required/><br/>
										<input type="submit" value="Login"/><br/>
									</form>
								</div>
					<?php
							}
							elseif(isset($_SESSION['login_user']) and $_SESSION['admin'] == "True"){
								$User = $_SESSION['login_user'];
								print "<p>Admin Login</p>";
							}
							else{
								print "<p>Logged in but not admin</p>";
						?>
								<div class="login-box">
									<h1>Please use admin login</h1>
									<form method="post" id="Login">
										<input type="text" name="login_username" placeholder="Enter user name" required/><br/>
										<input type="password" name="login_password" placeholder="Enter user password" required/><br/>
										<input type="submit" value="Login"/><br/>
									</form>
								</div>
					<?php
						ob_start();
						if($_SERVER["REQUEST_METHOD"] == "POST" and $_SESSION['admin'] = "False") {
							require "91902_Assessment_HHawkins_mysqli.php";

							$myusername = mysqli_real_escape_string($conn,$_POST['login_username']);
							$mypassword = mysqli_real_escape_string($conn,$_POST['login_password']);

							$query = "SELECT Username FROM Users WHERE Username = '$myusername' and Password = '$mypassword'";

							$result = mysqli_query($conn,$query);
							$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

							$count = mysqli_num_rows($result);

							if($count == 1 and $myusername == "Graeme" and $mypassword == 123){
								$_SESSION['login_user'] = $myusername;
								$_SESSION['admin'] = "True";
								header("location:sign_up.php");
							} 
							else {
								$error = "ERROR! Your Admin Login Name or Password is invalid";
								}
							}
						ob_end_flush();
							}

						if($_SESSION['admin'] == "True"){
						?>
                        <div class="container"><!-- the div that holds the grid -->
								<div class="title">
									<h1 ><center>Sign Up</center></h1>
								</div>
                                <center><div class="content">
									<!-- Holds the main page content -->
										<form method="post" id="Sign Up">
											<input type="text" name="username" placeholder="Enter user name" required/><br/>
											<input type="password" name="password" placeholder="Enter user password" required/><br/>
											<input type="submit" value="Sign Up"/><br/>
										</form>
								<?php 
								}
									?>
										<?php
											//connect.php (tells where to connect servername, username, password, dbaseName)
											require "91902_Assessment_HHawkins_mysqli.php";
											print "<p>Connected to server</p>";

											$UserID = $_POST['username']; 
											$PW = $_POST['password'];

											//create a variable to store sql code for the 'Add Users' query
											$insertquery = "INSERT INTO Users(Username, Password) VALUES( '$UserID', '$PW' )";

											if ($_SERVER["REQUEST_METHOD"] == "POST" and $_SESSION['admin'] == "True")
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
											elseif($_SERVER["REQUEST_METHOD"] == "POST" and $_SESSION['admin'] == "False")
												{
												echo "<p>Login through admin login</p>";
												}
											else{
												echo "<p>Sign up above</p>";
												echo $error;
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
