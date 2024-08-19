<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d", $n);

$str=(string)$n;
$length = strlen($str);
$sum=0;
for ($i = 0; $i < $length; $i++) {
    $sum+= (int)$str[$i];
}
echo $sum*$sum;
?>