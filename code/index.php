<?php
use Algorithm\problems\base;

require_once dirname(__FILE__) . '/vendor/autoload.php';

$class = new base('ValidParentheses');
echo "<pre>";
print_r($class->process("}}"));
print_r($class->process("(){}[]"));
print_r($class->process("[{()}]"));
print_r($class->process("(]"));
print_r($class->process("({)}"));
print_r($class->process("{[]}"));

echo "</pre>";