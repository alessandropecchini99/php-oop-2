<?php

// PRIMA CATEGORIA -> GENITORE
class Category
{
    // ISTANZE
    protected string $category;

    // COSTRUTTORE
    public function __construct($categoria)
    {
        $this->category = $categoria;
    }


    // FUNZIONI PER COMUNICARE ALL'ESTERNO I DATI PRIVATI
    public function getCategory()
    {
        return $this->category;
    }
}
