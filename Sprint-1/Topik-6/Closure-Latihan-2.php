<?php
echo '+++++++++++++++++++++++++++++'."\n";
echo '||*****CalcClosureArea*****||'."\n";
echo '+++++++++++++++++++++++++++++'."\n";
echo "\n";

$triangle = function ($a, $t) {
    echo 'How to find triangle area, Please pay attention for this one !!'."\n";
    echo "\n";
    echo 'Base : '.$a."\n";
    echo 'Height : '.$t."\n";
    echo 'Triangle Area : '.($a*$t)*0.5."\n";
};
$triangle(9,5);
echo "\n";
$trianglear = function ($s1,$s2,$s3) {
    echo 'How to find triangle around, Please pay attention for this one !!'."\n";
    echo "\n";
    echo 'Base : '.$s1."\n";
    echo 'Height : '.$s2."\n";
    echo 'Hypothenusa : '.$s3."\n";
    echo 'Triangle Area: '.($s1+$s2+$s3)."\n";
};
$trianglear(10,8,6);
echo "\n";
$circle = function ($r, $pi = 3.14) {
    echo 'How to find circle area, Please pay attention for this one !!'."\n";
    echo "\n";
    echo 'Radius : '.$r."\n";
    echo 'Pi : '.$pi."\n";
    echo 'Circle Area : '.$pi*$r."\n"; 
};
$circle(7);
echo "\n";
$circlearnd = function ($rad, $vi = 3.14) {
    echo 'How to find circle around, Please pay attention for this one !!'."\n";
    echo "\n";
    echo 'Radius : '.$rad."\n";
    echo 'Pi : '.$vi."\n";
    echo 'Circle Around : '.(($rad*$vi)*2)."\n";
};
$circlearnd(14);
echo "\n";
$trapezium = function ($alas, $atap, $tinggi) {
    echo 'How to find trapezium area, Please pay attention for this one !!'."\n";
    echo "\n";
    echo 'A : '.$alas."\n";
    echo 'B : '.$atap."\n";
    echo 'Height : '.$tinggi."\n";
    echo 'Trapezium Area :'.((($alas+$atap)*$tinggi)/2)."\n";
};
$trapezium(9,6,10);
echo "\n";
$trapeziumarnd = function ($ss1, $ss2, $ss3, $ss4) {
    echo 'How to find trapezium area, Please pay attention for this one !!'."\n";
    echo "\n";
    echo 'A : '.$ss1."\n";
    echo 'B : '.$ss2."\n";
    echo 'C : '.$ss3."\n";
    echo 'D : '.$ss4."\n";
    echo 'Trapezium Around : '.($ss1+$ss2+$ss3+$ss4)."\n";
};
$trapeziumarnd(6,8,10,12);