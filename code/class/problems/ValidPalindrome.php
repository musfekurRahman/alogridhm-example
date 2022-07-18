<?php

namespace Algorithm\problems;

class ValidPalindrome implements ClassInterface
{
    private $input;

    public function set($array): bool
    {
        $this->input = $array;
        return true;
    }

    public function process()
    {
        $s = $this->input;
        $s =strtolower(preg_replace("/[^A-Za-z0-9]/","",$s));
        $sLength= strlen($s)-1;
        for($i=0;$i<=ceil($sLength/2); $i++){
            if($s[$i]!=$s[$sLength-$i]){
                return false;
            }
        }
        return true;
    }

    public function get()
    {
        return $this->input;
    }
}