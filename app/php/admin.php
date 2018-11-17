
<?php

session_start();

require 'editStory.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CMS Admin Page</title>
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
    <form class="adminForm" action="admin.php" method="post">
        <h1><u>UPDATE ABOUT ME</u></h1>
        <p>About Me:</p>
        <textarea name="newAboutMe" rows="2" cols="100" maxlength="600"><?php echo $aboutMe ?></textarea>
        <p><input type="submit" value="Update About Me" /></p>
        <p>Pre-coding History:</p>
        <textarea name="newHistory" rows="6" cols="100" maxlength="600"><?php echo $preCodingHistory ?></textarea>
        <p><input type="submit" value="Update History" /></p>
    </form>
    <form class="adminForm2" action="admin.php" method="post">
        <h1><u>CREATE PROJECT</u></h1>
        <div>
            <p><u>Project Name</u></p>
            <input type="text" name="newProjectName" placeholder="Enter Project Name..." />
            <p><u>Upload Project Image</u></p>
            <input type="text" name="newImageUrl" placeholder="Enter Image Url..." />
            <p><u>Upload Project</u></p>
            <input type="text" name="newProjectUrl" placeholder="Enter Project Url..." />
        </div>
        <div>
            <p><u>Project Summary</u></p>
            <textarea name="newProjectSummary" rows="10" cols="100" maxlength="600" placeholder="Max 600 characters..."></textarea>
            <p><input class="projectSubmit" type="submit" value="Upload Project" /></p>
        </div>
    </form>
<!--    <form action="hide.php" method="post">-->
<!--        <h1>HIDE PROJECT</h1>-->
<!--        <label>Project Name :</label>-->
<!--       <div>-->
<!--            <select name="projectId">-->
<!--                <option>PLEASE CHOOSE YOUR PROJECT:-</option>-->
<!--                <option value="1">pilotShop</option>-->
<!--                <option value="2">projectTwo</option>-->
<!--                <option value="3">projectThree</option>-->
<!--            </select>-->
<!--            <input type="submit" value="Hide Project" />-->
<!--        </div>-->
<!--    </form>-->
</body>
</html>