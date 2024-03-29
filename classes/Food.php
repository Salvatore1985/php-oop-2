<?php
include_once __DIR__ . '/Products.php';


class Food extends Products
{
    public $ingredients;

    public function __construct($name, $price, $description, $ingredients)
    {
        parent::__construct($name, $price, $description);
        $this->ingredients = $this->getIngredients($ingredients);
    }

    public function getIngredients($ingredient)
    {
        if ($ingredient  === '') {
            return 'Nessuna informazione disponibile per questo prodotto';
        }
        return 'Lista ingredienti: ' . $ingredient;
    }
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
    }
}
