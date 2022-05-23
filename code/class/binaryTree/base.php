<?php

namespace Algorithm\binaryTree;

class base implements BaseInterface
{
    private string $_className;
    private object $class;
    public function __construct($className)
    {
        $this->_className = $className;
    }
    private function createInstance() //using factory design pattern
    {
        $class = __NAMESPACE__."\\".$this->_className;
        $this->class = new $class();
    }
    private function set($array)
    {
        $this->class->set($array);
    }
    public function process($array)
    {
        $this->createInstance();
        $this->set($array);
        return $this->class->process();

    }
    public function get()
    {
        return $this->class->get();
    }
}