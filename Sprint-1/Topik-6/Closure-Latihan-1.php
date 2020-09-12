<?php

echo '+++++++++++++++++++++++++++++++'."\n";
echo '||****Closure Application****||'."\n";
echo '+++++++++++++++++++++++++++++++'."\n";
echo "\n";
$arearec = function ($length, $width){
    echo 'How to find rectangle area, Please pay attention for this one !!'."\n";
    echo "\n";
    echo 'Length : '.$length."\n";
    echo 'Width : '.$width."\n";
    echo 'Rectangle Area : '.$length*$width."\n";

};

$arearec(9, 5);