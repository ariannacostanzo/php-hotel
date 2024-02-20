<?php
include 'includes/data.php';

$parking = $_GET['parking'] ?? '';
var_dump($parking);

if ($parking === 'yes_parking') {

} elseif ($parking === 'no_parking') {

} else {

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
                <select class="form-select" name="parking" id="parking">
                    <option value="">Scegli in base al parcheggio</option>
                    <option value="yes_parking">Con parcheggio</option>
                    <option value="no_parking">Senza parcheggio</option>
                </select>
                <!-- <select class="form-select" name="vote" id="vote">
                    <option value="">Scegli in base alle stelle</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select> -->
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
            <?php if($parking === 'yes_parking'): ?>
                <?php foreach ($hotels as $hotel):?>
                    <?php if ($hotel['parking']): ?>
                        <tr>
                            <td><?= $hotel['name'] ?></td>
                            <td><?= $hotel['description'] ?></td>
                            <td>
                                <div class="check check-green">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                            </td>
                            <td><?= $hotel['vote'] ?></td>
                            <td><?= $hotel['distance_to_center'] ?></td>
                        </tr>
                    <?php endif ?>
                <?php endforeach ?>
                
            <?php elseif($parking === 'no_parking'): ?>
                <?php foreach ($hotels as $hotel):?>
                    <?php if (!$hotel['parking']): ?>
                        <tr>
                            <td><?= $hotel['name'] ?></td>
                            <td><?= $hotel['description'] ?></td>
                            <td>
                                <div class="check check-red">
                                    <i class="fa-solid fa-xmark"></i>
                                </div>
                            </td>
                            <td><?= $hotel['vote'] ?></td>
                            <td><?= $hotel['distance_to_center'] ?></td>
                        </tr>
                    <?php endif ?>
                <?php endforeach ?>
            <?php else: ?>
                <?php foreach ($hotels as $hotel): ?>
                    <tr>
                        <td><?= $hotel['name'] ?></td>
                        <td><?= $hotel['description'] ?></td>
                        <td>
                            <?php if($hotel['parking']): ?>
                                <div class="check check-green">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                            <?php else: ?>
                                <div class="check check-red">
                                    <i class="fa-solid fa-xmark"></i>
                                </div>
                            <?php endif ?>
                        </td>
                        <td><?= $hotel['vote'] ?></td>
                        <td><?= $hotel['distance_to_center'] ?></td>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
        </tbody>
    </table>
</body>
</html>