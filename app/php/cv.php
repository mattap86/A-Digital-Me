<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Résumé | Matt Tapley | Digital Me</title>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="../js/scrollAnimation.js" defer></script>
    <script src="../js/hamburger.js" defer></script>
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/navStyles.css">
    <link rel="stylesheet" type="text/css" href="../css/cvStyles.css">
    <link rel="stylesheet" type="text/css" href="../css/textStyles.css">
</head>
<body>
    <nav>
        <a href="../../index.php">
            <img class="logo" src="../images/mptLogo.jpg" />
        </a>
        <ul>
            <li><a href="../../index.php">HOME</a></li>
            <li><a href="#">RÉSUMÉ</a></li>
            <li><a href="#">ABOUT ME</a></li>
            <li><a href="#">PORTFOLIO</a></li>
            <li><a href="../../index.php#contact">GET IN TOUCH</a></li>
        </ul>
        <div id="hamburger" class="mobNav">
            <span>&#9776</span>
        </div>
        <div id="sideBar" class="sideNav">
            <a id="closeSideNav" href="javascript:void(0)">&times</a>
            <a href="../../index.php">HOME</a>
            <a href="#">RÉSUMÉ</a>
            <a href="#">ABOUT ME</a>
            <a href="#">PORTFOLIO</a>
            <a href="#">GET IN TOUCH</a>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row ">
            <div class="col-xs-12 heroCv">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-1 col-md-6 col-md-offset-6 heroCvText">
                        <h1>I<span>'</span>M</h1>
                        <h1>MATTHEW</h1>
                        <h1>TAPLEY<span>.</span></h1>
                        <h2 class="subText">FULL-STACK DEVELOPER</h2>
                        <h2>PUZZLE ADDICT</h2>
                        <h2>BOOK WORM</h2>
                        <a href="https://github.com/mattap86"><img src="../images/github.jpg"></a>
                        <a href="https://twitter.com/mattap86"><img src="../images/twitter.jpg"></a>
                        <a href="https://www.linkedin.com/in/matthew-tapley-5b5a0ba0/"><img src="../images/linkedin.jpg" /></a>
                        <a href="mailto:matthew.tapley@hotmail.co.uk"><img src="../images/mail.jpg"></a>
                    </div>
                </div>
                <div class="scrollDiv row">
                    <a href="#paperCv"><img class="scrollImage" src="../images/scrollDown.png" /></a>
                </div>
            </div>
            <div class="container-fluid col-xs-12 heroCv2">
                <div class="col-xs-12 heroCv3"></div>
            </div>
        </div>
        <a class="anchor" id="paperCv"></a>
        <div class="row">
            <div class="col-xs-12 paperCvContainer">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="paperCvLink">
                            <h1 class="col-xs-12">KEEP SCROLLING TO SEE MY ADVENTURE SO FAR...</h1>
                            <h3 class="col-xs-12">...OR FOR ALL YOU OLD SCHOOLERS, GET A PAPER COPY VIA THE BUTTON BELOW.</h3>
                            <div class="col-xs-12 paperBtn">
                                <a href="../mtapley%20cv.pdf">
                                    <img src="../images/cv.png" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row education">
            <div class="col-xs-12">
                <h1>EDUCATION</h1>
            </div>
        </div>
        <div class="row school">
            <div class="col-xs-6 col-xs-offset-3 col-sm-2 col-sm-offset-3 logoBg">
                <img class="rasLogo" src="../images/rasLogo.png" alt="Ralph Allen School Logo" />
                <p class="schoolName">RALPH ALLEN SCHOOL 2000-2002</p>
            </div>
            <div class="col-xs-12 col-md-4 col-md-offset-1 blurb">
                <p>THIS IS WHERE MY FORMAL EDUCATION DREW TO AN END BEFORE STEPPING INTO THE WORKPLACE. DESPITE MY DECISION NOT
                    TO ENTER INTO FURTHER EDUCATION, I ENJOYED MY TIME HERE IMMENSELY</p>
                <p>QUALIFICATIONS</p>
                <ul>
                    <li>English Literature: A</li>
                    <li>English Language: B</li>
                    <li>Physics: B</li>
                    <li>Chemistry: B</li>
                    <li>Biology: B</li>
                    <li>Mathematics: B</li>
                    <li>History: C</li>
                    <li>German: D</li>
                </ul>
            </div>
            <div class="col-xs-12 col-md-4 col-md-offset-2 blurb2">
                <p>HERE'S WHERE MY JOURNEY INTO THE WORLD OF CODING BEGAN. SPENDING FOUR INTENSIVE MONTHS AT THE ACADEMY
                BUILDING A FOUNDATION OF KNOWLEDGE IN A RANGE OF LANGUAGES TO GIVE ME A GREAT BASIS TO BUILD ON AND
                CONTINUE MY DEVELOPMENT</p>
                <p>PROFICIENCIES</p>
                <ul>
                    <li>JS, JQUERY</li>
                    <li>PHP</li>
                    <li>SLIM</li>
                    <li>CSS/SCSS, BOOTSTRAP</li>
                    <li>HANDLEBARS</li>
                    <li>GITHUB</li>
                    <li>GULP</li>
                    <li>MYSQL</li>
                    <li>AGILE WORKING (CERTIFIED SCRUM MASTER)</li>
                    <li>WORKING TOWARDS ZCE</li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-2 col-sm-offset-1">
                <img class="maydenLogo" src="../images/maydenAcademyLogo.jpg" alt="Mayden Academy Logo" />
                <p class="schoolName">MAYDEN ACADEMY 2018</p>
            </div>
        </div>
    </div>
</body>
//todo
//finish cv page
//finish paper cv and link to cv page
//complete bests projects and push to git hub
//create text png to overlay blue birds image
//link scrum master cert. to cv page
//check over css and run everything through psr checker
//check responsiveness across sites
//display mini projects on home through db with descriptions
//build portfolio page with carousel on slick desktop screen image with scrolling descriptions and github/site links
//edit story so far to something less wanky
//tidy directory structure
//attempt js scroll animation
//plan about me page
//write tests for all functions
//recompile hbs data
//have kyam and charlie/mike check everything

</html>

