<?php
// connect to csdm- webdev server and sel ect database
$db = new mysqli(
‘us-cdbr-azure-southcentral-f.cloudapp.net’,
‘b5051f6adfc120’,
‘c31439e7’,
‘webappalexander’
);
// test if connection was established, and print any errors
if($db->connect_errno){
    die(‘Connectfailed['.$db->connect _error.']');
}