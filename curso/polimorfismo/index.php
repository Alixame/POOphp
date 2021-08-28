<?php

class Animal {

	public function Andar(){

		echo "O animal andou";
	}

	public function Correr(){
		echo "O animal correu";
	}
}

class Cavalo extends Animal {

	public function Andar(){
		$this->Correr();
	}
}


$animal = new Cavalo();
$animal->Andar();





















?>