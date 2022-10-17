<?php

abstract class abstractWinkelwagen
{
    protected $store;
    protected $maxProduct;

    /**
     * @return mixed
     */
    public function getStore()
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