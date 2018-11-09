<?php

/**
 * This function creates the connection from the database 'portfolio' and sets the default fetch mode to
 * associative array
 *
 * @return object returns the database
 */
function dbConn() {
    $db = new PDO('mysql:host=127.0.0.1;dbname=portfolio', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

function dbConn2() {
    $db = new PDO('mysql:host=127.0.0.1;dbname=credentials', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}