<?php


$username = $_POST["name"];
$password = $_POST["password"];

if ($username =="Alexander" && $password=="ladd")
{
    setcookie('access_level_cookie', 'standarduser');

}

header('Location: loggedin.php');

?>