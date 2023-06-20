<?php

class Food extends Product
{
    public string $taste;
    public int $weight;

    public function __construct($categoria, $nome, $descrizione, $img, $disponibilità, $prezzo, $gusto, $peso)
    {
        $this->category = $categoria;
        $this->name = $nome;
        $this->description = $descrizione;
        $this->image = $img;
        $this->availability = $disponibilità;
        $this->price = $prezzo;
        $this->taste = $gusto;
        $this->weight = $peso;
    }

    public function data()
    {
        return $this->category . ' - ' .  $this->name . ' - ' . $this->description . ' - ' . $this->image . ' - ' . $this->availability . ' - ' . $this->price . ' - ' . $this->taste . ' - ' . $this->weight;
    }
}
