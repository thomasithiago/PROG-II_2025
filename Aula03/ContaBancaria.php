<?php

class ContaBancaria
{
    private string $titular;
    private float $saldo;

    public function __construct(string $titular, float $saldo)
    {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar(float $valor): string
    {
        if ($valor > 0) {
            $this->saldo += $valor;
            return "{$this->titular} depositou R$ " . number_format($valor, 2, ',', '.');
        }
        return "Depósito inválido.";
    }

    public function sacar(float $valor): string
    {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            return "{$this->titular} sacou R$ " . number_format($valor, 2, ',', '.');
        }
        return "Saque inválido ou saldo insuficiente.";
    }

    public function exibirSaldo(): string
    {
        return "Saldo atual: R$ " . number_format($this->saldo, 2, ',', '.');
    }
}

$c1 = new ContaBancaria("Thiago Thomasi", 3500.00);

$resultados = [];
$resultados[] = $c1->depositar(100);
$resultados[] = $c1->sacar(30);
$resultados[] = $c1->exibirSaldo();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Conta Bancária</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #fafafa;
        padding: 20px;
    }
    h1 {
        color: #444;
    }
    .mensagem {
        background: #e7f3ff;
        border: 1px solid #bcdffb;
        padding: 8px;
        margin: 5px 0;
        border-radius: 5px;
    }
</style>
</head>
<body>
    <h1>Movimentações</h1>
    <?php foreach($resultados as $msg): ?>
        <div class="mensagem"><?= $msg; ?></div>
    <?php endforeach; ?>
</body>
</html>
