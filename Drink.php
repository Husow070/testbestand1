<?php

class Drink extends winkelWagen
{
    private $nameDrink;
    private $cataGory;
    private $age;
    private $price;

    public function __construct(string $nameDrink, string $cataGory, int $age , int $price)
    {
        $this->nameDrink= $nameDrink;
        $this->cataGory=$cataGory;
        $this->age=$age;
        $this->price=$price;
    }

    /**
     * @return mixed
     */
    public function getNameDrink()
    {
        return $this->nameDrink;
    }

    /**
     * @return mixed
     */
    public function getCataGory()
    {
        return $this->cataGory;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }
}