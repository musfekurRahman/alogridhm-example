<?php

namespace Algorithm\problems;

class PlusOne implements ClassInterface
{
    private  $input ;

    public function set($array): bool
    {
        $this->input = $array;
        return true;
    }

    public function process()
    {
        $digits = $this->input;
        $size = count($digits) - 1;
        $carry = 1;
        for ($i = $size; $i >= 0; $i--) {
            $digits[$i] += $carry;
            if ($digits[$i] < 9) return $digits;
            $carry = floor($digits[$i] / 10);
            $digits[$i] = $digits[$i] % 10;
        }

        if ($digits[0] == 0) {
            array_unshift($digits, 1);
        }
        return $digits;
    }

    public function get()
    {
        return $this->input;
    }
}