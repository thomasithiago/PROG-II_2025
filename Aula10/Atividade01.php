<?php

class Coracao {
    public function bater() {
        echo "💓 Coração batendo... tum-tum!<br>";
    }
}

class Pessoa {
    private $nome;
    private $coracao;

    public function __construct($nome) {
        $this->nome = $nome;
        $this->coracao = new Coracao(); 
    }

    public function viver() {
        echo "{$this->nome} está vivo(a)!<br>";
        $this->coracao->bater();
    }
}

$pessoa1 = new Pessoa("Thiago");
$pessoa1->viver();
