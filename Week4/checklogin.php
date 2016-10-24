<?php


$username = $_POST["name"];
$password = $_POST["password"];

if ($username =="Alexander" && $password=="ladd")
{
    echo $username;
    echo $password;
    setcookie('access_level_cookie', 'standarduser');


}

header('Location: loggedin.php');

?>