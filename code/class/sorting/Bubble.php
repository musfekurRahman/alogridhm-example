<?php

namespace Algorithm\sorting;

class Bubble
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
            $swap = false;
            for ($j = 0; $j < $count - $i - 1; $j++) {
                if ($this->input[$j] > $this->input[$j + 1]) {
                    $this->swap($j, $j + 1);
                    $swap = true;
                }
            }
            if ($swap == false) {
                break;
            }
        }
    }

    private function swap($prev, $next)
    {
        $temp = $this->input[$prev];
        $this->input[$prev] = $this->input[$next];
        $this->input[$next] = $temp;
    }

    public function show(): array
    {
        return $this->input;
    }
}