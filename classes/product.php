<?php

// SECONDA CLASSE IN GERARCHIA
class Product extends Category
{
    // ISTANZE
    protected string $name;
    protected string $description;
    protected string $image;
    protected string $availability;
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
    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getAvailability()
    {
        return $this->availability;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
