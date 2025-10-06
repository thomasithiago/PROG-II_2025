<?php

class Sessao {
    private string $nome;
    
    public function __construct(string $nome) {
        $this->nome = $nome;
        echo "Sessão '{$this->nome}' criada.\n";
    }

    public function getNome(): string {
        return $this->nome;
    }
    
    public function fecharSessao(): void {
        echo "Sessão '{$this->nome}' sendo fechada e recursos desalocados.\n";
    }
}

class BibliotecaDigital {
    private string $nome;
    private array $sessoes = [];

    public function __construct(string $nome) {
        $this->nome = $nome;
        echo "--------------------------------------------------------\n";
        echo "Biblioteca Digital '{$this->nome}' iniciada.\n";
        $this->inicializarSessoesFixas();
    }

    private function inicializarSessoesFixas(): void {
        echo "Inicializando Sessões:\n";
        $this->sessoes[] = new Sessao("Literatura Clássica");
        $this->sessoes[] = new Sessao("Ciência e Tecnologia");
        $this->sessoes[] = new Sessao("História Mundial");
        echo "--------------------------------------------------------\n";
    }

    public function listarSessoes(): void {
        echo "\n--- Lista de Sessões Disponíveis na {$this->nome} ---\n";
        foreach ($this->sessoes as $sessao) {
            echo "- " . $sessao->getNome() . "\n";
        }
        echo "--------------------------------------------------------\n";
    }
    
    public function __destruct() {
        echo "\n--- Destruindo Biblioteca '{$this->nome}' ---\n";
        
        foreach ($this->sessoes as $sessao) {
            $sessao->fecharSessao();
        }
        
        $this->sessoes = []; 
        
        echo "Biblioteca '{$this->nome}' e todas as sessões internas foram encerradas.\n";
        echo "--------------------------------------------------------\n";
    }
}

$minhaBiblioteca = new BibliotecaDigital("Acervo POO");

$minhaBiblioteca->listarSessoes();

echo "Simulação do uso da biblioteca no meio do script...\n";

unset($minhaBiblioteca);

echo "Fim do script PHP. Se o destrutor não tivesse sido chamado acima (unset), ele seria chamado AGORA.\n";