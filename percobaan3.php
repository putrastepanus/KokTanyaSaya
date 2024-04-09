<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $jam = date("H");
    if ($jam < "10") {
        echo "Selamat Pagi Semuanya!";
    } else if ($jam < "15 ") {
        echo "Selamat Siang Semuanya!";
    } else if ($jam < "18") {
        echo "Selamat Sore Semuanya!";
    } else {
        echo "Selamat Malam Semuanya!";
    }
    ?>

</body>

</html>