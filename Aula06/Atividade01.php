<?php

class ContaBancaria {
    private float $saldo = 0;

    
    public function depositar(float $valor): void {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "Depósito de R$ {$valor} realizado com sucesso.<br>";
        } else {
            echo "Valor inválido para depósito.<br>";
        }
    }

    
    public function sacar(float $valor): void {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "Saque de R$ {$valor} realizado com sucesso.<br>";
        } else {
            echo "Saque não permitido. Saldo insuficiente ou valor inválido.<br>";
        }
    }

    
    public function getSaldo(): float {
        return $this->saldo;
    }
}


$conta = new ContaBancaria();

$conta->depositar(500);
$conta->sacar(200);
$conta->sacar(400); // vai dar erro pq não tem saldo suficiente

echo "Saldo final: R$ " . $conta->getSaldo();
?>
