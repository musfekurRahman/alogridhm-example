<?php

namespace Algorithm\sorting;

class Insertion implements ClassInterface
{
    private array $input = [];

    public function set($array): bool
    {
        $this->input = $array;
        return true;
    }

    public function sort()
    {
        $count = count($this->input);
        for ($i = 1; $i < $count; $i++) {
            $temp = $this->input[$i];
            for ($j = $i; $j >= 0 && $temp < $this->input[$j - 1]; $j--) {
                $this->input[$j] = $this->input[$j - 1];
            }
            $this->input[$j] = $temp;
        }
    }

    public function get(): array
    {
        return $this->input;
    }
}