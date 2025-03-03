<?php
function lengthOfLongestSubstring($s) {
    $map = []; 
    $maxLength = 0;
    $left = 0; 

    for ($right = 0; $right < strlen($s); $right++) {
        $char = $s[$right];

        if (isset($map[$char]) && $map[$char] >= $left) {
            $left = $map[$char] + 1;
        }

        $map[$char] = $right;

        $maxLength = max($maxLength, $right - $left + 1);
    }

    return $maxLength;
}

// Example test cases
echo "Length of longest substring: " . lengthOfLongestSubstring("abcabcbb") . "\n"; 
echo "Length of longest substring: " . lengthOfLongestSubstring("bbbbb") . "\n";  
echo "Length of longest substring: " . lengthOfLongestSubstring("pwwkew") . "\n";  
?>
