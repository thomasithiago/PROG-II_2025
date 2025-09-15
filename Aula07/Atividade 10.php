<?php

abstract class Transporte {
    abstract public function calcularTarifa($distancia);
}

class Onibus extends Transporte {
    public function calcularTarifa($distancia) {
        return 4.50 + ($distancia * 0.20);
    }
}

class Metro extends Transporte {
    public function calcularTarifa($distancia) {
        return 5.00;
    }
}

class Taxi extends Transporte {
    public function calcularTarifa($distancia) {
        return 6.00 + ($distancia * 1.50);
    }
}

?>