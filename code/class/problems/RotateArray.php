<?php

namespace Algorithm\problems;

class RotateArray implements ClassInterface
{
    private $input;
    private $input2;

    public function set($array): bool
    {
        $this->input = $array[0];
        $this->input2 = $array[1];
        return true;
    }

    public function process()
    {
        $nums = $this->input;
        $k = $this->input2;
        $total = count($nums);
        if ($total < $k) {
            $total = count($nums) - 1;
            for ($i = 0; $i < $k; $i++) {
                $first = true;
                foreach ($nums as $key => $num) {
                    if ($first) {
                        $nums[0] = $nums[$total];
                        $first = false;
                    }
                    if ($key < $total) {
                        $nextKey = $key + 1;
                        $nums[$nextKey] = $num;
                    }
                }
            }
            return $nums;
        }
        $first = true;
        foreach ($nums as $key => $num) {
            if ($first) {
                $j = 0;
                for ($i = $k; $i > 0; $i--) {
                    if ($total - $i >= 0) {
                        $nums[$j] = $nums[$total - $i];
                        $j++;
                    }
                }
                $first = false;
            }
            if ($total - $k >= 0 && $key < $total - $k) {
                $nums[$key + $k] = $num;
            }
        }


        return $nums;
    }

    public function get()
    {
        return $this->input;
    }
}