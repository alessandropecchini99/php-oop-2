<?php
// INCLUDO TUTTE LE CLASSI ED IL DATABASE
include __DIR__ . '/classes/category.php';
include __DIR__ . '/classes/product.php';
include __DIR__ . '/classes/food.php';
include __DIR__ . '/classes/toy.php';
include __DIR__ . '/db.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-2</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

    <div class="container">

        <!-- CARD DEL CIBO -->
        <div class="food">
            <?php foreach ($arrFoods as $food) { ?>
                <div class="food-card">
                    <h1> Categoria: <?= $food->getCategory() ?> </h1>
                    <h2> <?= $food->name ?> </h2>
                    <img src="<?= $food->image ?>" alt="food">
                    <h3> <?= $food->description ?> </h3>
                    <h4> Gusto: <?= $food->getTaste() ?> </h4>
                    <h4> Peso: <?= $food->getWeight() ?>KG </h4>
                    <p> <?= $food->availability ?> </p>
                    <h2> <?= $food->getPrice() ?>€ </h2>
                </div>
            <?php } ?>
        </div>

        <!-- CARD DEI GIOCHI -->
        <div class="toy">
            <?php foreach ($arrToys as $toy) { ?>
                <div class="toy-card">
                    <h1> Categoria: <?= $toy->getCategory() ?> </h1>
                    <h2> <?= $toy->name ?> </h2>
                    <img src="<?= $toy->image ?>" alt="toy">
                    <h3> <?= $toy->description ?> </h3>
                    <h4> Materiale: <?= $toy->getMaterial() ?> </h4>
                    <h4> Dimensione: <?= $toy->getDimension() ?> </h4>
                    <p> <?= $toy->availability ?> </p>
                    <h2> <?= $toy->getPrice() ?>€ </h2>
                </div>
            <?php } ?>
        </div>

    </div>

</body>

</html>