<?php

namespace Algorithm\problems;

class ValidParentheses implements ClassInterface
{
    private  $input ;

    public function set($array): bool
    {
        $this->input = $array;
        return true;
    }

    public function process()
    {
        $input = $this->input;
       $stack = [];
       $length = strlen($input);
       if($length == 1 )  return false;
       $validatorForward['('] =')';
       $validatorForward['{'] ='}';
       $validatorForward['['] =']';

        $validatorBackward[')'] ='(';
        $validatorBackward['}'] ='{';
        $validatorBackward[']'] ='[';
       for($i=0; $i<$length; $i++){
           if(isset($validatorForward[$input[$i]])){
               $stack[] =  $input[$i];
           }
           if(isset($validatorBackward[$input[$i]])){
              if(isset($stack[count($stack)-1]) && isset($validatorBackward[$input[$i]]) && $stack[count($stack)-1] == $validatorBackward[$input[$i]]){
                  unset($stack[count($stack)-1]);
                  $stack=array_values($stack);
              }else{
                  return false;
              }
           }

       }
        $this->input=$stack;
        return empty($stack);

    }

    public function get()
    {
        return $this->input;
    }
}