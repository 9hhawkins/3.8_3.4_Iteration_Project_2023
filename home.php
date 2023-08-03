<!DOCTYPE html>
<html>
  
	<head>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="Author" content="Harrison">
			<meta name="Keywords" content="HTML, CSS, PHP, SQL, JavaScript, Music Database">
			<meta name="Description" content="13CSI Music Database with 13DIT Project">

			<title>Graeme's Music</title>

			<link rel="stylesheet" type="text/css" href="css/style2.css">
	</head>
 
	<body>
		<div class= "header">
			<burger><img src="images/burgermenu.png"></burger>
			<h1>Graeme's Music</h1>
		</div>
		<!-- Slideshow container -->
		<div class="slideshow-container">
			<div class="text">Recommended</div>
		  <!-- Full-width images with number and caption text -->
		  	<div class="mySlides1">
				<a href="playlist.php?img=images/img1.jpg&query=
(SELECT s.Song_ID, s.Title, g.Genre, al.Album, ar.Artist, s.Duration 
FROM Song_Details as s 
JOIN song2genre s2g ON s.Song_ID = s2g.Song_ID 
JOIN Genre_ID g ON g.Genre_ID = s2g.Genre_ID 
JOIN song2artist s2a ON s.Song_ID = s2a.Song_ID 
JOIN Artist_ID ar ON ar.Artist_ID = s2a.Artist_ID 
INNER JOIN Album_ID al ON s.Album_ID = al.Album_ID 
ORDER BY Title DESC, Artist DESC)"><img src="images/img1.jpg"></a>
				<img src="images/img1.jpg">
				<img src="images/img1.jpg">
				<img src="images/img1.jpg">
		  	</div>

		  	<div class="mySlides1">
				<a href="playlist.php?img=images/img2.jpg&query=(SELECT * FROM Song_Details)"><img src="images/img2.jpg"></a>
				<img src="images/img2.jpg">
				<img src="images/img2.jpg">
				<img src="images/img2.jpg">
		  	</div>

		  	<div class="mySlides1">
				<a href="playlist.php?img=images/img3.jpg&query=(SELECT s.Song_ID, s.Title, g.Genre, al.Album, ar.Artist, s.Duration FROM Song_Details as s JOIN song2genre s2g ON s.Song_ID = s2g.Song_ID JOIN Genre_ID g ON g.Genre_ID = s2g.Genre_ID JOIN song2artist s2a ON s.Song_ID = s2a.Song_ID JOIN Artist_ID ar ON ar.Artist_ID = s2a.Artist_ID INNER JOIN Album_ID al ON s.Album_ID = al.Album_ID ORDER BY Genre ASC, Artist ASC)"><img src="images/img3.jpg"></a>
				<img src="images/img3.jpg">
				<img src="images/img3.jpg">
				<img src="images/img3.jpg">
		 	 </div>

		  <!-- Next and previous buttons -->
		  	<a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
		  	<a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
			</div>
			<br>
		
				<!-- Slideshow container -->
		<div class="slideshow-container">
			<div class="text">Popular</div>
		  <!-- Full-width images with number and caption text -->
		  	<div class="mySlides2">
				<img src="images/img1.jpg">
				<img src="images/img1.jpg">
				<img src="images/img1.jpg">
				<img src="images/img1.jpg">
		  	</div>

		  	<div class="mySlides2">
				<img src="images/img2.jpg">
				<img src="images/img2.jpg">
				<img src="images/img2.jpg">
				<img src="images/img2.jpg">
		  	</div>

		  	<div class="mySlides2">
				<img src="images/img3.jpg">
				<img src="images/img3.jpg">
				<img src="images/img3.jpg">
				<img src="images/img3.jpg">
		 	 </div>

		  <!-- Next and previous buttons -->
		  	<a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
		  	<a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
			</div>
			<br>
		<!-- Slideshow container -->
		<div class="slideshow-container">
			<div class="text">Discover picks for you</div>
		  <!-- Full-width images with number and caption text -->
		  	<div class="mySlides3">
				<img src="images/img1.jpg">
				<img src="images/img1.jpg">
				<img src="images/img1.jpg">
				<img src="images/img1.jpg">
		  	</div>

		  	<div class="mySlides3">
				<img src="images/img2.jpg">
				<img src="images/img2.jpg">
				<img src="images/img2.jpg">
				<img src="images/img2.jpg">
		  	</div>

		  	<div class="mySlides3">
				<img src="images/img3.jpg">
				<img src="images/img3.jpg">
				<img src="images/img3.jpg">
				<img src="images/img3.jpg">
		 	 </div>

		  <!-- Next and previous buttons -->
		  	<a class="prev" onclick="plusSlides(-1, 2)">&#10094;</a>
		  	<a class="next" onclick="plusSlides(1, 2)">&#10095;</a>
			</div>
			<br>
		<script src="js/slideshow.js"></script>
		<footer><p>Footer</p></footer>
	</body>
