<?php

namespace Algorithm\problems;

class SingleNumber implements ClassInterface
{
    private  $input ;

    public function set($array): bool
    {
        $this->input = $array;
        return true;
    }

    public function process()
    {
        $nums = $this->input;
        sort($nums);
        for ($i=0; $i<count($nums); $i++){
            if(isset($nums[$i+1])){
                if($nums[$i+1]!=$nums[$i]){
                    return $nums[$i];
                }
                $i++;
            }else{
                return $nums[$i];
            }
        }
    }

    public function get()
    {
        return $this->input;
    }
}