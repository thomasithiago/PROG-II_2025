<?php
class Funcionario {
    protected float $salario;

    public function __construct(float $salario) {
        $this->salario = $salario;
    }

    public function getSalario(): float {
        return $this->salario;
    }
}

class Gerente extends Funcionario {
    private float $bonus = 0;

    
    public function setBonus(float $bonus): void {
        $this->bonus = $bonus;
        $this->salario += $bonus; 
    }

    public function getBonus(): float {
        return $this->bonus;
    }
}


$func = new Funcionario(3000);
echo "Funcionário - Salário: R$ " . $func->getSalario() . "<br>";

$gerente = new Gerente(5000);
$gerente->setBonus(1500);

echo "Gerente - Salário com bônus: R$ " . $gerente->getSalario() . "<br>";
echo "Bônus aplicado: R$ " . $gerente->getBonus();
?>
