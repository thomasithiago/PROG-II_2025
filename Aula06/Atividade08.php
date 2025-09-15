<?php
class Aluno {
    private string $nome;
    private float $nota;

    
    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    
    public function getNome(): string {
        return $this->nome;
    }

    
    public function setNota(float $nota): bool {
        if ($nota >= 0 && $nota <= 10) {
            $this->nota = $nota;
            return true;
        }
        return false; 
    }

   
    public function getNota(): float {
        return $this->nota;
    }
}


$aluno = new Aluno();
$aluno->setNome("Carlos Souza");

if ($aluno->setNota(8.5)) {
    echo "Aluno: " . $aluno->getNome() . "<br>";
    echo "Nota: " . $aluno->getNota();
} else {
    echo "Nota inválida!";
}
?>
