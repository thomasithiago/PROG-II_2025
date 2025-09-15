<?php


class Animal {
    public function falar() {
        echo "Som genérico de animal<br>";
    }
}


class Cachorro extends Animal {
    public function falar() {
        echo "Au au!<br>";
    }
}


class Gato extends Animal {
    public function falar() {
        echo "Miau!<br>";
    }
}


$animal = new Animal();
$animal->falar();

$cachorro = new Cachorro();
$cachorro->falar();

$gato = new Gato();
$gato->falar();

?>
