<?php
    include (__DIR__.'/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center my-5">MOVIES</h1>
    <div class="container">
        <div class="row">
            <?php require __DIR__.'/models/cards.php' ?>
        </div>
    </div>
</body>
</html>