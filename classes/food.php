<?php

class Food extends Product
{
    private string $taste;
    private int $weight;

    public function __construct($categoria, $nome, $descrizione, $img, $disponibilità, $prezzo, $gusto, $peso)
    {
        parent::__construct($categoria, $nome, $descrizione, $img, $disponibilità, $prezzo);
        $this->taste = $gusto;
        $this->weight = $peso;
    }

    public function getTaste()
    {
        return $this->taste;
    }

    public function getWeight()
    {
        return $this->weight;
    }
}
