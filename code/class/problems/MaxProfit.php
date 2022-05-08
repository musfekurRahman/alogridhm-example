<?php

namespace Algorithm\problems;

class MaxProfit implements ClassInterface
{
    private  $input ;

    public function set($array): bool
    {
        $this->input = $array;
        return true;
    }

    public function process()
    {
        $prices = $this->input;
        $maxProfit =0;
        foreach ($prices as $key=>$price){
            $nextKey=$key+1;
            if(isset($prices[$nextKey]) && $price<$prices[$nextKey]){
                $maxProfit+= $prices[$nextKey]-$price;
            }
        }
        return $maxProfit;
    }

    public function get()
    {
        return $this->input;
    }
}