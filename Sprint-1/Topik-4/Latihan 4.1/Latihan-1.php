<?php

// $nilai = [5, 9, 6, 7, 9, 8 , 10, 7, 8];
// echo "Nilai : ";

// foreach ($nilai as $key => $value) {
//     echo $value . " ";
// }


// Input dinamis

echo "Jumlah Nilai Yang Dimasukkan : ";
$jumlah = trim(fgets(STDIN));

for ($a=1; $a <= $jumlah; $a++) { 
    echo "Nilai ke-".$a." : ";
    $nilai[] = trim(fgets(STDIN));
}

echo "\n";

$count = count($nilai);
echo "Mean : ";
print_r(array_sum($nilai)/$count);

echo "\n";

sort($nilai);
// print_r($nilai);

$m = $count/2;

if (is_double($m)) {
    $m = floor($m);
    $median = $nilai[$m];
} else {
    $m = floor($m);
    $mm = round($m);
    $median = ($nilai[$m] + $nilai[$mm] / 2);
}

echo "Median : ";
print_r($median);

echo "\n";

$val = array_count_values($nilai);
arsort($val);
foreach ($val as $k => $v) {
    if ($v == max($v)) {
        echo "Modus : " . $k . " Frekuensi : " . $val;
    }
}

echo "\n";