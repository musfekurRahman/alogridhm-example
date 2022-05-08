<?php

namespace Algorithm\problems;

class LongestCommonPrefix implements ClassInterface
{
    private  $input ;

    public function set($array): bool
    {
        $this->input = $array;
        return true;
    }

    public function process()
    {
        $strs = $this->input;
        $length = count($strs);
        if($length == 0){ return '';}
        if($length == 1){ return $strs[0];}
        $prefix = $strs[0];
        $result = '';
        for( $i=1; $i< $length; $i++){
            $result = '';
            for($j=1; $j<= strlen($prefix); $j++){
                if(substr($prefix,0,$j) != substr($strs[$i],0,$j)){
                    break;
                }
                $result = substr($strs[$i],0,$j);
            }
            $prefix = $result;

        }
        return $result;

    }

    public function get()
    {
        return $this->input;
    }
}