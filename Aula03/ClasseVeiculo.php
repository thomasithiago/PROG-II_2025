<?php

	class Carro
	{
		private string $marca;
		private string $modelo;
		private int $ano;

		function __construct(string $marca, string $modelo, int $ano)
		{
			$this->marca = $marca;
			$this->modelo = $modelo;
			$this->ano = $ano;
		}

		function InfCarro()
		{
			echo "Este Carro é da marca  {$this->marca}, modelo {$this->modelo} e é do ano de {$this->ano}!!<br>";
		}

		
	}

	$c1 = new Carro("Fiat", "Uno" ,2013);
	$c1->InfCarro();
 

	echo "<br>"; 

	$c1 = new Carro("Nissan", "Versa" ,2021);
	$c1->InfCarro();
 

	echo "<br>"; 

	$c1 = new Carro("Renault", "Oroch" ,2019);
	$c1->InfCarro();
 

	echo "<br>"; 
?>
