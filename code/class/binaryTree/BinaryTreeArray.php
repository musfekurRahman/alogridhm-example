<?php

namespace Algorithm\binaryTree;

class BinaryTreeArray implements ClassInterface
{
    private  $input ;

    public function set($array): bool
    {
        $this->input = $array;
        return true;
    }

    public function process()
    {
        $strs = $this->input;
        return $strs;

    }

    public function get()
    {
        return $this->input;
    }
}