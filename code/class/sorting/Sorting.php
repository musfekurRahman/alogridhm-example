<?php

namespace Algorithm\sorting;

class Sorting implements SortingInterface
{
    private string $type;
    private object $class;

    public function __construct($type)
    {
        $this->type = $type;
        $this->createInstance();
    }

    private function createInstance() //using factory design pattern
    {
        switch ($this->type) {
            case 'bubble';
                $this->class = new Bubble();
                break;
            case 'insertion';
                $this->class = new Insertion();
                break;
            default:
                $this->class = new Bubble();
        }
    }

    private function sort()
    {
        $this->class->sort();
    }

    public function set($array)
    {
        $this->class->set($array);
        $this->sort();
    }

    public function show()
    {
        return $this->class->show();;
    }
}