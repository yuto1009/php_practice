<?php
class Solution 
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        $seen = [];
        foreach ($nums as $index => $num)
        {
            $complement = $target - $num;
            if (array_key_exists($complement, $seen))
            {
                return [$seen[$complement], $index];
            }
            $seen[$num] = $index;
        }
        return [];
    }
}

// $nums = [2, 7, 11, 15];
// $target = 9;
// $solution = new Solution();
// $result = $solution->twoSum($nums, $target);
// echo "result is " .implode(', ', $result);


$nums = [2, 5, 7, 9, 12, 14, 15, 17];
$target = 7;
echo $nums[$target];
?>

