<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>formResponse</title>
</head>
<body>
<p>
    <?php
    $forename = $_POST['forename'];
$surname = $_POST['surname'];
$gender = $_POST['gender'];
$mainsuperheropower = $_POST['mainsuperheropower'];
echo "thanks {$forename}  {$surname} you are a {$gender} and your main super power is {$mainsuperheropower}";

?>
</p>
</body>
</html>