<?php

namespace Algorithm\sorting;

class Selection implements ClassInterface
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
        for ($i = 0; $i < $count; $i++) {
            $min = $i;
            for ($j = $i; $j < $count; $j++) {
                if ($this->input[$min] > $this->input[$j]) {
                    $min = $j;
                }
            }
            if ($min != $i) {
                $this->swap($min, $i);
            }

        }
    }

    private function swap($prev, $next)
    {
        $temp = $this->input[$prev];
        $this->input[$prev] = $this->input[$next];
        $this->input[$next] = $temp;
    }

    public function get(): array
    {
        return $this->input;
    }
}