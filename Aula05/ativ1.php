<?php

class Produto {
    public string $nome;
    public float $preco;
}

$produto1 = new Produto();
$produto1->nome = "Camiseta";
$produto1->preco = 49.90;

$produto2 = new Produto();
$produto2->nome = "Calça";
$produto2->preco = 85.00;

echo "Produto: " . $produto1->nome . "<br>";
echo "Preço: R$ " . $produto1->preco . "<br><br>"; 

echo "Produto: " . $produto2->nome . "<br>";
echo "Preço: R$ " . $produto2->preco;
?>
