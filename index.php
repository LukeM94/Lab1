<!DOCTYPE html>
<html>
<head>
</head>
<body>

<p>
    <?php
    $myage = 20;

    if ($myage >=21) {
        print "You can buy specs & mugs & Sausage Rolls!";
    }
    elseif ($myage >=18) {
        print "You can buy specs & mugs!";
    }
    elseif ($myage >= 16) {
        print "You can buy specs!";
    }
    ?>
</p>
</body>
</html>