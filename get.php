<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./simple.css">
</head>

<body>
    <pre>
        <?php
        if (!empty($_GET['book'])) {
            echo $_GET['book'];
        }
        ?>
    </pre>
    <a href="get.php?book=Harry Potter">Harry Potter</a>
    <a href="get.php?book=Beauty and the Beast">Beauty and the Beast</a>

    <a href="get.php?<?php echo http_build_query(['book' => 'Harry Potter']) ?>">Harry Potter</a>
    <a href="get.php?<?php echo http_build_query(['book' => 'Beauty & the Beast']) ?>">Beauty & the Beast</a>

</body>

</html>