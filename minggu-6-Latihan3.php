<?php
$nama = array("lanirne","aduh","qifuat","toda","anevi","samid","kifuat");
sort($nama);
$length = count($nama);
for($i = 0; $i < $length; $i++) {
    echo $nama[$i];
    echo "<br>";
}
?>