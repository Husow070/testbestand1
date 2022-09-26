<?php

class winkelWagen extends abstractWinkelwagen
{
    private $color;
    private $drinks;
    private $food;

    public function __construct(string $store, int $maxProduct, string $color)
    {
        parent::__construct($store, $maxProduct);
        $this->color = $color;
        $this->drinks = [];
        $this->food =[];
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param array $drinks
     */
    public function setDrinks(Drink $drinks): bool
    {
        $this->drinks = $drinks;
        return true;
    }

    /**
     * @param array $food
     */
    public function setFood(Food $food): bool
    {
        $this->food = $food;
        return true;
    }
    public  function printProduct(){
        echo $this->food;
    }

    public function getNumberOfProducts(){

    }
}