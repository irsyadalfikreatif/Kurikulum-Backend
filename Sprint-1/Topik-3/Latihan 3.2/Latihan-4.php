<?php
for ($m = 1; $m <= 9; $m++) {
    for ($n=1; $n<=9; $n++) {
        if ($m == 5 || $m == 1 || $m == 9 || $n == 1 && $m < 5 || $n == 9 && $m > 5){
            echo "+";
        } else {
            echo "- ";
        }    
    }
    echo "\n";
}