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
        $arr = array('Prgoramming', 'Business', 'Art', 'History');
        var_dump($arr);
        echo $arr[0] . "\n";
        $arr2 = ['Prgoramming', 'Business', 'Art', 'History'];

        var_dump(isset($arr2[99]));
        var_dump(isset($arr2[0]));
        var_dump(in_array('History', $arr2));

        var_dump(count($arr2));

        ?>
    </pre>
</body>

</html>