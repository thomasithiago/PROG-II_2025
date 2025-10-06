<?php

class Coracao {
    public function bater() {
        echo "💓 Coração batendo...<br>";
    }
}

class Pulmao {
    public function respirar() {
        echo "💨 Pulmão respirando...<br>";
    }
}

class Cerebro {
    public function pensar() {
        echo "🧠 Cérebro processando pensamentos...<br>";
    }
}

class CorpoHumano {
    private $coracao;
    private $pulmao;
    private $cerebro;

    public function __construct() {
        $this->coracao = new Coracao();
        $this->pulmao = new Pulmao();
        $this->cerebro = new Cerebro();
        echo "🧍 Corpo humano formado!<br>";
    }

    public function funcionar() {
        echo "🔁 Corpo humano em funcionamento:<br>";
        $this->coracao->bater();
        $this->pulmao->respirar();
        $this->cerebro->pensar();
        echo "✅ Todos os órgãos estão sincronizados!<br>";
    }
}

$corpo = new CorpoHumano();
$corpo->funcionar();
