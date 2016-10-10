<?php
//connection to csdm - webdev server and select DB
$db = new mysqli(
    'us-cdbr-azure-southcentral-f.cloudapp.net',
    'b5051f6adfc120',
    'c31439e7',
    'webappalexander'
);

if($db->connect_errno){
    die('Connection failed['.$db->connect_error.']');
}

$sql_query="SELECT * FROM marvelmovies WHERE yearReleased > 2010";

$result = $db->query($sql_query);

echo "<h1> All Movies after 2010</h1>";

while($row = $result->fetch_array()){
    echo"<table>";
    echo"<p>" . $row['title'] . "</p>";
}

$result->close();
$db->close();

?>