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

    private function createInstance()
    {
        if ($this->type == 'bubble') {
            $this->class = new Bubble();
        }

    }

    public function set($array)
    {
        $this->class->set($array);
    }

    public function show()
    {
        return $this->class->show();;
    }
}