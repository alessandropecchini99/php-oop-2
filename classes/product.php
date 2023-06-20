<?php

class Product
{
    public string $category;
    public string $name;
    public string $description;
    public string $image;
    public string $availability;
    protected int $price;

    public function __construct($categoria, $nome, $descrizione, $img, $disponibilità, $prezzo)
    {
        $this->category = $categoria;
        $this->name = $nome;
        $this->description = $descrizione;
        $this->image = $img;
        $this->availability = $disponibilità;
        $this->price = $prezzo;
    }

    public function data()
    {
        return $this->category . ' - ' . $this->name . ' - ' . $this->description . ' - ' . $this->image . ' - ' . $this->availability . ' - ' . $this->price;
    }
}
