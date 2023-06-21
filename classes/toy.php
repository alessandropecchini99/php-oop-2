<?php

class Toy extends Product
{
    private string $material;
    private string $dimension;

    public function __construct($categoria, $nome, $descrizione, $img, $disponibilità, $prezzo, $materiale, $dimensione)
    {
        parent::__construct($categoria, $nome, $descrizione, $img, $disponibilità, $prezzo);
        $this->material = $materiale;
        $this->dimension = $dimensione;
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function getDimension()
    {
        return $this->dimension;
    }
}
