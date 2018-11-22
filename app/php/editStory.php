<?php

require_once 'functions.php';
require_once 'db.php';

$db = dbconn();

//set of if statements to sanitise about me inputs from admin.php
//if (isset($_POST['newStory_p1'])) {
//    $validatedStory_p1 = filter_var($_POST['newStory_p1'], FILTER_SANITIZE_STRING);
//}
//
//if (isset($_POST['newStory_p2'])) {
//    $validatedStory_p2 = filter_var($_POST['newStory_p2'], FILTER_SANITIZE_STRING);
//}
//
//if (isset($_POST['newStory_p3'])) {
//    $validatedStory_p3 = filter_var($_POST['newStory_p3'], FILTER_SANITIZE_STRING);
//}
//
//if (isset($_POST['newStory_p4'])) {
//    $validatedStory_p4 = filter_var($_POST['newStory_p4'], FILTER_SANITIZE_STRING);
//}
//
//if (isset($_POST['newStory_p5'])) {
//    $validatedStory_p5 = filter_var($_POST['newStory_p5'], FILTER_SANITIZE_STRING);
//}
//
//if (isset($validatedStory_p1, $validatedStory_p2, $validatedStory_p3, $validatedStory_p4, $validatedStory_p5, $db)) {
//    updateAboutMe($validatedStory_p1, $validatedStory_p2, $validatedStory_p3, $validatedStory_p4, $validatedStory_p5, $db);
//}


$aboutMeResult = getDbAboutMe($db);

$aboutMe = selectAboutMeFromResults($aboutMeResult);
$preCodingHistory = selectPreCodingHistoryFromResults($aboutMeResult);
