<?php
for ($i = 1; $i <= 9; $i++) {
    for ($j=1; $j<=9; $j++) {
        if ($j+$i == 10 || $j+$i > 10 ){
                echo "&nbsp+"; 
        } else {
                echo "&nbsp-&nbsp";
        }    
    }
    echo "<br>";
}