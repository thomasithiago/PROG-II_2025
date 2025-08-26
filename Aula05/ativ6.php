<?php


class Config {
    protected array $parametros = [];

    
    protected function getParametro(string $chave) {
        return $this->parametros[$chave] ?? null;
    }

    
    protected function setParametro(string $chave, $valor): void {
        if (!empty($chave)) { // Validação simples: chave não pode ser vazia
            $this->parametros[$chave] = $valor;
        } else {
            echo "Chave inválida.<br>";
        }
    }
}


class ConfigApp extends Config {
    public function definirParametro(string $chave, $valor): void {
        $this->setParametro($chave, $valor);
    }

    public function obterParametro(string $chave) {
        return $this->getParametro($chave);
    }
}


class ConfigBanco extends Config {
    public function definirParametro(string $chave, $valor): void {
        $this->setParametro($chave, $valor);
    }

    public function obterParametro(string $chave) {
        return $this->getParametro($chave);
    }
}


$appConfig = new ConfigApp();
$appConfig->definirParametro("tema", "escuro");
$appConfig->definirParametro("lingua", "pt-BR");

echo "Tema do app: " . $appConfig->obterParametro("tema") . "<br>";
echo "Idioma do app: " . $appConfig->obterParametro("lingua") . "<br>";

$dbConfig = new ConfigBanco();
$dbConfig->definirParametro("host", "localhost");
$dbConfig->definirParametro("porta", 3306);

echo "Host do banco: " . $dbConfig->obterParametro("host") . "<br>";
echo "Porta do banco: " . $dbConfig->obterParametro("porta") . "<br>";
?>
