<?php
class Solution 
{
    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x)
    {
        $x_str = strval($x);
        return $x_str == strrev($x_str);
    }
}

// $solution = new Solution();
// $result = $solution->isPalindrome(100000001);
// echo $result ? "true" : "false";

?>