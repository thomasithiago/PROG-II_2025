<?php

class Comodo {
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }
}

class Casa {
    private $comodos = [];

    public function __construct() {
        $this->comodos[] = new Comodo("Sala");
        $this->comodos[] = new Comodo("Cozinha");
        $this->comodos[] = new Comodo("Quarto");
        $this->comodos[] = new Comodo("Banheiro");
    }

    public function listarComodos() {
        echo "🏠 Cômodos da casa:<br>";
        foreach ($this->comodos as $comodo) {
            echo "- " . $comodo->getNome() . "<br>";
        }
    }
}

$casa = new Casa();
$casa->listarComodos();
