<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $tmp = [];
        $num = count($nums);
        for ($i = 0; $i < $num; $i++) {
            $val = $nums[$i];
            for ($j = $i + 1; $j < $num; $j++) {
                // $tmp[$nums[$i] + $nums[$j]] = [$i, $j];
                if (($nums[$i] + $nums[$j]) == $target) {
                    return [$i, $j];
                }
            }
        }
        
        // return $tmp[$target] ?? [];
        return [];
    }
}