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
            <li><a href="#">GET IN TOUCH</a></li>
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
                        <a href="https://www.linkedin.com/in/matthew-tapley-5b5a0ba0/"><img src="../images/linkedin.jpg"></a>
                        <a href="mailto:matthew.tapley@hotmail.co.uk"><img src="../images/mail.jpg"></a>
                    </div>
                </div>
                <div class="scrollDiv row">
                    <a href="#paperCv"><img class="scrollImage" src="../images/scrollDown.png"></a>
                </div>
            </div>
            <div class="container-fluid col-xs-12 heroCv2">
                <div class="col-xs-12 heroCv3"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 paperCvContainer">
                <div class="row">
                    <div class="col-xs-12">
                        <a class="anchor" id="paperCv"></a>
                        <div class="paperCvLink">
                            <h1 class="col-xs-12">KEEP SCROLLING TO SEE MY ADVENTURE SO FAR...</h1>
                            <h4 class="col-xs-12">...OR FOR ALL YOU OLD SCHOOLERS, GET A PAPER COPY VIA THE BUTTON BELOW.</h4>
                            <div class="col-xs-12 paperBtn">
                                <a href="../mtapley%20cv.pdf">
                                    <img src="../images/cv.png">
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
    </div>
</body>
</html>
