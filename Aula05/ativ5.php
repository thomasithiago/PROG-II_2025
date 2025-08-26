<?php

class Usuario {
    private string $senha;

    // setter com validação
    public function setSenha(string $novaSenha): void {
        // validação: mínimo 6 caracteres
        if (strlen($novaSenha) >= 6) {
            $this->senha = $novaSenha;
            echo "Senha cadastrada com sucesso.<br>";
        } else {
            echo "Erro: A senha deve ter pelo menos 6 caracteres.<br>";
        }
    }

    // método para verificar senha
    public function verificarSenha(string $senhaDigitada): bool {
        return $this->senha === $senhaDigitada;
    }
}


$usuario = new Usuario();

// cadastrar senha inválida
$usuario->setSenha("123");  

// cadastrando senha válida
$usuario->setSenha("minhasenha");

// testando verificação
if ($usuario->verificarSenha("minhasenha")) {
    echo "Senha correta!<br>";
} else {
    echo "Senha incorreta!<br>";
}

if ($usuario->verificarSenha("errada")) {
    echo "Senha correta!<br>";
} else {
    echo "Senha incorreta!<br>";
}
?>
