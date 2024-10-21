<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./simple.css">
    <title>Document</title>
</head>

<body>
    <pre>
        <?php
        $hello = 'I\'m a string';
        echo $hello . '!' . ' ' . $hello . '!';
        ?>
    </pre>
    <pre>
        <?php
        $hello = "I'm a string";
        echo "{$hello}! {$hello}!";
        ?>
    </pre>
</body>

</html>