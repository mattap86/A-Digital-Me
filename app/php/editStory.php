<?php

require_once 'functions.php';
require_once 'db.php';

$db = dbconn();

if (isset($_POST['newAboutMe'])) {
    $validatedAboutMe = filter_var($_POST['newAboutMe'], FILTER_SANITIZE_STRING);
}

if (isset($_POST['newHistory'])) {
    $validatedPreCodingHistory = filter_var($_POST['newHistory'], FILTER_SANITIZE_STRING);
}

if (isset($validatedAboutMe, $validatedPreCodingHistory, $db)) {
    updateAboutMe($validatedAboutMe, $validatedPreCodingHistory, $db);
}

$aboutMeResult = getAboutMe($db);

$aboutMe = selectAboutMeFromResults($aboutMeResult);

$preCodingHistory = selectPreCodingHistoryFromResults($aboutMeResult);
