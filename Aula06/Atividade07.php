<?php
class Carro {
    private int $velocidade = 0; 

    
    public function acelerar(int $valor): void {
        $this->velocidade += $valor;

        
        if ($this->velocidade > 200) {
            $this->velocidade = 200;
        }
    }

 
    public function frear(int $valor): void {
        $this->velocidade -= $valor;

     
        if ($this->velocidade < 0) {
            $this->velocidade = 0;
        }
    }

   
    public function getVelocidade(): int {
        return $this->velocidade;
    }
}


$carro = new Carro();

$carro->acelerar(50);
echo "Velocidade atual: " . $carro->getVelocidade() . " km/h<br>";

$carro->acelerar(180); 
echo "Velocidade atual: " . $carro->getVelocidade() . " km/h<br>";

$carro->frear(100);
echo "Velocidade atual: " . $carro->getVelocidade() . " km/h<br>";

$carro->frear(200); 
echo "Velocidade atual: " . $carro->getVelocidade() . " km/h<br>";
?>
