<?php

namespace Algorithm\sorting;

class Insertion
{
    private array $input = [];

    public function set($array): bool
    {
        $this->input = $array;
        return true;
    }

    public function sort()
    {

    }

    public function show(): array
    {
        return $this->input;
    }
}