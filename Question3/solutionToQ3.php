<?php

/*
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function timeConversion($s) {
    $am = 'AM';
    $pm = 'PM';
    $pmTime = strtotime($s);
    $amTime = strtotime($s);
    if(strpos($s, $pm)) {
        return date('H:i:s', $pmTime);    
    }
    if(strpos($s, $am)) {
            return date('H:i:s', $amTime);
    }

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$s = rtrim(fgets(STDIN), "\r\n");

$result = timeConversion($s);

fwrite($fptr, $result . "\n");

fclose($fptr);
