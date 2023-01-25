<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-hotel</title>
</head>

<body>
    <?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    ?>

    <form action="index.php" method="GET">
        <label for="Inserisci il nome dell'hotel che vuoi visualizzare"></label>
        <input type="text" id="hotelName" name="hotelName">
        <button type="submit">Filter</button>
    </form>

    <?php
    echo '<h1>';
    echo $hotels[0]["name"];
    echo '</h1>';
    echo "<p> Description:{$hotels[0]["description"]}, parking: {$hotels[0]["parking"]}, vote: {$hotels[0]["vote"]} </p>";
    echo "<p> distance from center: {$hotels[0]["distance_to_center"]} km </p>";

    ?>
</body>

</html>