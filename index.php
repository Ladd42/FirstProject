<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alexander Test1</title>
</head>
<body>
<p>
    <?php
    $myage = 21;
    if ($myage >= 16 && $myage < 18){     print "you can buy specs";
    }
    elseif ($myage >= 18 && $myage < 21){
        print "You can buy specs and mugs";
    }
    elseif ($myage >= 21){
        print "You can buy specs and mugs and sausage rolls";
    }
    ?>

</p>
</body>
</html>