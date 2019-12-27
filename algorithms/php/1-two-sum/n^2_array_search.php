<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        foreach($nums as $i => $v) {
            unset($nums[$i]);
            if ($j = array_search($target - $v, $nums)) return [$i, $j];
        }
        
        return [];
    }
}