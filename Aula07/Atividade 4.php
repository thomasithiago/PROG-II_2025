<?php


class Notificacao {
    public function enviar() {
        echo "Enviando notificação genérica...<br>";
    }
}


class Email extends Notificacao {
    public function enviar() {
        echo "Notificação enviada por Email.<br>";
    }
}


class SMS extends Notificacao {
    public function enviar() {
        echo "Notificação enviada por SMS.<br>";
    }
}


class Push extends Notificacao {
    public function enviar() {
        echo "Notificação enviada por Push.<br>";
    }
}


$email = new Email();
$email->enviar();

$sms = new SMS();
$sms->enviar();

$push = new Push();
$push->enviar();

?>
