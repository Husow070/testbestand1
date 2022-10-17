<?php

abstract class abstractWinkelwagen
{
    private $store;
    private $maxProduct;

//    function __construct(string $store, int $maxProduct)
//    {
//        $this->store;
//        $this->maxproduct;
//    }

    /**
     * @return mixed
     */
    public function getStoreName()
    {
        return $this->store;
    }

    /**
     * @return mixed
     */
    public function getMaxProduct()
    {
        return $this->maxProduct;
    }
}