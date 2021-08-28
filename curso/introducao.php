<?php

class Pessoa {

	public $nome;
	public $idade;

	public function Falar(){

		echo "Oi meu nome é ".$this->nome." tenho ".$this->idade." anos";

	}
}

$lucas = new Pessoa();
$lucas->nome = "Lucas Alixame";
$lucas->idade = 18;

$lucas->Falar();





















?>