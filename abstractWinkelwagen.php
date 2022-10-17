<?php

abstract class abstractWinkelwagen
{
    protected $store;
    protected $maxProduct;


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