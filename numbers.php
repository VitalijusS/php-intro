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
        $num = 42;
        echo ($num + 33) . "\n";
        echo ($num - 33) . "\n";
        echo ($num * 33) . "\n";
        echo ($num / 33) . "\n";

        ?>
    </pre>
    <pre>
        <?php echo '5' + '6 ';
        echo '<br />';
        echo round(3.14, 1);
        echo '<br />';
        var_dump('var dump');
        echo '<br />';
        var_dump('123');
        echo '<br />';
        var_dump($num);
        echo '<br />';
        var_dump(42.42);
        ?>
    </pre>
</body>

</html>