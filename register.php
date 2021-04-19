<?php include('process.php') ?>
<!DOCTYPE html>
<title>Register</title>
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
        <h1>Register</h1>
        <form method="post" action="register.php" id="register_form">   
            
            <div class="input-group">
                <div class="input-box">
  	                <div <?php if (isset($name_error)): ?> class="form_error" <?php endif ?> >
	                    <input type="text" name="username" required class="name" placeholder="Username" value="<?php echo $username; ?>">
                        <i class="fa fa-user"></i>
	                    <?php if (isset($name_error)): ?>
	  	                <span><?php echo $name_error; ?></span>
	                     <?php endif ?>
  	                </div>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
  	                <div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
                        <input type="email" name="email" required class="name" placeholder="Email" value="<?php echo $email; ?>">
                        <i class="fa fa-envelope-square"></i>
                        <?php if (isset($email_error)): ?>
      	                <span><?php echo $email_error; ?></span>
                        <?php endif ?>
  	                </div>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
  	                <div>
  		                <input type="password"  placeholder="Password" name="password" required class="name">
                          <i class="fa fa-link"></i>
                        <?php if (isset($password_error)): ?>
                        <span><?php echo $password_error; ?></span>
                        <?php endif ?>
  	                </div>
                </div>
            </div>


  	        <div class="button-box">
  		        <button type="submit" name="register" id="reg_btn">Register</button>
  	        </div>

            <div>
                <p class="link"><a href="login.php">Already Registered? Click to login.</a></p>
            </div>

        </div>
        </div>
        </form>
    </div>
</body>
</html>