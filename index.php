<?php
include __DIR__ . '/classes/product.php';
include __DIR__ . '/classes/food.php';


$product = new Product('gatto', 'nome', 'descrizione', 'img.jpg', 'disponibile', 12);
$food = new Food('cane', 'cibo', 'cibo-descrizione', 'cibo.jpg', 'non disponibile', 999, 'tonno', 3);

echo $product->data();
echo '<br>';
echo $food->data();

?>


<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-2</title>
</head>

<body>

</body>

</html> -->