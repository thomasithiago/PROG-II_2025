<?php
class Pedido {
    private array $itens = [];

    
    public function adicionarItem(string $item): void {
        $item = trim($item);
        if (!empty($item)) {
            $this->itens[] = $item;
            echo "✅ Item '{$item}' adicionado com sucesso!<br>";
        } else {
            echo "⚠️ Erro: item inválido.<br>";
        }
    }

    
    public function listarItens(): void {
        if (empty($this->itens)) {
            echo "🛒 Nenhum item no pedido.<br>";
        } else {
            echo "<h3>Itens do pedido:</h3><ul>";
            foreach ($this->itens as $item) {
                echo "<li>$item</li>";
            }
            echo "</ul>";
        }
    }

    
    public function getItens(): array {
        return $this->itens;
    }
}


$pedido = new Pedido();


if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST["novoItem"])) {
    $pedido->adicionarItem($_POST["novoItem"]);
}


$pedido->listarItens();
?>


<form method="post">
    <input type="text" name="novoItem" placeholder="Digite o nome do item" required>
    <button type="submit">Adicionar Item</button>
</form>
