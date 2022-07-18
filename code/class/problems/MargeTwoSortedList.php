<?php

namespace Algorithm\problems;
class MargeTwoSortedList implements ClassInterface
{
    private $input;

    public function set($array): bool
    {
        $this->input = $array;
        return true;
    }

    public function process()
    {
        $list1 = $this->input[0];
        $list2 = $this->input[1];
        $first = new ListNode(1,2);
        $second = new ListNode(4,null);
        $second->next = $first->next;




        echo "<pre>";
print_r([$second,$list2]); exit;
        return $list1;
    }

    public function get()
    {
        return $this->input;
    }
}
class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}