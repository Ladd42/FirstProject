<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alexander Test1</title>
</head>
<body>
<header>
    <h1> The Superhero System</h1>
    <h2>Homepage</h2>
</header>
<p>What would you like to do?</p>
<ul>
    <li> <a href="insertSuperheros.php" Insert a superhero</a></li>
    <li> <a href="displaySuperheros.php" Display all superheros</a></li>
    <li> <a href="battle.php"Insert a battle  </a></li>
    <li> <a href="displayBattles.php" Display all battles</a></li>
<ul>
<?
include ("db_connect.php");
$sql_query = "SELECT * FROM superheros";
$result = $db->query($sql_query);
while ($row = $result -> fetch_array())
{
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $id = $row['superheroID'];

    echo "<li> <a href='displayBattles.php&id={$id}'>Battles for {$firstname} {$lastname}</a></li>";

}
?>
</ul>
</ul>

</body>
</html>