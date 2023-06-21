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

    // ALTRE FUNZIONI
    public function printData()
    {
        return "<div class=\"card\">
            <h1> Categoria: {$this->getCategory()} </h1>
            <h2> {$this->getName()} </h2>
            <img src=\"{$this->getImage()}\" alt=\"food\">
            <h3> {$this->getDescription()} </h3>
            <h4> Materiale: {$this->getMaterial()} </h4>
            <h4> Dimensione: {$this->getDimension()} </h4>
            <p> {$this->getAvailability()} </p>
            <h2> {$this->getPrice()}€ </h2>
        </div>";
    }
}
