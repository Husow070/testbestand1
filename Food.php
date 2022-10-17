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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCatagory(): string
    {
        return $this->catagory;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

}