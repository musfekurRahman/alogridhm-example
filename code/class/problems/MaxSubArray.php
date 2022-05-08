<?php

namespace Algorithm\problems;

class MaxSubArray implements ClassInterface
{
    private  $input ;

    public function set($array): bool
    {
        $this->input = $array;
        return true;
    }

    public function process()
    {
        $nums = $this->input;
        $max =PHP_INT_MIN;
        $flag = 0;
        for($i=0; $i < count($nums); $i++){
            $flag = $flag + $nums[$i];
            if($max<$flag){
                $max = $flag;
            }
            if($flag <0){
                $flag=0;
            }
        }
        return $max;
    }

    public function get()
    {
        return $this->input;
    }
}