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
        echo "<p<p style = \"background-color: green\">You are currently logged in as a root user</p>";
        echo "<p<p style = \"background-color: green\">You have Admin rights</p>";

    }

}
    ?>