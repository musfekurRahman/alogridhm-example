<?php

namespace Algorithm\problems;

class SqrtX implements ClassInterface
{
    private  $input ;

    public function set($array): bool
    {
        $this->input = $array;
        return true;
    }

    public function process()
    {
        $x = $this->input;
        if ($x <= 1) return $x;
        for ($i = 1; $i <= $x; $i++) {
            $squire = $i * $i;
            if ($squire == $x) return $i;
            else if ($squire > $x) return $i - 1;
        }
    }

    public function get()
    {
        return $this->input;
    }
}