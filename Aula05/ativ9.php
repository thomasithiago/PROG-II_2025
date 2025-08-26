<?php

class ContaBancaria {
    private float $saldo = 0;

  
    public function depositar(float $valor): void {
        if ($valor <= 0) {
            echo "Valor inválido para depósito.<br>";
            return;
        }
        $this->saldo += $valor;
        echo "Depósito de R$ {$valor} realizado com sucesso.<br>";
    }

   
    public function sacar(float $valor): void {
        if ($valor <= 0) {
            echo "Valor inválido para saque.<br>";
            return;
        }

        if (!$this->saldoSuficiente($valor)) {
            echo "Saque não permitido. Saldo insuficiente.<br>";
            return;
        }

        $this->saldo -= $valor;
        echo "Saque de R$ {$valor} realizado com sucesso.<br>";
    }

  
    private function saldoSuficiente(float $valor): bool {
        return $valor <= $this->saldo;
    }

    
    public function getSaldo(): float {
        return $this->saldo;
    }
}


$conta = new ContaBancaria();

$conta->depositar(500);
$conta->sacar(200);
$conta->sacar(400); 

echo "Saldo final: R$ " . $conta->getSaldo();
?>
