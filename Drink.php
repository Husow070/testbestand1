<?php

class Drink
{
private $name;
private $catagory;
private $age;
private $price;

public function __construct(string $name, string $catagory, int $age, int $price)
{
    $this->name=$name;
    $this->catagory = $catagory;
    $this->age = $age;
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
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }
}