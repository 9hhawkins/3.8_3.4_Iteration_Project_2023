<div class="nav">
	<div id="nav-icon" class="">
 		<span></span>
  		<span></span>
  		<span></span>
 		<span></span>
	</div>
<nav id="nav">
	<ul>
		<li><a href="admin_home.php">Home</a></li>
		<li><a href="playlist.php?img=images/img1.jpg&query=
(SELECT s.Song_ID, s.Title, g1.Genre as 'Genre', g2.Genre as 'Secondary_Genre' ,al.Album, ar1.Artist as 'Artist', ar2.Artist as 'Secondary_Artist', s.Duration, s.Size FROM Song_Details as s JOIN song2genre s2g ON s.Song_ID = s2g.Song_ID JOIN Genre_ID g1 ON g1.Genre_ID = s2g.Genre_ID JOIN Genre_ID g2 ON g2.Genre_ID = s2g.Secondary_Genre_ID JOIN song2artist s2a ON s.Song_ID = s2a.Song_ID JOIN Artist_ID ar1 ON ar1.Artist_ID = s2a.Artist_ID JOIN Artist_ID ar2 on ar2.Artist_ID = s2a.Secondary_Artist_ID JOIN Album_ID al ON s.Album_ID = al.Album_ID ORDER BY Title DESC, Artist DESC)&genre=none">Query1</a></li>
		<li><a href="playlist.php?img=images/img3.jpg&query=(SELECT s.Song_ID, s.Title, g1.Genre as 'Genre', g2.Genre as 'Secondary_Genre' ,al.Album, ar1.Artist as 'Artist', ar2.Artist as 'Secondary_Artist', s.Duration, s.Size FROM Song_Details as s JOIN song2genre s2g ON s.Song_ID = s2g.Song_ID JOIN Genre_ID g1 ON g1.Genre_ID = s2g.Genre_ID JOIN Genre_ID g2 ON g2.Genre_ID = s2g.Secondary_Genre_ID JOIN song2artist s2a ON s.Song_ID = s2a.Song_ID JOIN Artist_ID ar1 ON ar1.Artist_ID = s2a.Artist_ID JOIN Artist_ID ar2 on ar2.Artist_ID = s2a.Secondary_Artist_ID JOIN Album_ID al ON s.Album_ID = al.Album_ID ORDER BY Genre ASC, Artist ASC)&genre=none">Query2</a></li>
		<li><a href="user_list.php">User List</a></li>
		<li><a href="sign_up.php">Sign Up New User</a></li>
		<li><a href="delete_user.php">Delete User</a></li>
		<li><a href="update_user.php">Update User</a></li>
	</ul>
	<ul style="margin-top: 290px;">
		<li><a href="index.html" style="color:red; font-weight: bold;">Sign Out</a></li>
	</ul>
</nav>
</div>

<script src="js/burger.js"></script>
