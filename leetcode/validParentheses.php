<?php
class Solution
{
    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s)
    {
        $stack = [];
        $bracketMap = [
            ')' => '(',
            '}' => '{',
            ']' => '['
        ];

        for ($i = 0; $i < strlen($s); $i++) {
            $char = $s[$i];
            if (in_array($char, ['(', '{', '['])) {
                // If it's an opening bracket, push it onto the stack
                array_push($stack, $char);
            } else {
                // If it's a closing bracket, check if the last item in the stack matches
                if (empty($stack) || array_pop($stack) != $bracketMap[$char]) {
                    return false;
                }
            }
        }

        // If the stack is not empty, then there are unmatched opening brackets
        return empty($stack);
    }
}

$solution = new Solution();
$str = "(){}[]";
$result = $solution->isValid($str);

echo $result ? "true" : "false";
?>