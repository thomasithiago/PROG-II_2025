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

// SIMULAÇÃO

$meuRelogio = new Relogio(23, 59, 50);

echo "Início: " . $meuRelogio->getHorario() . "\n";

for ($i = 1; $i <= 15; $i++) {
    $meuRelogio->avancaTempo();
    echo "Avanço " . str_pad((string)$i, 2, '0', STR_PAD_LEFT) . ": " . $meuRelogio->getHorario() . "\n";
}

$outroRelogio = new Relogio();

echo "\nInício: " . $outroRelogio->getHorario() . "\n";

for ($i = 0; $i < 61; $i++) {
    $outroRelogio->avancaTempo();
}
echo "Após 61 segundos: " . $outroRelogio->getHorario() . "\n";