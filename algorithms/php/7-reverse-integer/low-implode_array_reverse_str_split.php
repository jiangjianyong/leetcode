<?php
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        if (!$x) {
            return 0;
        }
        $max = pow(2, 31) - 1;
        $min = 0 - pow(2, 31);

        $len = 0;
        
        $y = implode(array_reverse(str_split(abs($x))));
        $y = ltrim($y, '0');
        if ($x < 0) {
            $y = 0 - $y;
        }

        return $y <= $max && $y >= $min ? $y : 0;
    }
}

