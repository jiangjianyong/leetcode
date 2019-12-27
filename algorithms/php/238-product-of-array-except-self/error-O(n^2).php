<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     * O(n^2)
     */
    function productExceptSelf($nums) {
        $output = [];
        foreach ($nums as $i => $iv) {
            $newval = null;
            foreach ($nums as $j => $jv) {
                if($i == $j) {
                    continue;
                }

                $newval = is_null($newval) ? $jv : $newval * $jv;
            }
            $output[$i] = $newval;
        }
        return $output;
    }
}