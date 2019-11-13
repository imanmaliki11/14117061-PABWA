<?php
function faktorial($nilai){
    $hitung = 1;
    for($i=1; $i <= $nilai; $i++){
        $hitung = $hitung * $i;
    }
    return $hitung;
}
$n = 4;
echo "nilai dari ".$n."! adalah : ";
echo faktorial($n);
?>