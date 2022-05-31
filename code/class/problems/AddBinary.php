<?php

namespace Algorithm\problems;

class AddBinary implements ClassInterface
{
    private  $input ;

    public function set($array): bool
    {
        $this->input = $array;
        return true;
    }

    public function process()
    {
        $a = $this->input[0];
        $b = $this->input[1];
        $count_a = strlen($a) - 1;
        $count_b = strlen($b) - 1;
        $carry = 0;
        $sum = [];
        $n = max($count_a, $count_b);
        for ($i = 0; $i <= $n; $i++) {
            $a1 = $count_a >= 0 ? $a[$count_a] : 0;
            $b1 = $count_b >= 0 ? $b[$count_b] : 0;
            $step=2;
            if (($a1 + $b1 + $carry) > 1) {
                if(($a1 + $b1 + $carry) ==3){
                    $sum[$i] =  1;
                }else{
                    $sum[$i] =  0;
                }
                $carry = 1;
                $step = 1;
            } else {

                $sum[$i] = $a1 + $b1+$carry;

                $carry = 0;
            }

            $count_a--;
            $count_b--;
        }

        $sum = array_reverse($sum);

        if ($carry > 0) {
            array_unshift($sum, 1);
        }

        return implode($sum);

    }

    public function get()
    {
        return $this->input;
    }
}