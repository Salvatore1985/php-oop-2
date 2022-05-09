<?php


class Products
{
    protected $food;
    protected $shampoo;
    protected $leash;
    protected $bed;
    protected $games;
    protected $hairComb;


    function __construct($food, $shampoo, $leash, $bed, $games, $hairComb)
    {
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
}
