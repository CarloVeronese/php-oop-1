<?php

require_once __DIR__ . '/Models/Production.php';

$about_time = new Production('About Time', 'eng', '5');
$parasite = new Production('Parasite', 'kor', '4.2');
$another_round = new Production('Another Round', 'dan', '3.2');
$everything = new Production('Everything, everywhere, all at once', 'eng / chi', '4.8');


$productions = [
    $about_time,
    $parasite,
    $another_round,
    $everything
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <th scope="col">Title</th>
                <th scope="col">Language</th>
                <th scope="col">Rating</th>
            </thead>
            <tbody>
                <?php
                    foreach($productions as $movie) {
                        ?>
                        <tr>
                            <td><?= $movie->getTitle()?></td>
                            <td><?= $movie->getLanguage()?></td>
                            <td><?= $movie->getRating()?></td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
    </div>    
</body>
</html>
