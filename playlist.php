<!DOCTYPE html>
<html>
  
	<head>
		<?php 
			session_start();
		?>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="Author" content="Harrison">
			<meta name="Keywords" content="HTML, CSS, PHP, SQL, JavaScript, Music Database">
			<meta name="Description" content="13CSI Music Database with 13DIT Project">

			<title>Graeme's Music</title>

			<link rel="stylesheet" type="text/css" href="css/style3.css">
			<link rel="stylesheet" type="text/css" href="css/nav.css">
	</head>
	<body>
		<?php
			if ($_SESSION['admin'] == 'True'){
				require "admin_nav.php";
			}
			else{
				require "nav.php";
			}
			$query = $_GET['query'];
			$img = $_GET['img'];
			$genre = $_GET['genre'];
		?>
		<header>
			<?php 
			if ($query == "Genre_Query"){
				?>
				<div class="title">
					<h2><?php print $genre;?></h2>
				</div>
				<?php
				$query = "SELECT s.Song_ID, s.Title, g1.Genre as 'Genre', g2.Genre as 'Secondary_Genre' ,al.Album, ar1.Artist as 'Artist', ar2.Artist as 'Secondary_Artist', s.Duration, s.Size FROM Song_Details as s JOIN song2genre s2g ON s.Song_ID = s2g.Song_ID JOIN Genre_ID g1 ON g1.Genre_ID = s2g.Genre_ID JOIN Genre_ID g2 ON g2.Genre_ID = s2g.Secondary_Genre_ID JOIN song2artist s2a ON s.Song_ID = s2a.Song_ID JOIN Artist_ID ar1 ON ar1.Artist_ID = s2a.Artist_ID JOIN Artist_ID ar2 on ar2.Artist_ID = s2a.Secondary_Artist_ID JOIN Album_ID al ON s.Album_ID = al.Album_ID WHERE g1.Genre = '$genre' OR g2.Genre = '$genre'";
				}
			else{
				$query = $query;
				?>
				<div class="title">
					<h2>All Songs</h2>
				</div>
				<?php
			}
			if ($genre == "none"){
						$time_query="SELECT SEC_TO_TIME(SUM(`Duration`)) as 'Time_Duration' 
FROM Song_Details as s 
JOIN song2genre s2g ON s.Song_ID = s2g.Song_ID 
JOIN Genre_ID g1 ON g1.Genre_ID = s2g.Genre_ID 
JOIN Genre_ID g2 ON g2.Genre_ID = s2g.Secondary_Genre_ID";
			}
			else{
				$time_query="SELECT SEC_TO_TIME(SUM(`Duration`)) as 'Time_Duration' 
FROM Song_Details as s 
JOIN song2genre s2g ON s.Song_ID = s2g.Song_ID 
JOIN Genre_ID g1 ON g1.Genre_ID = s2g.Genre_ID 
JOIN Genre_ID g2 ON g2.Genre_ID = s2g.Secondary_Genre_ID 
WHERE g1.Genre = '$genre' OR g2.Genre = '$genre'";
			}
			?>
			<img src="<?php echo $img;?>" width="200" height="200">
		</header>
		<div class= "merge">
			<?php
			require "91902_Assessment_HHawkins_mysqli.php";
			$time=mysqli_query($conn,$time_query);
			while($time_output=mysqli_fetch_array($time))
			{
			?>
			<time><h2> Total Time: [<?php echo $time_output['Time_Duration'];?>]</h2></time>
			<?php
			}
			?>
		</div>
		<headings1>
			<h2>Title</h2>
			<h2>Genre</h2>
			<h2>Album</h2>
			<h2>Artist</h2>
			<h3>Time</h3>
		</headings1>
<?php	
	require "91902_Assessment_HHawkins_mysqli.php";
	$result = mysqli_query($conn,$query);
			
	while($output=mysqli_fetch_array($result))
	{
?>		
		<hr>
		<playlist-content>
			<p><?php echo $output['Title']; ?></p>
			<Genre><p><?php echo $output['Genre']; ?></p></Genre>
			<Genre><p><?php echo $output['Secondary_Genre']; ?></p></Genre>
			<Album><p><?php echo $output['Album']; ?></p></Album>
			<Artist><p><?php echo $output['Artist']; ?></p></Artist>
			<Artist><p><?php echo $output['Secondary_Artist']; ?></p></Artist>
			<Duration><p><?php echo $output['Duration']; ?></p></Duration>
		</playlist-content>
<?php
	}
?>
	</body>
</html>
