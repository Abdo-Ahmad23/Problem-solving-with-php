<?php 
class Solution {

    /**
     * @param Integer[][] $matrix
     * @param Integer $target
     * @return Boolean
     */
    function searchMatrix($matrix, $target) {
        $rows = count($matrix);
        $cols = count($matrix[0]);
    
    // Define the initial search space
    $left = 0;
    $right = $rows * $cols - 1;
    
    while ($left <= $right) {
        // Find the mid index
        $mid = intdiv($left + $right, 2);
        
        // Convert the mid index to 2D index
        $midValue = $matrix[intdiv($mid, $cols)][$mid % $cols];
    
        // Compare the midValue with the target
        if ($midValue == $target) {
            return true;
        } elseif ($midValue < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }
    
    return False;
    }
    }