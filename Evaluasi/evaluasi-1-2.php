<?php
 $angka = 5956560159466056;
 function variabelangka($angka){
    $array_angka = explode('0',(string)$angka);
    foreach($array_angka as $key => $value){
      $numb[] = str_split($array_angka[$key],1);
    }
    foreach($numb as $key => $value){
      sort($numb[$key]);
    }
    $result = "";
    for($i=0; $i<count($numb); $i++){
      for($k=0; $k<count($numb); $k++){
        $result .= $numb[$i][$k];
      }
    }
    return $result;
 }

 echo variabelangka($angka)."\n";