<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $i = 0;
    echo "<ul>";
    while ($i < 100) {
        $i += 10;
        echo "<li> $i";
    }
    echo "</ul>";
    ?>

</body>

</html>