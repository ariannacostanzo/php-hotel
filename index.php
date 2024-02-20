<?php
include 'includes/data.php' 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
    <!-- bootstraap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
    <!-- stile -->
    <link rel="stylesheet" href="stile/style.css">
</head>
<body>
    <div class="container my-5">
        <h3 class="my-5">Hotels</h3>

    <table class="table table-hover ">
        <thead>
            <tr>
            <th class="head" scope="col">Name</th>
            <th class="head" scope="col">Description</th>
            <th class="head" scope="col">Parking</th>
            <th class="head" scope="col">Vote</th>
            <th class="head" scope="col">Distance to Center</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hotels as $hotel): ?>
                <tr>
                    <td><?= $hotel['name'] ?></td>
                    <td><?= $hotel['description'] ?></td>
                    <td><?= $hotel['parking'] ?></td>
                    <td><?= $hotel['vote'] ?></td>
                    <td><?= $hotel['distance_to_center'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>