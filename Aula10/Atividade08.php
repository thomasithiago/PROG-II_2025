<?php


class Ponteiro {
    protected int $valorAtual;
    protected int $limite;

    public function __construct(int $limite) {
        $this->limite = $limite;
        $this->valorAtual = 0;
    }

    public function avanca(): bool {
        $this->valorAtual++;
        if ($this->valorAtual >= $this->limite) {
            $this->valorAtual = 0;
            return true;
        }
        return false;
    }

    public function setValor(int $valor): void {
        $this->valorAtual = $valor % $this->limite;
    }

    public function getValorFormatado(): string {
        return str_pad((string)$this->valorAtual, 2, '0', STR_PAD_LEFT);
    }

    public function getValor(): int {
        return $this->valorAtual;
    }
}

class PonteiroSegundo extends Ponteiro {
    public function __construct() {
        parent::__construct(60);
    }
}

class PonteiroMinuto extends Ponteiro {
    public function __construct() {
        parent::__construct(60);
    }
}

class PonteiroHora extends Ponteiro {
    public function __construct() {
        parent::__construct(24);
    }
}

class Relogio {
    private PonteiroHora $ponteiroHora;
    private PonteiroMinuto $ponteiroMinuto;
    private PonteiroSegundo $ponteiroSegundo;

    public function __construct(int $h = 0, int $m = 0, int $s = 0) {
        $this->ponteiroHora = new PonteiroHora();
        $this->ponteiroMinuto = new PonteiroMinuto();
        $this->ponteiroSegundo = new PonteiroSegundo();

        $this->ponteiroHora->setValor($h);
        $this->ponteiroMinuto->setValor($m);
        $this->ponteiroSegundo->setValor($s);
    }

    public function avancaTempo(): void {
        if ($this->ponteiroSegundo->avanca()) {
            if ($this->ponteiroMinuto->avanca()) {
                $this->ponteiroHora->avanca();
            }
        }
    }

    public function getHorario(): string {
        return sprintf(
            "%s:%s:%s",
            $this->ponteiroHora->getValorFormatado(),
            $this->ponteiroMinuto->getValorFormatado(),
            $this->ponteiroSegundo->getValorFormatado()
        );
    }
}



class Departamento {
    private string $nome;

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function getNome(): string {
        return $this->nome;
    }
}

class Universidade {
    private string $nome;
    private array $departamentos = [];

    public function __construct(string $nome) {
        $this->nome = $nome;
        $this->inicializarDepartamentosFixos();
    }

    private function inicializarDepartamentosFixos(): void {
        $this->departamentos[] = new Departamento("Ciências Exatas e da Terra");
        $this->departamentos[] = new Departamento("Ciências Humanas e Sociais");
        $this->departamentos[] = new Departamento("Ciências da Saúde");
    }

    public function listarDepartamentos(): void {
        echo "\n=== Departamentos da {$this->nome} ===\n";
        
        if (empty($this->departamentos)) {
            echo "A universidade não possui departamentos cadastrados.\n";
            return;
        }
        
        foreach ($this->departamentos as $index => $departamento) {
            echo ($index + 1) . ". " . $departamento->getNome() . "\n";
        }
    }
    
    public function getDepartamentos(): array {
        return $this->departamentos;
    }
}



echo "-------------------------\n";
echo "    SIMULAÇÃO DE RELÓGIO\n";
echo "-------------------------\n";

$meuRelogio = new Relogio(23, 5