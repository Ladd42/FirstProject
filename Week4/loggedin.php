<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 24/10/2016
 * Time: 14:10
 */
session_start();
$accesslevel = $_COOKIE['access_level_cookie'];

displayAccessLevelInformation($accessLevel);

function displayAccessLevelInformation($accessLevel)
{

    if ($accessLevel == "standarduser") {
        echo "<p style = \"background-color: lightgreen\">You are currently logged in as a Standard User</p>";

    }
    elseif ($accessLevel == "root") {
     echo \"<p style = \\"background - color: red\\">You are currently logged in as a root User</p>";
     echo \"<p style = \\"background - color: red\\">You have access to additional admin features</p>";

    }

}
?>