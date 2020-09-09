<?php
    $nine = 9;
    for ($i=1; $i<$nine; $i++) {
        if ($i%2==0){
            continue;
        }
        echo $i."&nbsp";
    }