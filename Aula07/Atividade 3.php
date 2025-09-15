<?php


class Pagamento {
    public function processar() {
        echo "Processando pagamento genérico...<br>";
    }
}


class Cartao extends Pagamento {
    public function processar() {
        echo "Pagamento realizado com Cartão.<br>";
    }
}


class Pix extends Pagamento {
    public function processar() {
        echo "Pagamento realizado via Pix.<br>";
    }
}


class Boleto extends Pagamento {
    public function processar() {
        echo "Pagamento realizado com Boleto.<br>";
    }
}


$cartao = new Cartao();
$cartao->processar();

$pix = new Pix();
$pix->processar();

$boleto = new Boleto();
$boleto->processar();

?>
