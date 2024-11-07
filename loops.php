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
        $names = ['Bill', 'Tom', 'Ben', 'Brad', 'Chad', 'Ted',];
        foreach ($names as $name) {
            var_dump($name);
        }
        ?>
    </pre>
    <ul>
        <?php foreach ($names as $name): ?>
            <li>
                <?php
                if ($name === 'Bill') {
                    continue;
                }
                if ($name === 'Chad') {
                    break;
                }
                echo $name;
                ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>