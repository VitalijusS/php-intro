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
        $title = 'Title';
        if (isset($title)) {
            echo "<h1>{$title}</h1>";
        }
        ?>
    </pre>
    <pre>
        <?php
        $title = false;
        if (empty($title)) {
            echo "<h1>New title</h1>";
        } else {
            echo "<h1>{$title}</h1>";
        }
        ?>
    </pre>
    <pre>
        <?php
        var_dump(true && false);
        var_dump(true && true);
        var_dump(false && false);
        var_dump(false && true);
        ?>
    </pre>
    <pre>
        <?php
        var_dump(true || false);
        var_dump(true || true);
        var_dump(false || false);
        var_dump(false || true);
        ?>
    </pre>
    <pre>
        <?php
        var_dump(true xor false);
        var_dump(true xor true);
        var_dump(false xor false);
        var_dump(false xor true);
        ?>
    </pre>
    <pre>
        <?php
        $num = 5;
        if ($num > 3 && $num < 10) {
            echo '<h1>5</h1>';
        }
        ?>
    </pre>
    <pre>
        <?php
        $name = 'Jan';
        if ($name === "Jan") {
            echo "The name is Jan";
        }

        if ($name === "Jan") echo "The name is Jan";

        echo ($name === 'Jan' ? 'The name is Jan' : '')
        ?>
    </pre>
</body>

</html>