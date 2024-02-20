<?php
include 'includes/data.php' 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
</head>
<body>
    <h3>Hotels</h3>
    <?php foreach($hotels as $hotel): ?>
        <p><?= $hotel['name'] ?></p>
    <?php endforeach ?>
</body>
</html>