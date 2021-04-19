<?php	

	//connection to database
	include("db/DbConnectSQLI.php");
	include("auth-session.php");

	//check connection
	if(isset($_POST['submit'])){

	$full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$artistlabel_name = mysqli_real_escape_string($conn, $_POST['artistlabel_name']);
	$track_url = mysqli_real_escape_string($conn, $_POST['track_url']);
	$track_download_link = mysqli_real_escape_string($conn, $_POST['track_download_link']);
	$spotify_url = mysqli_real_escape_string($conn, $_POST['spotify_url']);
	$soundcloud_url = mysqli_real_escape_string($conn, $_POST['soundcloud_url']);
	$instagram_url = mysqli_real_escape_string($conn, $_POST['instagram_url']);
	$facebook_url = mysqli_real_escape_string($conn, $_POST['facebook_url']);
	$other_links = mysqli_real_escape_string($conn, $_POST['other_links']);
	$comments = mysqli_real_escape_string($conn, $_POST['comments']);

	//create SQL
	$insertcontact = "INSERT INTO contact_info(full_name,email,artistlabel_name,track_url,track_download_link,spotify_url,soundcloud_url,instagram_url,facebook_url,other_links,comments)VALUES('$full_name', '$email', '$artistlabel_name', '$track_url', '$track_download_link', '$spotify_url', '$soundcloud_url', '$instagram_url', '$facebook_url', '$other_links', '$comments')";
	$createcontact = mysqli_query($conn, $insertcontact) or die(mysqli_error($conn));
	}
?>

<!DOCTYPE html>
<title>Submit Form</title>
<html>
<header>
    <meta charset="utf-8" />

    <!--Link to style sheet-->
    <link rel="stylesheet" href="submitform.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <div class="box-area">
        <div class="wrapper">
            <div class="logo">
                <a href="#">Imperial Sounds</a>
            </div>
            <nav>
                <a href="index.php">Home</a>
                <a href="genres.php">Genres</a>
                <a href="submityourmusic.php">Submit Your Music!</a>
                <a href="about.php">About Us</a>
				<a href="register.php">Register/Log In</a>
            </nav>
        </div>
    </div>   
		       
    <div class="banner-area">
        <h2>Imperial Sounds Music</h2>
        <h3 style="color: white; font-family: poppins;">Home for the latest and best copyright free music!</h3>
    </div>
	
</header>

<!--Code for HTML form with some validation-->
<body>
	<div class="form_wrapper">
		<h2>Submit Your Music!</h2>
		<form action="#" method="POST">
			<div class="input-group">
				<div class="input-box">
					<label>Name</label>
					<input type="text" name="full_name" placeholder="Name (required)" required class="name">
					<i class="fa fa-user"></i>
				</div>
			</div>

			<div class="input-group">
				<div class="input-box">
					<label>Email</label>
					<input type="text" name="email" placeholder="Email (required)" required class="name">
					<i class="fa fa-envelope-square"></i>
				</div>
			</div>

			<div class="input-group">
				<div class="input-box">
					<label>Artist/Label Name</label>
					<input type="text" name="artistlabel_name" placeholder="Artist/Label Name (required)" required class="name">
					<i class="fa fa-user"></i>
				</div>
			</div>

			<div class="input-group">
				<div class="input-box">
					<label>Track URL</label>
					<input type="text" name="track_url" placeholder="Track URL (required)" required class="name">
					<i class="fa fa-music"></i>
				</div>
			</div>

			<div class="input-group">
				<div class="input-box">
					<label>Track Download Link</label>
					<input type="text" name="track_download_link" placeholder="Track Download Link (required)" required class="name">
					<i class="fa fa-link"></i>
				</div>
			</div>

			<div class="input-group">
				<div class="input-box">
					<label>Spotify URL</label>
					<input type="text" name="spotify_url" placeholder="Spotify URL (optional)" class="name">
					<i class="fa fa-link"></i>
				</div>
			</div>

			<div class="input-group">
				<div class="input-box">
					<label>Soundcloud URL</label>
					<input type="text" name="soundcloud_url" placeholder="Soundcloud URL (optional)" class="name">
					<i class="fa fa-link"></i>
				</div>
			</div>

			<div class="input-group">
				<div class="input-box">
					<label>Instagram URL</label>
					<input type="text" name="instagram_url" placeholder="Instagram URL (optional)" class="name">
					<i class="fa fa-link"></i>
				</div>
			</div>

			<div class="input-group">
				<div class="input-box">
					<label>Facebook URL</label>
					<input type="text" name="facebook_url" placeholder="Facebook URL (optional)" class="name">
					<i class="fa fa-link"></i>
				</div>
			</div>

			<div class="input-group">
				<div class="input-box">
					<label>Other Links</label>
					<input type="text" name="other_links" placeholder="Other Links (optional)" class="name">
					<i class="fa fa-link"></i>
				</div>
			</div>

			<div class="input-group">
				<div class="input-box">
					<textarea cols="46" rows="3" name="comments" placeholder="Additional Comments (optional)" class="name"></textarea>
					<i class="fa fa-comment"></i>
				</div>
			</div>

			<!--Button to submit information to be stored in database-->
			<div class="button-box">
				<button type="submit" value="submit" name="submit"><i class="fa fa-paper-plane"></i> Submit!</button>
			</div>
		</form>
	</div>

</body>
</html>