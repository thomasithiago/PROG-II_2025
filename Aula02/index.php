<?php

	// Classe Usuario
	class Usuario
	{
		public string $nome;
		public string $email;
		public int $idade;

		public function exibir()
		{
			echo "Nome do Usuário: {$this->nome}\n\n";
			echo "E-mail do Usuário: {$this->email}\n";
			echo "Idade do Usuário: {$this->idade}\n";
			echo "----------------------------------";
		}
	}

	echo("Usuário Criado: \n");
	$u = new Usuario();
	$u ->nome = "Thiago Balbinot\n";
	$u ->email = "thiagobalbinot@gmail.com";
	$u ->idade = 19;
	$u -> exibir();

	echo("Usuário Criado: \n");
	$u = new Usuario();
	$u ->nome = "Thiago Thomasi";
	$u ->email = "thiagothomasi@gmail.com";
	$u ->idade = 20;
	$u -> exibir();
?>