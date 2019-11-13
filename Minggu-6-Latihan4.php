<?php
echo "Bilangan prima antara 1 sampai dengan 37"; echo "<br>";
echo "--> ";
$a = 2;
while ($a <= 37 ) {
    $hitung = 0;
    for($i = 2; $i <= $a/2; ++$i){
        if($a % $i == 0){
            $hitung = 1;
            break;
        }
    }
    if ($hitung == 0){
        echo "$a ";
    }
    ++$a;
}
?>