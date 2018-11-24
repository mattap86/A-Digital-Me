<?php

/**
 * Posts validated input to the assigned fields of a table in a db.
 *
 * @param string $validatedAboutMe is the aboutMe input after sanitisation.
 * @param string $validatedPreCodingHistory is the preCodingHistory input after sanitisation.
 * @param PDO $db is the db connection.
 *
 * @return bool true if post successful.
 */
function updateAboutMe(string $validatedAboutMe, string $validatedPreCodingHistory, PDO $db) : bool {
    $updateAboutMe = $db->prepare("UPDATE `about_me` SET `aboutMe` = ?, `preCodingHistory` = ? WHERE id = '1';");
    return $updateAboutMe->execute([$validatedAboutMe, $validatedPreCodingHistory]);

}

/**
 * Retrieves the data from the selected fields in the about_me table of the portfolio database.
 *
 * @param pdo $db represents the database the data is pulled from.
 *
 * @return array $aboutMeResult returns the first row of the executed query.
 */
function getAboutMe(PDO $db) : array {
    $aboutMeQuery = $db->prepare("SELECT `aboutMe`, `preCodingHistory` FROM `about_me`;");
    $aboutMeQuery->execute();
    $aboutMeResult = $aboutMeQuery->fetch();
    return $aboutMeResult;
}

/**
 * This function selects the 'aboutMe' field from the about_me table retrieved in the getAboutMe function
 *
 * @param array $result represents an assoc. array containing the string assigned the key: aboutMe
 *
 * @return string $result returns the string assigned the key: 'aboutMe'
 * @return string returns the string 'error' if the array represented in the variable passed into
 * the function does not containing a string assigned the key: 'aboutMe'
 */
function selectAboutMeFromResults(array $result) : string {
    if (array_key_exists('aboutMe', $result)) {
        return $result['aboutMe'];
    } else {
        return 'error';
    }
}

/**
 * This function selects the 'preCodingHistory' field from the about_me table retrieved in the getAboutMe function
 *
 * @param array $result represents an assoc. array containing the string assigned the key: 'preCodingHistory'
 *
 * @return string $result returns the string assigned the key: 'preCodingHistory'
 * @return string returns the string 'error' if the array represented in the variable passed into
 * the function does not containing a string assigned the key: 'preCodingHistory'
 */
function selectPreCodingHistoryFromResults(array $result) : string {
    if (array_key_exists('preCodingHistory', $result)) {
        return $result['preCodingHistory'];
    } else {
        return 'error';
    }
}

/**
 * This function retrieves the data defined in the inset query from the 'projects' table of the 'portfolio' database
 *
 * @param PDO $db is the database the data is being pulled from
 *
 * @return array $projectResults is an associative array of the data fetched by $projectQuery
 */
function getProjects(PDO $db) : array {
    $projectQuery = $db->prepare("SELECT `name`, `image_url`, `url`, `summary` FROM `projects` WHERE `deleted` = 0;");
    $projectQuery->execute();
    $projectResults = $projectQuery->fetchAll();
    return $projectResults;
}

/**
 * This function uploads all data from the 'projects' table of the 'portfolio' database to index.php in the
 * projects section of the page
 *
 * @param array $projectResults represents all 'projects' held in the 'project' table of the 'portfolio' database
 *
 * @return string error returns an error
 * @return string $result represents an individual project that is displayed dynamically through the foreach command
 */
function displayProjects(array $projectResults) : string {
    $result = '';
    foreach ($projectResults as $projectResult) {
        if (
            array_key_exists('name', $projectResult) &&
            array_key_exists('url', $projectResult) &&
            array_key_exists('image_url', $projectResult) &&
            array_key_exists('summary', $projectResult)
        ) {
            $result .= '<div class="item active">
                <a href=' . $projectResult['url'] . '>
                    <img src=' . $projectResult['image_url'] . ' width="460" height="440">
                </a>
                <div class="carousel-caption">
                    <h3>' . $projectResult['name'] . '</h3>
                    <p class="projectCaption">' . $projectResult['summary'] . '</p>
                </div>
            </div>';
        } else {
            return 'error';
        }
    }
    return $result;
}

/**
 * Retrieves the first row of user credentials from the db.
 *
 * @param PDO $db is the db connection.
 * @param string $userName is the input user of the login page.
 *
 * @return array contains the data retrieved by the query.
 */
function getCredentials(PDO $db, string $userName) : array {
    $userQuery = $db->prepare("SELECT `username`, `password` FROM `users` WHERE `username` = :username;");
    $userQuery->bindParam(':username', $userName);
    $userQuery->execute();
    return $userQuery->fetch();
}

/**
 * Sanitises a string by filtering out any hidden/invalid characters.
 *
 * @param string $string is any string requiring sanitisation.
 *
 * @return string $sanitised is the string after sanitisation.
 */
function sanitise(string $string) : string {
    $sanitised = filter_var($string, FILTER_SANITIZE_STRING);
    return $sanitised;
}

/**
 * Sets loggedIn to 1 in session if entered username and password match the expected data in the db.
 *
 * @param string $sanitisedUser is the entered username after sanitisation.
 * @param string $username is the expected username pulled from the db.
 * @param bool $verifiedPassword is the entered password, hashed, and checked against the db.
 *
 * @return bool
 */
function validateUser(string $sanitisedUser, string $username, bool $verifiedPassword) : bool {
    if ($sanitisedUser === $username && $verifiedPassword === true) {
        $_SESSION['loggedIn'] = 1;
        return true;
    } else {
        $_SESSION['loggedIn'] = 0;
        return false;
    }
}
