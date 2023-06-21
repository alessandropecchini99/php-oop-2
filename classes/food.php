<?php

// TERZA CLASSE IN GERARCHIA
class Food extends Product
{
    // ISTANZE
    private string $taste;
    private int $weight;

    // COSTRUTTORE
    public function __construct($categoria, $nome, $descrizione, $img, $disponibilità, $prezzo, $gusto, $peso)
    {
        parent::__construct($categoria, $nome, $descrizione, $img, $disponibilità, $prezzo);
        $this->taste = $gusto;
        $this->weight = $peso;
    }

    // FUNZIONI PER COMUNICARE ALL'ESTERNO I DATI PRIVATI
    public function getTaste()
    {
        return $this->taste;
    }

    public function getWeight()
    {
        return $this->weight;
    }
}
