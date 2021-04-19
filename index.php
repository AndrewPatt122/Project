<?php
session_start();

if (isset($_SESSION['username'])) {

?>

<!DOCTYPE html>
<title>Home</title>
<html>
<header>
    <meta charset="utf-8" />

    <!--Link to style sheet-->
    <link rel="stylesheet" href="stylesheet.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">


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
    <div class="content-area">
        <div class="content-img">
            <img src="images/logos/youtubeicon.jpg" alt="icon" />
        </div>

        <div class="wrapper">
            <p style="color: black; font-family: poppins; font-size: 28px; font-weight: bold;">Our Story</p>
            <p style="color: black; font-family: poppins; font-size: 20px; display:inline">Imperial Sounds is a Digital Copyright Free Music Promotor. We share a wide range of different genres of music to suit many different needs for music producers and content creators.</p>
        </div>

        <div id="channel-data" class="col s6">
        </div>

        <div class="row" id="video-container">

        <?php


/**
 * Sample PHP code for youtube.playlistItems.list
 * See instructions for running these code samples locally:
 * https://developers.google.com/explorer-help/guides/code_samples#php
 */

if (!file_exists(__DIR__ . '/vendor/autoload.php')) {
  throw new Exception(sprintf('Please run "composer require google/apiclient:~2.0" in "%s"', __DIR__));
}
require_once __DIR__ . '/vendor/autoload.php';

$client = new Google_Client();
$client->setApplicationName('API code samples');
$client->setScopes([
    'https://www.googleapis.com/auth/youtube.readonly',
]);

// TODO: For this request to work, you must replace
//       "YOUR_CLIENT_SECRET_FILE.json" with a pointer to your
//       client_secret.json file. For more information, see
//       https://cloud.google.com/iam/docs/creating-managing-service-account-keys
$client->setAuthConfig('client_secret_46940857506-vpvpc302p5df5aiai8siheas6gk6kqsh.apps.googleusercontent.com.json');
$client->setAccessType('offline');

// Request authorization from the user.
$authUrl = $client->createAuthUrl();
printf("Open this link in your browser:\n%s\n", $authUrl);
print('Enter verification code: ');
$authCode = trim(fgets(STDIN));

// Exchange authorization code for an access token.
$accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
$client->setAccessToken($accessToken);

// Define service object for making API requests.
$service = new Google_Service_YouTube($client);

$queryParams = [
    'maxResults' => 2,
    'playlistId' => 'PLN7QfirxDI_ziYWdcxJdiRlM8YWr7L-Sp'
];

$response = $service->playlistItems->listPlaylistItems('snippet,contentDetails', $queryParams);
print_r($response);
?>

        </div>
</body>
</html>

<?php
}else{
    header("Location: register.php");
    exit();
}

?>
