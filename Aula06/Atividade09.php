<?php
class Config {
    protected array $parametros = []; 
}

class SistemaConfig extends Config {
    
    public function setParametro(string $chave, string $valor): void {
        $this->parametros[$chave] = $valor;
    }

    
    public function exibirParametros(): void {
        foreach ($this->parametros as $chave => $valor) {
            echo "$chave: $valor<br>";
        }
    }
}


$config = new SistemaConfig();

$config->setParametro("tema", "escuro");
$config->setParametro("lingua", "pt-BR");
$config->setParametro("versao", "1.0");

echo "Parâmetros de configuração:<br>";
$config->exibirParametros();
?>
