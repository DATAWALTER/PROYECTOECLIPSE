<?php
$n = 5;
function factorial($n) {
    $f = 1;
    $i = 1;
    while($i <= $n) {
        $f *= $i;
        $i++;
    }
    return $f;
}

echo "Factorial de " . $n . " es: " . factorial($n) . "<br/>";

echo "FIN";

?>
