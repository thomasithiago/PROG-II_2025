<?php

class Produto {
    public string $nome;
    private float $preco;

    
    public function setPreco(float $valor): void {
        $this->preco = $valor;
    }

    
    public function getPreco(): float {
        return $this->preco;
    }
}


$produto1 = new Produto();
$produto1->nome = "Camiseta";
$produto1->setPreco(49.90);

$produto2 = new Produto();
$produto2->nome = "Calça";
$produto2->setPreco(86.00);


echo "Produto: " . $produto1->nome . "<br>";
echo "Preço: R$ " . $produto1->getPreco() . "<br><br>";

echo "Produto: " . $produto2->nome . "<br>";
echo "Preço: R$ " . $produto2->getPreco();
?>
