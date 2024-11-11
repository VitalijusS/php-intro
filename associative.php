<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./simple.css">
    <title>Document</title>
</head>

<body>
    <pre><?php
            $books = [
                'Harry Potter' => 'J.K. Rowlong',
                'Lord of the rings' => 'J.R.R. Tolkien',
                'Alice in Wonderland' => 'Lewis Carroll',
                0 => 'book 0',
                'Another book',
            ];
            var_dump($books);
            var_dump($books['Harry Potter']);
            var_dump(isset($books['Harry Potter']));
            $books['Romeo and Julia'] = 'William_Shakespeare';
            $books['Romeo and Julia'] = 'William Shakespeare';
            unset($books['Harry Potter']);
            var_dump($books);
            var_dump(count($books));

            foreach ($books as $book => $author) {
                var_dump($book);
                var_dump($author);
            }

            var_dump(array_keys($books));
            var_dump(array_values($books));

            var_dump($books['0']);

            ?></pre>
</body>

</html>