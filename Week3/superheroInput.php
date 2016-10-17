<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Superheroinput</title>
</head>
<body>
<p>
    <?php
    //include the db
    include ("Superheros_DB.php");

    $forename = $_POST["forename"];
    $surname = $_POST["surname"];
    $gender = $_POST["gender"];
    $mainsuperheropower = $_POST["mainsuperpower"];

    $sql = "INSERT INTO superheroes (forename, surname, gender, mainsuperpower) VALUES ('$forename' , '$surname', '$gender', '$mainsuperheropower')"


    ?>
    <form action="formResponse.php" method="post">
        <label>Forename</Label><input type="text" name="forename">
        <label>Surname</Label><input type="text" name="surname">
        <label>Gender</Label><input type="text" name="gender">
        <label>MainPower</Label><input type="text" name="mainsuperheropower">
        <input type="submit" value="Submit">
        </form>

</p>
</body>
</html>