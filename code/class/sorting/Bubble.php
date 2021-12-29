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
        $count =count($this->input);
        for ($i = 1; $i < $count; $i++) {
            for($j=$i; $j<$count; $j++){
                if ($this->input[$j] < $this->input[$j-1]) {
                    $this->swap($j-1,$j);
                }
            }

        }
    }
    private function swap($prev,$next){
        $temp = $this->input[$prev];
        $this->input[$prev] = $this->input[$next] ;
        $this->input[$next]= $temp;
    }

    public function show(): array
    {
        return $this->input;
    }
}