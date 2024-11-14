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
    <form action="post.php" method="POST">
        <input type="text" name="username" value="<?php if (!empty($_POST['username'])) echo $_POST['username'] ?>">
        <input type="password" name="password">
        <input type="submit" value="Login!">
    </form>
    <pre>
        <?php
        var_dump($_POST);
        var_dump($_GET);
        ?>
    </pre>
    </pre>
</body>

</html>