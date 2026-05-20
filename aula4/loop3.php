<?php

$i = 0;

while ($i <= 10) {
    echo "Loop: $i \n";
    $j = 1;
    while ($j <= 5){
        echo "\tLoop interno: $j \n";
        $j++;
    } 
    $i++; 
}