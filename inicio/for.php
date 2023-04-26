<?php


for ($i = 1; $i <= 15; $i++) {
    if($i == 13) {
        // return ou break; para
        continue; // pula
    }
    echo "#$i" . PHP_EOL;
}