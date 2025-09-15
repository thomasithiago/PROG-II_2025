<?php

abstract class Mensagem {
    protected $texto;
    public function __construct($texto) {
        $this->texto = $texto;
    }
    abstract public function formatar();
}

class Maiusculo extends Mensagem {
    public function formatar() {
        return strtoupper($this->texto);
    }
}

class Minusculo extends Mensagem {
    public function formatar() {
        return strtolower($this->texto);
    }
}

class Capitalizado extends Mensagem {
    public function formatar() {
        return ucwords(strtolower($this->texto));
    }
}

?>