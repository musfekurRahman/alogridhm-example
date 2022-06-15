<?php

namespace Algorithm\problems;

class ClimbingStairs implements ClassInterface
{
    private $input;

    public function set($array): bool
    {
        $this->input = $array;
        return true;
    }

    public function process()
    {
        $n = $this->input;
        if ($n <= 1) return 1;
        $way[0] = 1;
        $way[1] = 2;
        for ($i = 2; $i < $n; $i++) {
            echo ($i - 1 ).":".$way[$i - 1]. ";".($i - 2).":".$way[$i - 2]." || ".($way[$i - 1] + $way[$i - 2])."<br/>";
            $way[] = $way[$i - 1] + $way[$i - 2];
        }
        echo "<pre>";
        print_r($way);
        exit;
        return $way;
    }

    public function get()
    {
        return $this->input;
    }
}