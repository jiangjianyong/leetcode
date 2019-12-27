<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function productExceptSelf($nums) {
        $len = count($nums);
        $output = $output2 = array_fill(0, $len, 1);
 
        for ($i = 1; $i < $len; $i++) {
            $output[$i] = $nums[$i - 1] * $output[$i - 1];
        }

        for ($j = $len - 2; $j >= 0; $j--) {
            $output2[$j] = $nums[$j + 1] * $output2[$j + 1];
        }

        $res = [];
        for ($i = 0; $i < $len; $i ++) {
            $res[$i] = $output[$i] * $output2[$i];
        } 

        return $res;
    }
}