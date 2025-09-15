<?php

class Veiculo {
    public function mover() {
        echo "O veículo está se movendo...\n";
    }
}

class Carro extends Veiculo {
    public function mover() {
        echo "O carro está rodando pelas ruas.\n";
    }
}

class Bicicleta extends Veiculo {
    public function mover() {
        echo "A bicicleta está pedalando na ciclovia.\n";
    }
}

class Aviao extends Veiculo {
    public function mover() {
        echo "O avião está voando pelos céus.\n";
    }
}

?>