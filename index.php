<?php

session_start();

require_once 'app/php/editStory.php';
require_once 'app/php/functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Matt Tapley | Digital Me</title>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="app/js/handlebars-v4.0.12.js" defer></script>
    <script src="app/js/hamburger.js" defer></script>
    <script src="app/js/carousel.js" defer></script>
    <script src="app/js/data.js" defer></script>
    <link rel="icon" href="app/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="app/css/navStyles.css">
    <link rel="stylesheet" type="text/css" href="app/css/styles.css">
    <link rel="stylesheet" type="text/css" href="app/css/textStyles.css">
</head>
<body>
    <nav>
        <a href="index.php">
            <img class="logo" src="app/images/mptLogo.jpg" />
        </a>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="app/php/cv.php">RÉSUMÉ</a></li>
            <li><a href="#">ABOUT ME</a></li>
            <li><a href="#">PORTFOLIO</a></li>
            <li><a href="#contact">GET IN TOUCH</a></li>
        </ul>
        <div id="hamburger" class="mobNav">
            <span>&#9776</span>
        </div>
        <div id="sideBar" class="sideNav">
            <a id="closeSideNav" href="javascript:void(0)">&times</a>
            <a href="index.php">HOME</a>
            <a href="app/php/cv.php">RÉSUMÉ</a>
            <a href="#">ABOUT ME</a>
            <a href="#">PORTFOLIO</a>
            <a href="#contact">GET IN TOUCH</a>
        </div>
    </nav>
    <div class="hero sticky">
        <div class="langIconsRowOne absolute">
            <img class="langIcon" src="app/images/php7Logo.png" />
            <img class="langIcon" src="app/images/jsLogo.png" />
            <img class="langIcon" src="app/images/bootstrapLogo.png" />
            <img class="langIcon" src="app/images/handlebarsLogo.png" />

        </div>
        <div class="langIconsRowTwo absolute">
            <img class="langIcon" src="app/images/jqueryLogo.png" />
            <img class="langIcon" src="app/images/scrumLogo.png" />
            <img class="langIcon" src="app/images/mysqlLogo.png" />
        </div>
    </div>
    <div class=" container-fluid profile relative">
        <div class="heroText absolute">
            <p>FULL-STACK DEVELOPMENT</p>
        </div>
        <img class="cvPic fixed" src="app/images/cvBg3.jpg" />
        <div class="cvBoxTopHalf sticky"></div>
        <div class="cvBoxBottomHalf sticky"></div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 profileText absolute">
                <p>HELLO, I'M
                    <span class="highlightText">MATTHEW TAPLEY</span>
                    , A 32-YEAR-OLD,
                    <span class="highlightText">FULL-STACK DEVELOPER</span>
                    STUDYING AT
                    <span class="highlightText">MAYDEN ACADEMY</span>
                    , BATH.
                </p>
            </div>
        </div>
        <div>
            <div class="preCodingHistory sticky">
                <p class="storySoFar absolute">MY STORY SO FAR</p>
                <div class="hospitality absolute">
                    <p><?php echo $preCodingHistory ?></p>
                </div>
            </div>
        </div>
        <div class="miniProjects">
            <div class="miniProjectsBg sticky">
                <p class="miniProjectsText">MINI PROJECTS</p>
            </div>
            <div class="miniProjectsPicCover sticky">
                <div class="container">
                    <div class="carousel">
                        <a href="../../NASA-SITE-BUILD/index.html">
                            <img class="slide slide1" src="app/images/nasaBuild.jpg">
                        </a>
                        <a href="../../runningGame/2018-running-game/index.html">
                            <img class="slide slide2" src="app/images/pumpkinDash.jpg">
                        </a>
                        <a href="../../SVG-Solar-System/index.html">
                            <img class="slide slide3" src="app/images/solarSystem.jpg">
                        </a>
                        <a href="../../SVG-clock/index.html">
                            <img class="slide slide4" src="app/images/clock.jpg">
                        </a>
                        <a href="https://dev.maydenacademy.co.uk/projects/2017/aptitude-test/app/index.html">
                            <img class="slide slide5" src="app/images/aptitude.jpg">
                        </a>
                        <a href="https://dev.maydenacademy.co.uk/projects/2018Aug/pokedex-2018-phbees/">
                            <img class="slide slide6" src="app/images/pokedex.jpg">
                        </a>
                    </div>
                    <div class="next"> > </div>
                    <div class="prev"> < </div>
                </div>
            </div>
        </div>
        <div class="container-fluid contactMe">
            <div class="row">
                <a class="anchor" id="contact"></a>
                <div class="col-md-12 col-lg-5 map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2490.501405161214!2d-2.3524962845003907!3d51.37546212816267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48718105e7286b9f%3A0xdc9d227aca49b8a1!2sMayden+Academy+-+Software+Development+Training!5e0!3m2!1sen!2suk!4v1542756178030" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <form class="col-md-12 col-lg-4 enquiries" action="#" method="post">
                    <h1>GET IN TOUCH</h1>
                    <p>NAME:</p>
                    <input type="text" name="name" placeholder="Nasa" class="required">
                    <p>EMAIL:</p>
                    <input type="email" name="email" placeholder="nasa@nasa.nasa" class="required">
                    <p>SUBJECT:</p>
                    <input type="text" name="subject" placeholder="Free Holiday">
                    <p>MESSAGE:</p>
                    <textarea rows="6" cols="50" maxlength="600" name="message" placeholder="Congratulations! You've won a trip to Mars!!"></textarea>
                    <input type="submit" value="Send" class="sendBtn">
                </form>
            </div>
        </div>
        <footer class="cms">
            <a href="app/php/login.php">
                <p>CMS LOGIN</p>
            </a>
        </footer>
    </div>
</body>
</html>