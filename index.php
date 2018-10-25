<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home | Matt Tapley | Digital Me</title>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" defer></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous" defer></script>
    <script src="js/handlebars-v4.0.12.js"></script>
    <script src="js/data.js" defer></script>
    <script src="js/carousel.js" defer></script>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <header class="navContainer">
        <nav class="mobNav">
            <div></div>
        </nav>
        <nav class="lrgNav">
            <ul>
                <li>
                    <a href="index.php">
                        <div class="logoBtn headerContent">
                            <img class="logo" src="images/mptLogo.jpg" />
                        </div>
                    </a>
                </li>
                <li>
                    <a href="index.php">
                        <div class="navBtn">
                            <p>HOME</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="navBtn">
                            <p>RÉSUMÉ</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="navBtn">
                            <p>ABOUT ME</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="navBtn">
                            <p>PORTFOLIO</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="navBtn">
                            <p>GET IN TOUCH</p>
                        </div>
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="hero">
        <div class="languageIconsRowOne">
            <img class="phpIcon" src="images/php7Logo.png" />
            <img class="jsIcon" src="images/jsLogo.png" />
            <img class="bootstrapIcon" src="images/bootstrapLogo.png" />
            <img class="handlebarsIcon" src="images/handlebarsLogo.png" />

        </div>
        <div class="languageIconsRowTwo">
            <img class="jqueryIcon" src="images/jqueryLogo.png" />
            <img class="scrumIcon" src="images/scrumLogo.png" />
            <img class="mysqlIcon" src="images/mysqlLogo.png" />
            <img class="" src="" />
        </div>
    </div>
    <div class=" container-fluid profile">
        <img class="cv" src="images/cv.png" />
        <div class="cvBoxTopHalf"></div>
        <div class="cvBoxBottomHalf"></div>
        <div class="heroTextOne">
            <img class="heroLogo" src="images/mptLogoLg.png" />
        </div>
        <div class="heroTextTwo">
            <p>FULL-STACK DEVELOPMENT</p>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 profileText">
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
            <div class="preCodingHistory">
                <p class="storySoFar">MY STORY SO FAR</p>
                <div class="hospitality">
                    <p class="highlightText">APART FROM A BRIEF FORAY INTO CODING IN MY LATE<p>
                    <p class="highlightText">TEENS, MY CAREER UP UNTIL NOW HAS BEEN<p>
                    <p class="highlightText"> EXCLUSIVELY IN THE HOSPITALITY INDUSTRY, RUNNING<p>
                    <p class="highlightText"> PUBS, BARS AND RESTAURANTS, LOOKING AFTER<p>
                    <p class="highlightText"> PEOPLE AND CREATING MEMORABLE EXPERIENCES.</p>
                </div>
            </div>
            <div class="col-2">
                <div class="leftCol">
                    <p class="maydenTitle">MY TIME AT MAYDEN ACADEMY</p>
                    <img class="mayden" src="images/maydenAcademyLogo.jpg" />
                </div>
                <div class="rightCol">
                    <div class="maydenText">
                        <p class="highlightTextTwo">4 MONTH INTENSIVE COURSE</p>
                        <p class="topicTitle"><u>HTML & CSS</u></p>
                        <p>STYLING HTML WITH CSS</p>
                        <p>UNDERSTANDING THE DOM & DOCUMENT FLOW</p>
                        <p>STATIC & DYNAMIC WEBSITES</p>
                        <p>COMMON CSS BROWSER BUGS</p>
                        <p class="topicTitle"><u>SCRUM & SOFTWARE DEVELOPER ESSENTIALS:</u></p>
                        <p>ATTAINING CERTIFIED SCRUM MASTER STATUS</p>
                        <p>UNDERSTANDING THE ROLE OF POFO</p>
                        <p>INTRODUCTION TO & UNDERSTANDING GIT</p>
                        <p>INTRODUCTION TO WEB SECURITY</p>
                        <p>USING THE COMMAND LINE</p>
                        <p class="topicTitle"><u>PHP BASICS:</u></p>
                        <p>UNDERSTANDING SYNTAX & STRUCTURAL ELEMENTS</p>
                        <p>CORRECT APPLICATION OF CONTROL-FLOW STRUCTURES</p>
                        <p>DATA TYPES, TYPE-JUGGLING & OPERATOR PRECEDENCE</p>
                        <p>DRY PRINCIPLE</p>
                        <p>BUILT-IN FILE SYSTEM & ARRAY FUNCTIONS</p>
                        <p>HTTP, COOKIES & SESSIONS</p>
                        <p class="topicTitle"><u>DATABASES & SQL:</u></p>
                        <p>UNDERSTANDING DATABASES</p>
                        <p>UNDERSTANDING SQL</p>
                        <p>CREATING & OPTIMISING DATABASES</p>
                        <p>EFFICIENT QUERYING OF A DATABASE</p>
                        <p>USING DATABASES FROM PHP</p>
                        <p>DATABASE ENGINES</p>
                        <p class="topicTitle"><u>JAVASCRIPT BASICS:</u></p>
                        <p>JS ORIGINS & HOW IT WORKS</p>
                        <p>JS STRUCTURE & DATA TYPES</p>
                        <p>BUILDING & MANIPULATING DATA WITH JS</p>
                        <p>THE DOM & JS</p>
                        <p>JS SCOPE</p>
                        <p>AJAX</p>
                        <p>JS CONSOLE</p>
                        <p>JQUERY</p>
                        <p class="topicTitle"><u>ADVANCED FRONT END:</u></p>
                        <p>CSS PREPROCESSORS</p>
                        <p>HOW JS & CSS WORK TOGETHER EFFICIENTLY</p>
                        <p>RWD & CSS FRAMEWORKS</p>
                        <p>PWAs</p>
                        <p class="topicTitle"><u>OBJECT-ORIENTATED PROGRAMMING WITH PHP:</u></p>
                        <p>DESIGN PATTERNS & ANTI-PATTERNS</p>
                        <p>UNDERSTANDING SOLID & DRY</p>
                        <p>UTILITY OF REGULAR EXPRESSIONS</p>
                        <p>BUILDING SIMPLE OO CLASS HIERARCHY</p>
                        <p>UNIT TESTING OO FILES</p>
                        <p>EXCEPTIONS & ERROR HANDLING</p>
                        <p>DOCUMENTING SOURCE CODE WITH PHPDOC ANNOTATIONS</p>
                        <p class="topicTitle"><u>MVC & PHP FRAMEWORKS:</u></p>
                        <p>UNDERSTANDING & USE OF MVC STRUCTURE</p>
                        <p>UNDERSTANDING & USE OF PHP FRAMEWORKS</p>
                        <p>RECOGNITION & UNDERSTANDING OF OTHER DESIGN PATTERNS & ANTI-PATTERNS</p>
                        <p class="topicTitle"><u>MVC & PHP FRAMEWORKS:</u></p>
                        <p>REST APIs & THEIR USE</p>
                        <p>NODE.JS & EXPRESS</p>
                        <p>CONNECTING TO A DB FROM A NODE APP</p>
                        <p>JS FRAMEWORKS</p>
                        <p>JS FRAMEWORKS WITH NODE</p>
                        <p class="topicTitle"><u>JS W NODE OR ZEND:</u></p>
                        <p></p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer">
            <div class="miniProjects">
                <p class="miniProjectsText">MINI PROJECTS</p>
                <div class="container">
                    <div id="myCarousel" class="carousel slide">
                        <ol class="carousel-indicators">
                            <li class="projectOne active"></li>
                            <li class="projectTwo"></li>
                            <li class="projectThree"></li>
                            <li class="ProjectFour"></li>
                            <li class="ProjectFive"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="images/clock.jpg" alt="Svg Clock" width="460" height="440">
                                <div class="carousel-caption">
                                    <h3>SVG Clock Animation</h3>
                                    <p class="projectCaption">A simple SVG design of a clock which I then animated while we learnt
                                        css animations.</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/solarSystem.jpg" alt="Svg Solar System" width="460" height="345">
                                <div class="carousel-caption">
                                    <h3>SVG Solar System Model</h3>
                                    <p class="projectCaption">A SVG model of the Solar System. A lot of fun getting it to a rough scale and
                                    in terms of size and planetary orbit velocity.</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/pilotShop.jpg" alt="Pilot Shop" width="460" height="345">
                                <div class="carousel-caption">
                                    <h3>Pilot Shop</h3>
                                    <p class="projectCaption">An attempt to recreate a web page during first week at Mayden, revisited
                                        to apply some of the new tools I'd acquired over later weeks.</p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="images/helloWorld.jpg" alt="Jumbotron" width="460" height="345">
                                <div class="carousel-caption">
                                    <h3>Jumbotron</h3>
                                    <p class="projectCaption">The very first html/css exercise at the academy. Making a stock Jumbotron.</p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="images/runningGame.jpg" alt="Pumpkin Dash" width="460" height="345">
                                <div class="carousel-caption">
                                    <h3>Pumpkin Dash</h3>
                                    <p class="projectCaption">My first group project at the academy. Also, my first role as Scrum Master.</p>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" role="button">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>