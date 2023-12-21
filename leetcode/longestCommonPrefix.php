<?php
class Solution 
{
    /**
     * @param String[] $str
     * @return String
     */
    function longestCommonPrefix($strs) {
        if (empty($strs)) {
            return "";
        }

        $prefix = $strs[0];
        for ($i = 0; $i < strlen($prefix); $i++) {
            foreach ($strs as $str) {
                if ($i == strlen($str) || $str[$i] != $prefix[$i]) {
                    return substr($prefix, 0, $i);
                }
            }
        }

        return $prefix;
    }
}

$solution = new Solution();
// $strs = ["Porsche", "Porch", "PorPor"];
$strs = [];
$result = $solution->longestCommonPrefix($strs);
echo $result
?>