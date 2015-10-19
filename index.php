<!DOCTYPE html>
<html>
<head>
</head>
<body>

<p>
    <?php
    $myage = 21;

    if ($myage >= 16) {
        print "You can buy specs!";
    }
    elseif ($myage >=18) {
        print "You can buy specs & mugs!";
    }
    elseif ($myage >=21) {
        print "You can buy specs & mugs & Sausage Rolls!";
    }
    ?>
</p>
</body>
</html>