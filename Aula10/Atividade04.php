<?php

class PlacaMae {
    public function info() {
        echo "🔌 Placa-mãe inicializada.<br>";
    }
}

class Processador {
    public function info() {
        echo "⚙️ Processador funcionando.<br>";
    }
}

class MemoriaRAM {
    public function info() {
        echo "💾 Memória RAM carregada.<br>";
    }
}

class Computador {
    private $placaMae;
    private $processador;
    private $memoriaRAM;

    public function __construct() {
        $this->placaMae = new PlacaMae();
        $this->processador = new Processador();
        $this->memoriaRAM = new MemoriaRAM();
        echo "💻 Computador montado com sucesso!<br>";
    }

    public function iniciar() {
        $this->placaMae->info();
        $this->processador->info();
        $this->memoriaRAM->info();
        echo "🚀 Computador ligado e pronto para uso!<br>";
    }
}

$pc = new Computador();
$pc->iniciar();
