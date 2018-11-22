<?php

/*
 * This function updates the fields in the table `about_me` defined after the SET function of the query
 *
 * @param string $updatedBio is the new string pulled from the admin.php 'bio' textarea
 * @param string $updatedInterests is the new string pulled from the admin.php 'interests' textarea
 * @param string $updatedQualifications is the new string pulled from the admin.php 'qualifications' textarea
 * @param object $db is the database being updated by the function
 *
 */
function updateAboutMe(
    string $validatedStory_p1,
    string $validatedStory_p2,
    string $validatedStory_p3,
    string $validatedStory_p4,
    string $validatedStory_p5,
    PDO $db
) : array {
    $updateAboutMe = $db->prepare("UPDATE `about_me` SET `story_p1` = ?, `story_p2` = ?,
                                                    `story_p3` = ?, `story_p4` = ?. `story_p5` = ? WHERE id='1'");
    $updateAboutMe->execute([$validatedStory_p1, $validatedStory_p2, $validatedStory_p3, $validatedStory_p4, $validatedStory_p5]);
}

/**
 * This function retrieves the data from the selected fields in the about_me table of the portfolio database
 *
 * @param pdo $db represents the database the data is pulled from
 *
 * @return array $about_me_result returns the first row of the executed query
 */
function getDbAboutMe(PDO $db) : array {
    $aboutMeQuery = $db->prepare("SELECT `aboutMe`, `preCodingHistory`, `story_p3`, `story_p4`, `story_p5`
                                            FROM `about_me`;");
    $aboutMeQuery->execute();
    $aboutMeResult = $aboutMeQuery->fetch();
    return $aboutMeResult;
}

/**
 * This function selects the 'story_p1' field from the about_me table retrieved in the getAboutMe function
 *
 * @param array $result represents an assoc. array containing the string assigned the key: story_p1
 *
 * @return string $result returns the string assigned the key: 'story_p1'
 * @return string returns the string 'error' if the array represented in the variable passed into
 * the function does not containing a string assigned the key: 'story_p1'
 */
function selectAboutMeFromResults(array $result) : string {
    if (array_key_exists('aboutMe', $result)) {
        return $result['aboutMe'];
    } else {
        return 'error';
    }
}

/**
 * This function selects the 'story_p2' field from the about_me table retrieved in the getAboutMe function
 *
 * @param array $result represents an assoc. array containing the string assigned the key: 'story_p2'
 *
 * @return string $result returns the string assigned the key: 'story_p2'
 * @return string returns the string 'error' if the array represented in the variable passed into
 * the function does not containing a string assigned the key: 'story_p2'
 */
function selectPreCodingHistoryFromResults(array $result) : string {
    if (array_key_exists('preCodingHistory', $result)) {
        return $result['preCodingHistory'];
    } else {
        return 'error';
    }
}

/**
 * This function selects the 'story_p3' field from the about_me table retrieved in the getAboutMe function
 *
 * @param array $result represents an assoc. array containing the string assigned the key: 'story_p3'
 *
 * @return string $result returns the string assigned the key: 'story_p3'
 * @return string returns the string 'error' if the array represented in the variable passed into
 * the function does not containing a string assigned the key: 'story_p3'
 */
function selectStory_p3FromResults(array $result) : string {
    if (array_key_exists('story_p3', $result)) {
        return $result['story_p3'];
    } else {
        return 'error';
    }
}

/**
 * This function selects the 'story_p4' field from the about_me table retrieved in the getAboutMe function
 *
 * @param array $result represents an assoc. array containing the string assigned the key: 'story_p4'
 *
 * @return string $result returns the string assigned the key: 'story_p4'
 * @return string returns the string 'error' if the array represented in the variable passed into
 * the function does not containing a string assigned the key: 'story_p4'
 */
function selectStory_p4FromResults(array $result) : string {
    if (array_key_exists('story_p4', $result)) {
        return $result['story_p4'];
    } else {
        return 'error';
    }
}

/**
 * This function selects the 'story_p5' field from the about_me table retrieved in the getAboutMe function
 *
 * @param array $result represents an assoc. array containing the string assigned the key: 'story_p5'
 *
 * @return string $result returns the string assigned the key: 'story_p5'
 * @return string returns the string 'error' if the array represented in the variable passed into
 * the function does not containing a string assigned the key: 'story_p5'
 */
function selectStory_p5FromResults(array $result) : string {
    if (array_key_exists('story_p5', $result)) {
        return $result['story_p5'];
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
function getDbProject(PDO $db) : array {
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
