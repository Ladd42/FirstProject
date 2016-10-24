<?php


$username = $_POST["name"];
$password = $_POST["password"];

if ($username =="name" && $password=="Password")
{
    setcookie('access_level_cookie', 'sUser');
}

header('Location: loggedIn.php');

?>