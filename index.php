<!DOCTYPE html>
<html>
<head>
</head>
<body>

<p>
    <?php
    $wantedgood = "";

    switch ($wantedgood) {
        case "Specs":
            echo "16";
            break;
        case "Mugs":
            echo "18";
            break;
        case "Sausage Rolls":
            echo "21";
            break;
        default:
            echo "Enter a good";
    }

    ?>
</p>
</body>
</html>