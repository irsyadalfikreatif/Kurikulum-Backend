<?php
function multiple($nilai){
    foreach($nilai as $key => $valeue);{
        $nilai[$key]*=3;
    }
    print_r($nilai);
}
$num = [2,3,4,5,6,7,8,9];
print_r($num);
multiple($num);
