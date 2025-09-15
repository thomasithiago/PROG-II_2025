<?php

class Relatorio {
    public function __call($nome, $argumentos) {
        if ($nome === "gerar") {
            if (count($argumentos) == 1) {
                echo "Gerando relatório de: {$argumentos[0]}\n";
            } elseif (count($argumentos) == 2) {
                echo "Gerando relatório de: {$argumentos[0]} com filtro {$argumentos[1]}\n";
            } else {
                echo "Parâmetros inválidos para gerar relatório.\n";
            }
        }
    }
}

?>