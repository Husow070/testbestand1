<?php

class Food
{
    private $name;
    private $catagory;
    private $price;

    public function __construct(string $name, string $catagory, float $price)
    {
        $this->name = $name;
        $this->catagory = $catagory;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getCatagory()
    {
        return $this->catagory;
    }
}