<?php
use Algorithm\problems\base;
//use Algorithm\binaryTree\base;

require_once dirname(__FILE__) . '/vendor/autoload.php';

$class = new base('ClimbingStairs');
print_r($class->process(2));

/*
$class = new base('MaxProfit');
print_r($class->process([7,1,5,3,6,4]));
*/
/*
$class = new base('RotateArray');
print_r($class->process([[1,2,3,4,5,6,7],3]));
*/
/*
$class = new base('MaxSubArray');
print_r($class->process([-2,1,-3,4,-1,2,1,-5,4]));
*/
/*
$class = new base('SingleNumber');
print_r($class->process([4,1,2,1,2]));
*/
/*
$class = new base('BinaryTreeArray');
print_r($class->process(["flower","flow","flight"]));
*/
/*
$class = new base('ValidParentheses');
echo "<pre>";
var_dump($class->process("}}"));
var_dump($class->process("(){}[]"));
var_dump($class->process("[{()}]"));
var_dump($class->process("(]"));
var_dump($class->process("({)}"));
var_dump($class->process("{[]}"));

echo "</pre>";
*/