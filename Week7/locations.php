<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 07/11/2016
 * Time: 14:22
 */

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);


$query = "SELECT * FROM markers WHERE 1";
$result = $db->query($query);
if (!$result)   {
    die('nothing in result: ');

}

header("content-type: text/xml");


while ($row = $result->fetch_array()){

    $node = $dom-> createElement("marker");
    $newnode = $parnode->appendChild($node);
    $newnode->setAttribute("name",$row['name']);
    $newnode->setAttribute("address", $row['address']);
    $newnode->setAttribute("lat", $row['lat']);
    $newnode->setAttribute("lng", $row['lng']);
    $newnode->setAttribute("type", $row['type']);


    $result->close();
    $db->close();


    echo $dom->saveXML();

    ?>
