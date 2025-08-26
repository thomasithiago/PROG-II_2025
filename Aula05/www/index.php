<?php

class ConexaoBD {
    private $conexao;

    
    private function conectar() {
        try {
            $this->conexao = new PDO("mysql:host=localhost;dbname=testdb", "root", "");
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Conexão realizada com sucesso.<br>";
        } catch (PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }
    }

    
    public function getConexao() {
        if ($this->conexao === null) {
            $this->conectar();
        }
        return $this->conexao;
    }
}


$conexaoBD = new ConexaoBD();
$conexao = $conexaoBD->getConexao();

if ($conexao) {
    echo "Conexão obtida com sucesso!";
} else {
    echo "Falha ao obter a conexão.";
}
?>
