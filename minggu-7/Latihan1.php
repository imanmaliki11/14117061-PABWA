<?php
$pertama = 12;
$kedua = 14;
function tukaaaaar(int &$satu, int &$dua){
    $temp = 0;
    $temp = $satu;
    $satu = $dua;
    $dua = $temp;
}
echo $pertama." ".$kedua;
echo "<br> lalu ditukar <br>";
tukaaaaar($pertama, $kedua);
echo $pertama." ".$kedua;
?>