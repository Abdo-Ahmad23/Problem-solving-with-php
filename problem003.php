<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d", $N);
$array = [];

for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%d", $X);
    if(in_array($X,$array)==0){
        echo $X.PHP_EOL;
    }
    array_push($array, $X);
}


?>