<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .b1 {
            background-color: red;
        }

        .b2 {
            background-color: green;
        }

        .b3 {
            background-color: blue;
        }

        .b4 {
            background-color: yellow;
        }

        .b5 {
            background-color: magenta;
        }

        .b6 {
            background-color: gray;
        }
    </style>
</head>

<body class="b<?php echo rand(1, 6); ?>">
    <h1>Header</h1>
    <h2>
        <?php echo 'H2 PHP'; ?>
    </h2>
    <h3>A dice roll: <?php echo rand(1, 6); ?></h3>
    <?php echo '<h3>h3</h3>' ?>
</body>

</html>