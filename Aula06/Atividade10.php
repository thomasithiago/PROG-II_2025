<?php
class CarrinhoDeCompras {
    private float $total = 0;

  
    public function adicionar(float $valor): void {
        if ($valor > 0) {
            $this->total += $valor;
        }
    }

   
    public function exibirTotal(): float {
        return $this->total;
    }
}


$carrinho = new CarrinhoDeCompras();

$carrinho->adicionar(50.75);
$carrinho->adicionar(100.25);
$carrinho->adicionar(25);

echo "Valor total do carrinho: R$ " . $carrinho->exibirTotal();
?>
