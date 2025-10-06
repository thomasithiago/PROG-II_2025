<?php

class Tela {
    private string $resolucao;

    public function __construct(string $resolucao) {
        $this->resolucao = $resolucao;
        echo "   [+] Tela {$this->resolucao} montada.\n";
    }

    public function encerrar(): void {
        echo "   [-] Tela apagada e liberada.\n";
    }
}

class Bateria {
    private int $capacidade;

    public function __construct(int $capacidade) {
        $this->capacidade = $capacidade;
        echo "   [+] Bateria {$this->capacidade}mAh conectada.\n";
    }
    
    public function encerrar(): void {
        echo "   [-] Bateria desconectada e segura.\n";
    }
}

class Camera {
    private int $megapixels;

    public function __construct(int $megapixels) {
        $this->megapixels = $megapixels;
        echo "   [+] Câmera de {$this->megapixels}MP instalada.\n";
    }
    
    public function encerrar(): void {
        echo "   [-] Câmera desativada.\n";
    }
}

class Processador {
    private string $modelo;

    public function __construct(string $modelo) {
        $this->modelo = $modelo;
        echo "   [+] Processador {$this->modelo} inicializado.\n";
    }
    
    public function encerrar(): void {
        echo "   [-] Processador desligado.\n";
    }
}

class Smartphone {
    private string $modelo;
    private Tela $tela;
    private Bateria $bateria;
    private Camera $camera;
    private Processador $processador;

    public function __construct(string $modelo) {
        $this->modelo = $modelo;
        echo "\n>>> INICIANDO MONTAGEM: {$this->modelo} <<<\n";
        
        $this->tela = new Tela("2400x1080");
        $this->bateria = new Bateria(5000);
        $this->camera = new Camera(64);
        $this->processador = new Processador("SnapDragon X9");
        
        echo ">>> MONTAGEM CONCLUÍDA: {$this->modelo} PRONTO <<<\n";
    }

    public function status(): void {
        echo "\n--- Status Atual do {$this->modelo} ---\n";
        echo "O smartphone está em pleno funcionamento.\n";
        echo "----------------------------------------\n";
    }
    
    public function