<?php


echo "Jumlah Nilai Yang Dimasukkan : ";
$jumlah =(int) trim(fgets(STDIN));

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
    $median = ($nilai[$m] + $nilai[$mm]) / 2;
}

echo "Median : ";
print_r($median);

echo "\n";

$val = array_count_values($nilai);
arsort($val);
foreach ($val as $k => $v) {
    if ($v == max($val)) {
        echo "Modus : " . $k . " Frekuensi : " . $v;
    }
}

echo "\n";