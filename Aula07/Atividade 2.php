<?php

class Calculadora {
    
    public function somar($a, $b, $c = 0) {
        return $a + $b + $c;
    }
}


$calc = new Calculadora();

echo "Somando 2 números: " . $calc->somar(5, 10) . "<br>";
echo "Somando 3 números: " . $calc->somar(5, 10, 20) . "<br>";

?>
