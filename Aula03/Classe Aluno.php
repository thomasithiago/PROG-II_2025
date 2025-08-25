<?php

	class Aluno
	{
		private string $nome;
		private float | int $media;
		

		function __construct(string $nome, float | int $media)
		{
			$this->nome = $nome;
			$this->media = $media;
			
		}

		function MediaStudent()
		{
			echo "o Aluno {$this->nome} apresentou a media {$this->media}.!<br>";
			if($this ->media >=7)
			{
				echo "O Aluno foi aprovado!";
			}

			else if($this ->media <=7)
			{
				echo"o Aluno foi reprovado";
			}
		}

		
	}


	$n1 = new Aluno("Thiago Thomasi" ,7,5);
	$n1->MediaStudent();
 

	echo "<br>"; 

	$n1 = new Aluno("Thiago Balbinot" ,6,5);
	$n1->MediaStudent();

	$n1 = new Aluno("Mateus Ferreira" ,0,5);
	$n1->MediaStudent();
 

	echo "<br>"; 
 
?>
