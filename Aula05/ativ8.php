<?php

class Cliente {
    public string $nome;
    protected string $cpf;
    private string $telefone;

    
    public function __construct(string $nome, string $cpf, string $telefone) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
    }


    public function mostrarInfoInterna(): void {
        echo "Acesso dentro da classe:<br>";
        echo "Nome: {$this->nome}<br>";       // público → funciona
        echo "CPF: {$this->cpf}<br>";         // protegido → funciona
        echo "Telefone: {$this->telefone}<br>"; // privado → funciona
    }

    /
    public function getTelefone(): string {
        return $this->telefone;
    }

   
    public function getCpf(): string {
        return $this->cpf;
    }
}


$cliente = new Cliente("João Silva", "123.456.789-00", "(11) 99999-8888");


echo "Acesso fora da classe:<br>";
echo "Nome: " . $cliente->nome . "<br>";          // público → funciona
// echo "CPF: " . $cliente->cpf . "<br>";         // protegido → erro fora da classe
// echo "Telefone: " . $cliente->telefone . "<br>"; // privado → erro fora da classe


echo "CPF via getter: " . $cliente->getCpf() . "<br>";
echo "Telefone via getter: " . $cliente->getTelefone() . "<br>";

echo "<br>Testando acesso interno:<br>";
$cliente->mostrarInfoInterna();
?>
