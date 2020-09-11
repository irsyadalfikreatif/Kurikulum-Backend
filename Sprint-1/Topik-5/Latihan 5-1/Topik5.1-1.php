<?php

echo '+++++++++++++++++++++++++++++'."\n";
echo '||****CalcRectangleArea****||'."\n";
echo '+++++++++++++++++++++++++++++'."\n";
echo "\n";
echo "\n";
echo 'Rectangle Calculator'."\n";

function arearec($length, $width) {
    return $length*$width;
}

function aroundrec($p, $l) {
    return ($p+$l)*2;
}

echo 'Panjang : ';
$panjang = (int) trim(fgets(STDIN))."\n";
echo 'Lebar : ';
$lebar = (int) trim(fgets(STDIN))."\n";
echo 'Luas = '.arearec($panjang, $lebar)."\n";  
echo 'Keliling = '.aroundrec($panjang, $lebar)."\n";


