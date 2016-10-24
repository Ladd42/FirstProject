<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 24/10/2016
 * Time: 14:10
 */
session_start();


displayAccessLevelInformation($accessLevel);

$accessLevel = $_COOKIE['access_level_cookie'];

function displayAccessLevelInformation($accessLevel)
{
    if ($_COOKIE['access_level_cookie'] == "StandardUser")
    {
        echo "<p style = \"background-color: lightgreen\">You are currently logged in as a Standard User</p>";

    }
    elseif ($accessLevel == "root") {
        echo "<p<p style = \"background-color: green\">You are currently logged in as a root user</p>";
        echo "<p<p style = \"background-color: green\">You have Admin rights</p>";

    }

}
    ?>