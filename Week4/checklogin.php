<?php


$username = $_POST["name"];
$password = $_POST["password"];

if ($username =="username" && $password=="password")
{
    setcookie('access_level_cookie', 'sUser');
}

header('Location: loggedIn.php');

?>