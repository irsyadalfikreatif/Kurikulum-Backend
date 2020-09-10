<?php

// $nilai = [5, 9, 6, 7, 9, 8 , 10, 7, 8];

// Input dinamis
echo "Jumlah Nilai Yang Dimasukkan : ";
$jumlah = trim(fgets(STDIN));

for ($m=1; $m <= $jumlah; $m++) { 
    echo "Nilai ke-".$m." : ";
    $nilai[] = trim(fgets(STDIN));
}

rsort($nilai);

echo "\n";

for ($m=0; $m < 3; $m++) { 
    $maximum[] = $nilai[$m];
}
echo "Highest : ";
print_r($maximum);

sort($nilai);

for ($m=0; $m < 3; $m++) { 
    $minimum[] = $nilai[$m];
}
echo "Lowest : ";
print_r($minimum);