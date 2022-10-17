<?php

class Food extends winkelWagen
{
    private $nameFood;
    private $catagory;
    private $price;

    public function __construct(string $nameFood, int $catagory, string $price)
    {
        $this->name = $nameFood;
        $this->catagory = $catagory;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getNameFood()
    {
        return $this->nameFood;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getCatagory()
    {
        return $this->catagory;
    }
}