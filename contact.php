<html>
	<head>
		<title>PHP Form Design</title>
		<link rel="stylesheet" type="text/css" href="css/style4.css">
	</head>
	<body>
		<div id = "Main">
			<h1>Contact</h1>
			<?php
			// Get connection file
			require_once("91902_Assessment_HHawkins_mysqli.php")
			?>
		<div class="contact-container">
			<form action="connect.php" method="post">

			<!-- Fname code -->
			<div class="row">

			<div class="column">

			<label for="name">Full Name</label>

			</div>
			<div class="column2">

			<input type="text" id="name" name="name" placeholder="Your full name">

			</div>

			</div>

			<!-- Email code -->
			<div class="row">

			<div class="column">

			<label for="email">Email</label>

			</div>
			<div class="column2">

			<input type="text" id="email" name="emailaddress" placeholder="your email address">

			</div>

			</div>

			<!-- Contact Number code -->
			<div class="row">

			<div class="column">

			<label for="contactnumber">Contact Number</label>

			</div>
			<div class="column2">

			<input type="text" id="contactnumber" name="contactnumber" placeholder="A contact number">

			</div>

			</div>

			<!-- Subject code -->
			<div class="row">

			<div class="column">

			<label for="subject">Subject</label>

			</div>
			<div class="column2">

			<textarea id="body" name="body" placeholder="Write something..." style="height:200px"></textarea>

			</div>

			</div>

			<br>
			<!-- Submit code -->

			<div class="row">
			<input type="submit" value="Submit">
			</div>

			</form>
			</div>
			<!-- Copyright Statement -->
			<div id="footer">
			&copy; Copyright Harrison Hawkins, Tawa College 2023
			</div>
		</div>
	</body>
</html>
