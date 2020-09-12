<?php
// echo 'nomer 1'."\n";
// for ($j=1; $j<=9; $j++) {
//     for ($k=1; $k<=9; $k++) {
//         if ($k==1 || $k==3 || $k ==5 || $k ==7 ||$k==9){
//             echo " + ";
//         }else {
//             echo " - ";
//         }
//     }    
//         echo "\n";
// }


for ($j=1; $j<=9; $j++) {
    for ($k=1; $k<=9; $k++) {
        if ($j==1 || $j==3 || $j==5 || $j==7 ||$j==9){
            echo " - ";
        }else {
            echo " + ";
        }
    }    
        echo "\n";
}
