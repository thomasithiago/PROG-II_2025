<?php
class Pedido {
    private array $itens = [];

    
    public function adicionarItem(string $item): void {
        $this->itens[] = $item;
    }

    
    public function listarItens(): array {
        return $this->itens;
    }
}


$pedido = new Pedido();


$pedido->adicionarItem("Pizza de Calabresa");
$pedido->adicionarItem("Coca-Cola 2L");
$pedido->adicionarItem("Sobremesa");


echo "Itens do pedido:<br>";
foreach ($pedido->listarItens() as $item) {
    echo "- " . $item . "<br>";
}
?>
