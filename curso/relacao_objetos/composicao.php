<?php

//Composição
//Na composição , uma classe cria a instancia de outra classe dentro de si propria, sendo assim, quando ela for destruida , a outra claasse tambem será.

class Pessoa{

	public function atribuiNome($nome){
		return "O nome da pessoa é ".$nome;	
	}
}


class Exibe {

	public $pessoa;
	public $nome;

	function __construct($nome){
		$this->pessoa = new Pessoa();
		$this->nome = $nome;
	}

	public function exibeNome(){
		echo $this->pessoa->atribuiNome($this->nome);
	}
}


$exibe = new Exibe("Lucas");
$exibe->exibeNome();










?>