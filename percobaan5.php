<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $menu = array("gudeg", "soto", "bubur ayam", "bakso");
    echo "<h1>DAFTAR MAKANAN</h1>";
    echo "<ol>";
    foreach ($menu as $m) {
        echo "<li>$m";
    }
    echo "</ol>";
    ?>
    
</body>

</html>