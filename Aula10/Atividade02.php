<?php

class Motor {
    public function __destruct() {
        echo "💥 O motor foi destruído!<br>";
    }
}

class Carro {
    private $motor;

    public function __construct() {
        $this->motor = new Motor();
        echo "🚗 Carro criado com um motor novo!<br>";
    }

    public function __destruct() {
        echo "💣 O carro foi destruído!<br>";
    }
}

$carro = new Carro();
unset($carro);
