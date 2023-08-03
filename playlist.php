<!DOCTYPE html>
<html>
  
	<head>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="Author" content="Harrison">
			<meta name="Keywords" content="HTML, CSS, PHP, SQL, JavaScript, Music Database">
			<meta name="Description" content="13CSI Music Database with 13DIT Project">

			<title>Graeme's Music</title>

			<link rel="stylesheet" type="text/css" href="css/style3.css">
	</head>
 
	<body>

<?php
	$query = $_GET["query"];
	$img = $_GET["img"];
?>
		<header>
			<img src="<?php echo $img;?>">
			<time>
				<h2>[Total Time]</h2>
			</time>
		</header>
		<headings1>
			<h1>Title</h1>
			<h1>Genre</h1>
			<h1>Album</h1>
			<h1>Artist</h1>
			<h1>Duration</h1>
		</headings1>
<?php	
	require "91902_Assessment_HHawkins_mysqli.php";
	$result = mysqli_query($conn,$query);
			
	while($output=mysqli_fetch_array($result))
	{
?>		
		<playlist-content>
			<p><?php echo $output['Title']; ?></p>
			<Genre><p><?php echo $output['Genre']; ?></p></Genre>
			<Album><p><?php echo $output['Album']; ?></p></Album>
			<Artist><p><?php echo $output['Artist']; ?></p></Artist>
			<Duration><p><?php echo $output['Duration']; ?></p></Duration>
		</playlist-content>
<?php
	}
?>
	</body>
</html>
