<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สรวิชญ์-610-11</title>
</head>
<body>
    <?php

    $i = 11;
    $num = $i - 1;
    while ($i <= 40) {
        echo "เลขที่ $i<br>";
        $i++;
    }
    
    if ($i > 1) {
        $j = 1;
        while ($j <= $num) {
            echo "เลขที่ $j<br>";
            $j++;
        }
    }

    ?>
</body>
</html>
