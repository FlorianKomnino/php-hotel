<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js">

    <link rel="stylesheet" href="./styles/style.css">
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

    <form action="./index.php" method="GET">
        <label for="hotelName">Inserisci il nome dell'hotel che vuoi visualizzare</label>
        <select name="parking" id="">
            <option value="" selected>Tutti</option>
            <option value="1">Hotels con parcheggio</option>
            <option value="0">Hotels senza parcheggio</option>
        </select>
        <button type="submit">Filter</button>
    </form>


    <?php
    $parkingCallDone = false;
    $parkingOptionChoise = false;


    if (isset($_GET['parking']) && $_GET['parking'] != '') {
        $parkingCallDone = true;
        $parkingOptionChoise = $_GET['parking'];
    }
    ?>



    <div class="customContainer">

        <?php
        foreach ($hotels as $hotel) {
            if (!$parkingCallDone || ($parkingCallDone && ($parkingOptionChoise == $hotel['parking']))) {


                $hotelParkingPresence = $hotel["parking"] ? "Comprende parcheggio" : "privo di parcheggio";

                echo '<div>';
                echo '<h1>';
                echo $hotel["name"];
                echo '</h1>';
                echo "<p> Description:{$hotel["description"]}, {$hotelParkingPresence} vote: {$hotel["vote"]} </p>";
                echo "<p> distance from center: {$hotel["distance_to_center"]} km </p>";
                echo '</div>';
            }
        }

        ?>
    </div>
</body>

</html>