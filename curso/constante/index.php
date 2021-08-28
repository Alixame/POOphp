<?php 

class Pessoa{

	const nome = "Lucas";

	public function exibirNome(){
		echo self::nome;
	}

}

class Lucas extends Pessoa{

	const nome = "Alixame";

	public function exibirNome(){
		echo parent::nome;
	}

}

$lucas = new Lucas();
$lucas->exibirNome();


 ?>