<?php
class Usuario {
    private string $senha;

 
    public function setSenha(string $senha): void {
        $this->senha = $senha;
    }

   
    public function verificarSenha(string $senhaDigitada): bool {
        return $this->senha === $senhaDigitada;
    }
}


$usuario = new Usuario();
$usuario->setSenha("12345"); 


if ($usuario->verificarSenha("12345")) {
    echo "Senha correta! <br>";
} else {
    echo "Senha incorreta! <br>";
}


if ($usuario->verificarSenha("abcde")) {
    echo "Senha correta! <br>";
} else {
    echo "Senha incorreta! <br>";
}
?>
