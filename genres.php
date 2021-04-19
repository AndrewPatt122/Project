<!DOCTYPE html>
<title>Genres</title>
<html>
<header>
    <meta charset="utf-8" />

    <!--Link to style sheet-->
    <link rel="stylesheet" href="genresportfolio.css">
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
</header>

<body>
    <!--Body containing code the  Genre page-->
    <div class="content-wrapper">
        <div class="portfolio-items-wrapper">

            <div class="portfolio-item-wrapper">
                <div class="portfolio-img-background" style="background-image:url(images/chill.jpg)"></div>

                <div class="img-text-wrapper">
                    <div class="logo-wrapper">
                        <a href="https://www.youtube.com/playlist?list=PLN7QfirxDI_yQuVNB2cfUJTuhUXXjCWmM" target="_blank">
                            <img src="images/logos/chilllogo.png" alt="">
                        </a>
                    </div>

                    <div class="subtitle">Chill Music Playlist</div>
                </div>
            </div>

            <div class="portfolio-item-wrapper">
                <div class="portfolio-img-background" style="background-image:url(images/danceandedm.jpg)"></div>
                <div class="img-text-wrapper">
                    <div class="logo-wrapper">
                        <a href="https://www.youtube.com/playlist?list=PLN7QfirxDI_wgfOhABK2P_XCMnABmZCpw" target="_blank">
                            <img src="images/logos/danceandedmlogo.png" alt="">
                        </a>
                    </div>

                    <div class="subtitle">Dance & EDM Music Playlist.</div>
                </div>
            </div>

            <div class="portfolio-item-wrapper">
                <div class="portfolio-img-background" style="background-image:url(images/deephouse.jpg)"></div>
                <div class="img-text-wrapper">
                    <div class="logo-wrapper">
                        <a href="https://www.youtube.com/playlist?list=PLN7QfirxDI_yVk1t2e2oW9mbusFFSX78W" target="_blank">
                            <img src="images/logos/deephouselogo.png" alt="">
                        </a>
                    </div>

                    <div class="subtitle">Deep House Music Playlist.</div>
                </div>
            </div>

            <div class="portfolio-item-wrapper">
                <div class="portfolio-img-background" style="background-image:url(images/futurebass.jpg)"></div>
                <div class="img-text-wrapper">
                    <div class="logo-wrapper">
                        <a href="https://www.youtube.com/playlist?list=PLN7QfirxDI_wjholCHdWPkWj4v0nhe18Q" target="_blank">
                            <img src="images/logos/futurebasslogo.png" alt="">
                        </a>
                    </div>

                    <div class="subtitle">Future Bass Music Playlist.</div>
                </div>
            </div>

            <div class="portfolio-item-wrapper">
                <div class="portfolio-img-background" style="background-image:url(images/house.jpg)"></div>
                <div class="img-text-wrapper">
                    <div class="logo-wrapper">
                        <a href="https://www.youtube.com/playlist?list=PLN7QfirxDI_xIkoFpuIy-TCO7HAmN2ZLT" target="_blank">
                            <img src="images/logos/houselogo.png" alt="">
                        </a>
                    </div>

                    <div class="subtitle">House Music Playlist.</div>
                </div>
            </div>

            <div class="portfolio-item-wrapper">
                <div class="portfolio-img-background" style="background-image:url(images/lofi.jpg)"></div>
                <div class="img-text-wrapper">
                    <div class="logo-wrapper">
                        <a href="https://www.youtube.com/playlist?list=PLN7QfirxDI_wxYUYznXkC5UWL7SQsgytZ" target="_blank">
                            <img src="images/logos/lofilogo.png" alt="">
                        </a>
                    </div>

                    <div class="subtitle">Lo-Fi Music Playlist.</div>
                </div>
            </div>

            <div class="portfolio-item-wrapper">
                <div class="portfolio-img-background" style="background-image:url(images/mixes.jpg)"></div>
                <div class="img-text-wrapper">
                    <div class="logo-wrapper">
                        <a href="https://www.youtube.com/playlist?list=PLN7QfirxDI_wf7B7upY_B7-KbI2UucHZ-" target="_blank">
                            <img src="images/logos/mixeslogo.png" alt="">
                        </a>
                    </div>

                    <div class="subtitle">Mixes Playlist.</div>
                </div>
            </div>

            <div class="portfolio-item-wrapper">
                <div class="portfolio-img-background" style="background-image:url(images/music.jpg)"></div>
                <div class="img-text-wrapper">
                    <div class="logo-wrapper">
                        <a href="https://www.youtube.com/playlist?list=PLN7QfirxDI_ziYWdcxJdiRlM8YWr7L-Sp" target="_blank">
                            <img src="images/logos/musiclogo.png" alt="">
                        </a>
                    </div>

                    <div class="subtitle">Collection of Music Playlist.</div>
                </div>
            </div>

            <div class="portfolio-item-wrapper">
                <div class="portfolio-img-background" style="background-image:url(images/tropicalhouse.jpg)"></div>
                <div class="img-text-wrapper">
                    <div class="logo-wrapper">
                        <a href="https://www.youtube.com/playlist?list=PLN7QfirxDI_z0vD73fcxe1LlDrUk6KXar" target="_blank">
                            <img src="images/logos/tropicalhouselogo.png" alt="">
                        </a>
                    </div>

                    <div class="subtitle">Tropical House Music Playlist.</div>
                </div>
            </div>

        </div>
    </div>


    </div>
</body>

<!--Script for interactive images on the Genre page-->
<script>
    const portfolioItems = document.querySelectorAll('.portfolio-item-wrapper');

    portfolioItems.forEach(portfolioItem => {
        portfolioItem.addEventListener('mouseover', () => {
            console.log(portfolioItem.childNodes[1].classList)
            portfolioItem.childNodes[1].classList.add('image-blur');
        });

        portfolioItem.addEventListener('mouseout', () => {
            console.log(portfolioItem.childNodes[1].classList)
            portfolioItem.childNodes[1].classList.remove('image-blur');
        });
    });
</script>
</html>