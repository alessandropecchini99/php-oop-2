<?php

// TERZA CLASSE IN GERARCHIA
class Toy extends Product
{
    // ISTANZE
    private string $material;
    private string $dimension;

    // COSTRUTTORE
    public function __construct($categoria, $nome, $descrizione, $img, $disponibilità, $prezzo, $materiale, $dimensione)
    {
        parent::__construct($categoria, $nome, $descrizione, $img, $disponibilità, $prezzo);
        $this->material = $materiale;
        $this->dimension = $dimensione;
    }


    // FUNZIONI PER COMUNICARE ALL'ESTERNO I DATI PRIVATI
    public function getMaterial()
    {
        return $this->material;
    }

    public function getDimension()
    {
        return $this->dimension;
    }
}
