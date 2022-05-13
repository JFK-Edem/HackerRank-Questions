<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {
    sort($arr);
    $arrLength = count($arr);
    $minValue = min($arr);
    $maxValue = max($arr);
    $minSum = 0;
    $maxSum = 0;
    
    for($i = 0; $i < $arrLength; $i++) {
        if($arr[$i] > $minValue) {
                $maxSum += $arr[$i];        
        } 
        if($arr[$i] < $maxValue) {
                $minSum += $arr[$i];
        }
        if ($minValue == $maxValue) {
                $minSum = $arr[$i]*4 ;
                $maxSum = $minSum;
        }
    }
     echo $minSum. " " .$maxSum;

}

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);
