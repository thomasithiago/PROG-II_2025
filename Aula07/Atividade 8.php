<?php

abstract class Impressora {
    abstract public function imprimir();
}

class PDF extends Impressora {
    public function imprimir() {
        echo "Imprimindo documento em PDF.\n";
    }
}

class Texto extends Impressora {
    public function imprimir() {
        echo "Imprimindo documento de texto.\n";
    }
}

class Imagem extends Impressora {
    public function imprimir() {
        echo "Imprimindo imagem.\n";
    }
}

?>