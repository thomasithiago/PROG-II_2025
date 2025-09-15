<?php
class Cliente {
    private string $nome;
    private string $cpf;

    // Setter do nome
    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    // Getter do nome
    public function getNome(): string {
        return $this->nome;
    }

    // Setter do CPF com validação simples
    public function setCpf(string $cpf): bool {
        // remove caracteres que não sejam números
        $cpf = preg_replace('/[^0-9]/', '', $cpf);

        if (strlen($cpf) == 11) {
            $this->cpf = $cpf;
            return true;
        }
        return false;
    }

    // Getter do CPF
    public function getCpf(): string {
        return $this->cpf;
    }
}

// ---------- Testando a classe ----------
$cliente = new Cliente();
$cliente->setNome("Maria Oliveira");

if ($cliente->setCpf("12345678901")) {
    echo "Nome: " . $cliente->getNome() . "<br>";
    echo "CPF: " . $cliente->getCpf();
} else {
    echo "CPF inválido!";
}
?>
