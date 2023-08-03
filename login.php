<?php
	ob_start();
	session_start();
	$error = NULL;
	$admin = NULL;
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		require "91902_Assessment_HHawkins_mysqli.php";
		
		$myusername = mysqli_real_escape_string($conn,$_POST['username']);
		$mypassword = mysqli_real_escape_string($conn,$_POST['password']);
		
		$query = "SELECT Username FROM Users WHERE Username = '$myusername' and Password = '$mypassword'";
		
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		
		$count = mysqli_num_rows($result);
		
		if($count == 1 and $myusername == "Graeme" and $mypassword == "123"){
			$_SESSION['login_user'] = $myusername;
			$_SESSION['admin'] = "True";
			header("location: home.php");
		} 
		elseif($count == 1){
			$_SESSION['login_user'] = $myusername;
			$_SESSION['admin'] = "False";
			header("location: home.php");
		}
		else {
			$error = "ERROR! Your Login Name or Password is invalid";
			}
		}
	ob_end_flush()
?>
		
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
									<h1 ><center>Login</center></h1>
								</div>
							
                                <center><div class="content">
									<!-- Holds the main page content -->
										<h3><form method="post" id="login">
											<input type="text" name="username" placeholder="Enter user name"/><br/>
											<input type="password" name="password" placeholder="Enter user password"/><br/>
											<input type="submit" value="Login"/><br />
										</form></h3>
										<h3><?php echo $error; ?></h3>
								</div></center>
                        </div>
					<footer>
            		<p>&copy Copyright Harrison Hawkins 2023</p>
					</footer>
                </main>
        </body>
</html>
