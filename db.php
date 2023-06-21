<?php

$products = [
    'food' => [
        [
            'category' => 'Dog',
            'name' => 'Dog Food',
            'description' => 'Premium Dog Food',
            'image' => 'assets/food-1.jpg',
            'availability' => 'In stock',
            'price' => 20,
            'taste' => 'Chicken',
            'weight' => 10,
        ],
        [
            'category' => 'Cat',
            'name' => 'Cat Food',
            'description' => 'Premium Cat Food',
            'image' => 'assets/food-2.jpg',
            'availability' => 'Out of stock',
            'price' => 30,
            'taste' => 'Tuna',
            'weight' => 15,
        ],
    ],
    'toy' => [
        [
            'category' => 'Dog',
            'name' => 'Dog Toy',
            'description' => 'Premium Dog Toy',
            'image' => 'assets/toy-1.jpg',
            'availability' => 'Out of stock',
            'price' => 40,
            'material' => 'Rubber',
            'dimension' => 'Large',
        ],
        [
            'category' => 'Cat',
            'name' => 'Cat Toy',
            'description' => 'Premium Cat Toy',
            'image' => 'assets/toy-2.jpg',
            'availability' => 'In stock',
            'price' => 50,
            'material' => 'Plastic',
            'dimension' => 'Small',
        ],
    ],
];

$arrFoods = [];
foreach ($products['food'] as $food) {
    $arrFoods[] = new Food(
        $food['category'],
        $food['name'],
        $food['description'],
        $food['image'],
        $food['availability'],
        $food['price'],
        $food['taste'],
        $food['weight'],
    );
};

$arrToys = [];
foreach ($products['toy'] as $toy) {
    $arrToys[] = new Toy(
        $toy['category'],
        $toy['name'],
        $toy['description'],
        $toy['image'],
        $toy['availability'],
        $toy['price'],
        $toy['material'],
        $toy['dimension'],
    );
}
