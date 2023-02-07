<?php
    // array hotel
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

    // prendo le chiavi dell'array
    $hotels_keys = array_keys($hotels[0]);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <title>Hotels</title>
</head>
<body>
    <div class='container my-5 text-center'>
        <h1>Hotels Table</h1>
        <table class="table my-4">
          <thead>
            <tr>
                <!-- stampo l'array delle chiavi -->
                <?php for($i = 0; $i < count($hotels_keys); $i++) : ?>
                    <th scope="col"><?= $hotels_keys[$i] ?></th>
                <?php endfor; ?>
            </tr>
          </thead>
          <tbody>
            <!-- ciclo dentro l'array degli hotel -->
            <?php foreach($hotels as $hotel) : ?>
                <tr>
                <!-- ciclo i value di ogni singolo hotel -->
                    <?php foreach($hotel as $value) : ?>
                        <td><?= $value ?></td>
                    <?php endforeach ?>
                </tr>
            <?php endforeach ?>
          </tbody>
        </table>
    </div>
</body>
</html>