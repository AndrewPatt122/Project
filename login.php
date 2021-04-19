<?php
    require('db/DbConnectSQLI.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($conn, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM users WHERE username='$username'
                     AND password='$password'";
        $result = mysqli_query($conn, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user index page
            header("Location: index.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>

<!DOCTYPE html>
<title>Login</title>
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
<body>
    <div class="form_wrapper">
        <h1>Login</h1>
        <form class="form" method="post" name="login">  
            
            <div class="input-group">
                <div class="input-box">
					<input type="text" name="username" placeholder="Name" required class="name">
					<i class="fa fa-user"></i>
				</div>
            </div>

            <div class="input-group">
            <div class="input-box">
					<input type="password"  placeholder="Password" name="password" required class="name">
                    <i class="fa fa-link"></i>
				</div>
            </div>

  	        <div class="button-box">
  		        <button type="submit" name="login" id="reg_btn">Login</button>
  	        </div>

            <div>
                <p class="link"><a href="register.php">Create New Account</a></p>
            </div>
        </form>
    </div>
</body>
</html>

<?php
    }
?>