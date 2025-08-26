<?php


class Funcionario {
    protected float $salario;

    public function __construct(float $salario) {
        $this->salario = $salario;
    }
}


class Gerente extends Funcionario {

    
    public function getSalario(): float {
        return $this->salario;
    }

    
    public function setSalario(float $novoSalario): void {
        if ($novoSalario > 0) {
            $this->salario = $novoSalario;
        } else {
            echo "Salário inválido.<br>";
        }
    }
}


$gerente = new Gerente(5000);

// Exibe salário inicial
echo "Salário inicial: R$ " . $gerente->getSalario() . "<br>";

// Modifica salário
$gerente->setSalario(7000);
echo "Salário atualizado: R$ " . $gerente->getSalario();
?>
