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
        foreach ($this->input as $i){
            $temp=$i;
        }
    }

    public function show(): array
    {
        return $this->input;
    }
}