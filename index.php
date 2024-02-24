<?php
include 'includes/data.php';

$parking = $_GET['parking'] ?? '';
$vote = $_GET['vote'] ?? '';

function filterHotelsByVote($array, $value) {
    $array = array_filter($array, function ($item) use ($value) {
        return $item['vote'] >= $value;
    });
}


if ($parking === 'yes_parking') {
    $hotels = array_filter($hotels, function ($hotel) {
        return $hotel['parking'] === true;
    });
} else if ($parking === 'no_parking') {
    $hotels = array_filter($hotels, function ($hotel) {
        return $hotel['parking'] === false;
    });
}   

if ($vote == 1) {
    $hotels = array_filter($hotels, function ($hotel) {
        return $hotel['vote'] >= 1;
    });
} else if ($vote == 2) {
    $hotels = array_filter($hotels, function ($hotel) {
        return $hotel['vote'] >= 2;
    });
}   else if ($vote == 3) {
    $hotels = array_filter($hotels, function ($hotel) {
        return $hotel['vote'] >= 3;
    });
}   else if ($vote == 4) {
    $hotels = array_filter($hotels, function ($hotel) {
        return $hotel['vote'] >= 4;
    });
}   else if ($vote == 5) {
    $hotels = array_filter($hotels, function ($hotel) {
        return $hotel['vote'] >= 5;
    });
}   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
    <!-- bootstraap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
    <!-- fontawesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css' integrity='sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==' crossorigin='anonymous'/>
    <!-- stile -->
    <link rel="stylesheet" href="stile/style.css">
</head>
<body>
    <div class="container my-5">
        <header class="d-flex align-items-center justify-content-between">
            <h3 class="my-5">Hotels</h3>
            <form action="index.php" method="GET" class="d-flex align-items-center gap-3">
            <label for="parking">Seleziona in base al parcheggio:</label>
            <select class="form-select" name="parking" id="parking">
                    <option value="all" <?= $parking === 'all' ? 'selected' : '' ?>>Tutti</option>
                    <option value="yes_parking" <?= $parking === 'yes_parking' ? 'selected' : '' ?>>Con parcheggio</option>
                    <option value="no_parking" <?= $parking === 'no_parking' ? 'selected' : '' ?>>Senza parcheggio</option>
                </select>
                <label for="parking">Seleziona in base al voto:</label>
                <select class="form-select" name="vote" id="vote">
                    <option value="1" <?= $vote == 1 ? 'selected' : '' ?>>1</option>
                    <option value="2" <?= $vote == 2 ? 'selected' : '' ?>>2</option>
                    <option value="3" <?= $vote == 3 ? 'selected' : '' ?>>3</option>
                    <option value="4" <?= $vote == 4 ? 'selected' : '' ?>>4</option>
                    <option value="5" <?= $vote == 5 ? 'selected' : '' ?>>5</option>
                </select>
                <button class="btn btn-success">Filtra</button>
            </form>
        </header>

    <table class="table table-hover ">
        <thead>
            <tr>
                <th class="head" scope="col">Nome</th>
                <th class="head" scope="col">Descrizione</th>
                <th class="head" scope="col">Parcheggio</th>
                <th class="head" scope="col">Stelle</th>
                <th class="head" scope="col">Distanza dal centro</th>
            </tr>
        </thead>
        <tbody>
            
                <?php foreach ($hotels as $hotel): ?>
                    <?php include __DIR__ . '/includes/template.php' ?>
                <?php endforeach ?>

        </tbody>
        <tbody>

</tbody>
    </table>
</body>
</html>