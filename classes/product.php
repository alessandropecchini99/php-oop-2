<?php

// SECONDA CLASSE IN GERARCHIA
class Product extends Category
{
    // ISTANZE
    public string $name;
    public string $description;
    public string $image;
    public string $availability;
    protected int $price;

    // COSTRUTTORE
    public function __construct($categoria, $nome, $descrizione, $img, $disponibilità, $prezzo)
    {
        parent::__construct($categoria);
        $this->name = $nome;
        $this->description = $descrizione;
        $this->image = $img;
        $this->availability = $disponibilità;
        $this->price = $prezzo;
    }


    // FUNZIONI PER COMUNICARE ALL'ESTERNO I DATI PRIVATI
    public function getPrice()
    {
        return $this->price;
    }
}
