<?php
use Algorithm\problems\base;

require_once dirname(__FILE__) . '/vendor/autoload.php';


$class = new base('SingleNumber');
print_r($class->process([4,1,2,1,2]));
/*
$class = new base('LongestCommonPrefix');
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