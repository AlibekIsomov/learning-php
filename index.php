<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>niiiiice person</title>
</head>
<body>
    <?php
    $books = [
        [
        'name' => 'Bad habits',
        'author' => 'IDK TBH',
        'releaseYear' => '2018',
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'How niggers work',
        'author' => 'xa',
        'releaseYear' => '1880',
        'purchaseUrl' => 'http://example.com'
    ],
        [
        'name' => 'Cracking interview questions',
        'author' => 'xa',
        'releaseYear' => '2012',
        'purchaseUrl' => 'http://example.com'
        ]
    ];
    // function filterByAuthor($books, $author){
    //     $filteredBooks = [];

    //     foreach($books as $book){
    //         if($book['author'] === $author)
    //         $filteredBooks[] = $book;
    //     }
    //     return $filteredBooks;
    // }

    $filteredBooks = array_filter($books, function ($book) {
        return $book['releaseYear'] >= 1850 && $book['releaseYear'] <= 2020;
    });

    // $filteredBooks =  filterByAuthor($books, 'xa');
    ?>
    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?>
                </a>
                <p>Release year: <?= $book['releaseYear'] ?>
            </li>
        <?php endforeach; ?>
    
</body>
</html>