<?php

namespace Algorithm\sorting;

class sort implements BaseInterface
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
        switch (strtolower($this->type)) {
            case 'bubble';
                $this->class = new Bubble();
                break;
            case 'insertion';
                $this->class = new Insertion();
                break;
            case 'selection';
                $this->class = new Selection();
                break;
            default:
                $this->class = new Bubble();
        }
    }

    public function sort($array)
    {
        $this->set($array);
        $this->sorting();
       return $this->get();
    }
    private function sorting()
    {
        $this->class->sort();
    }

    private function set($array)
    {
        $this->class->set($array);
    }

    private function get()
    {
        return $this->class->get();
    }
}