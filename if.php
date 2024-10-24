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
        $status = 'down';
        if ($status === 'up') {
            echo 'server is up';
        } else if ($status = 'maintenance') {
            echo 'server undergoing maintenance';
        } else {
            echo 'server is down';
        }
        ?>
    </pre>
    <pre>
        <?php

        ?>
    </pre>
</body>

</html>