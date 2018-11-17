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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="app/js/handlebars-v4.0.12.js" defer></script>
    <script src="app/js/carousel.js" defer></script>
    <script src="app/js/data.js" defer></script>
    <link rel="icon" href="app/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="app/css/navStyles.css">
    <link rel="stylesheet" type="text/css" href="app/css/styles.css">
    <link rel="stylesheet" type="text/css" href="app/css/textStyles.css">
</head>
<body>
    <header class="navContainer fixed">
        <a href="index.php">
            <div class="logoBtn">
                <a href="app/php/login.php">
                    <img class="logo" src="app/images/mptLogo.jpg" />
                </a>
            </div>
        </a>
        <nav class="mobNav">
            <div></div>
        </nav>
        <nav class="lrgNav">
            <ul class="navBtns fixed">
            </ul>
        </nav>
    </header>
    <div class="hero sticky">
        <div>
            <img class="heroLogo absolute" src="app/images/mptLogoLg.png" />
        </div>
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
        <img class="cvPic fixed" src="app/images/cv.png" />
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
            <div class="col-2">
                <div class="leftCol">
                    <p class="maydenTitle fixed">MY TIME AT MAYDEN ACADEMY</p>
                    <img class="maydenLogo fixed" src="app/images/maydenAcademyLogo.jpg" />
                </div>
                <div class="rightCol">
                    <div class="maydenText">
                        <p class="highlightTextTwo">4 MONTH INTENSIVE COURSE</p>
                        <div class="topics"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="miniProjects">
            <div class="miniProjectsBg sticky"></div>
            <div class="miniProjectsPicCover sticky">
                <p class="miniProjectsText">MINI PROJECTS</p>
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
                        <a href="../../pokedex-2018-phbees/src/public/login.php">
                            <img class="slide slide6" src="app/images/pokedex.jpg">
                        </a>
                    </div>
                    <div class="next"> > </div>
                    <div class="prev"> < </div>
                </div>
            </div>
        </div>
        <div class="cms">
            <a href="app/php/login.php">
                <p>CMS LOGIN</p>
            </a>
        </div>
    </div>
</body>
</html>