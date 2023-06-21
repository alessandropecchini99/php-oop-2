<?php

class Product extends Category
{
    public string $name;
    public string $description;
    public string $image;
    public string $availability;
    protected int $price;

    public function __construct($categoria, $nome, $descrizione, $img, $disponibilità, $prezzo)
    {
        parent::__construct($categoria);
        $this->name = $nome;
        $this->description = $descrizione;
        $this->image = $img;
        $this->availability = $disponibilità;
        $this->price = $prezzo;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
