<?php

echo '++++++++++++++++++++++++++++++'."\n";
echo '||***Function Application***||'."\n";
echo '++++++++++++++++++++++++++++++'."\n";
echo '1. Segitiga'. "\n". '2. Lingkaran'. "\n". '3. Trapesium'."\n";
echo "Mau Ngitung Apa, Bro?? ";
$pilihan = (int) trim(fgets(STDIN));

function segitiga($a, $t) {
    return ($a*$t)/2;
}

function kelilingsegitiga($s1,$s2,$s3) {
    return $s1+$s2+$s3;
}

function lingkaran($r, $pi = 3.14) {
    return $pi*$r; 
}

function kelilinglingkaran($r, $pi = 3.14) {
    return 2*$pi*$r;
}

function trapesium($alas, $atap, $tinggi) {
    return (($alas+$atap)*2)/2;
}

function kelilingtrapesium($ss1, $ss2, $ss3, $ss4) {
    return $ss1+$ss2+$ss3+$ss4;
}

if ($pilihan == '1' ) {
    echo "Alas : ";
    $alas = (int) trim(fgets(STDIN));
    echo "Tinggi : ";
    $tinggi = (int) trim(fgets(STDIN));
    echo "Sisi Miring 1 : ";
    $sm1 = (int) trim(fgets(STDIN));
    echo "Sisi Miring 2 : ";
    $sm2 = (int) trim(fgets(STDIN));
    echo "Luas = ".segitiga($alas, $tinggi)."\n";
    echo "Keliling = ".kelilingsegitiga($alas, $sm1, $sm2)."\n";

} elseif($pilihan == '2') {
    echo "Jari]-Jari : ";
    $r = (int) trim(fgets(STDIN));
    echo "]Nilai Pi : ";
    $pi = 3.14;
    echo "Luas = ".lingkaran($r, $pi)."\n";
    echo "Keliling = ".kelilinglingkaran($r, $pi)."\n";
} elseif($pilihan == '3') {
    echo "Alas : ";
    $a = (int) trim(fgets(STDIN));
    echo "Atap : ";
    $b = (int) trim(fgets(STDIN));
    echo "Tinggi : ";
    $t = (int) trim(fgets(STDIN));
    echo "Sisi Miring : ";
    $sm = (int) trim(fgets(STDIN));
    echo "Luas = ".trapesium($a, $b, $t )."\n";
    echo "Keliling = ".kelilingtrapesium($a, $b, $t, $sm)."\n";
} else {
    echo "Gak Ada Pilihan Lainnya, Bro"."\n";
    echo "Silahkan Ganti Pilihanmu!!"."\n";
}