<?php


$username = $_POST["Name"];
$password = $_POST["Password"];

if ($username =="Alexander" && $password=="ladd")
{
    echo $username;
    echo $password;
    setcookie('access_level_cookie', 'standarduser');


}

header('Location: loggedin.php');

?>