<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?p
    $n = 30;
    $sum = 0;
    $prod = 1;

    for ($i = 1; $i <= $n; $i++) {
        echo $i . " ";
        $sum += $i;
        $prod *= $i;
    }

    echo"<br>\n";
    echo "\n1 + … + 30 = " . $sum . "<br>\n";
    echo "1 * … * " . $n . " = " . $prod . "\n";
    ?>
</body>
</html>