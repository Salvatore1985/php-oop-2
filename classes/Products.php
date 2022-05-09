<?php
include_once __DIR__ . "/User.php";

class Products
{
    protected $price;
    protected $food;
    protected $shampoo;
    protected $leash;
    protected $bed;
    protected $games;
    protected $hairComb;


    function __construct($price, $food = null, $shampoo = null, $leash = null, $bed = null, $games = null, $hairComb = null)
    {
        $this->price = $price;
        $this->food = $food;
        $this->shampoo = $shampoo;
        $this->leash = $leash;
        $this->bed = $bed;
        $this->games = $games;
        $this->hairComb = $hairComb;
    }

    public function getFood()
    {
        return $this->food;
    }

    public function getShampoo()
    {
        return $this->shampoo;
    }

    public function getLeash()
    {
        return $this->leash;
    }

    public function getBed()
    {
        return $this->bed;
    }

    public function getGames()
    {
        return $this->hairComb;
    }

    public function getPrice()
    {
        if ($this->getIsRegistration() == true) {
            return $this->price * 0.8;
        }
        return $this->price;
    }
}
