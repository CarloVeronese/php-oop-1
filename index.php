<?php

require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Series.php';

$about_time = new Movie('About Time', 'English', '5', '88.5', '123');
$parasite = new Movie('Parasite', 'Korean', '4.2', '262.7', '132');
$another_round = new Movie('Another Round', 'Danish', '3.2', '21.7', '116');
$everything = new Movie('Everything Everywhere All at Once', 'English / Chinese', '4.8', '141.2', '139');
$borat = new Movie('Borat! Cultural Learnings of America for Make Benefit Glorious Nation of Kazakhstan', 'English / Kazak', '4.8', '262.6', '84');

$the_office = new Series('The Office', 'English', '5', '9');
$community = new Series('Community', 'English', '4.8', '6');
$scrubs = new Series('Scrubs', 'English', '4.9', '8');
$after_life = new Series('After Life', 'English', '4.7', '3');
$superstore = new Series('Superstore', 'English', '3.8', '6');


$productions = [
    $about_time,
    $parasite,
    $another_round,
    $everything,
    $borat,
    $the_office,
    $community,
    $scrubs,
    $after_life,
    $superstore
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
                <!-- <th scope="col">Profit</th> -->
                <!-- <th scope="col">Duration</th> -->
            </thead>
            <tbody>
                <?php
                    foreach($productions as $production) {
                        ?>
                        <tr>
                            <td><?= $production->getTitle()?></td>
                            <td><?= $production->getLanguage()?></td>
                            <td><?= $production->getRating()?></td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
    </div>    
</body>
</html>
