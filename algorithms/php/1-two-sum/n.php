<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $tmp = [];
        foreach($nums as $i => $x) {
            $y = $target - $x;

            if (isset($tmp[$y])) {
                return [$tmp[$y], $i];
            }

            $tmp[$x] = $i;
        }
        
        return [];
    }
}