<?php 

class Veiculos{

	public $modelo;
	public $cor;
	public $ano;


	public function Andar(){
		echo "Andou<br>";
	}

	public function Parar(){
		echo "Parou<br>";
	}
}

// herdando as elementos da class veiculos
class Carro extends Veiculos{

}

class Moto extends Veiculos{

}

$carro = new Carro();
$carro->modelo="Gol";
$carro->cor="Azul";
$carro->Ano="2020";
$carro->Andar();
$carro->Parar();

$moto = new Moto();
$moto->modelo="Honda";
$moto->cor="Preto";
$moto->Ano="2008";
$moto->Andar();
$moto->Parar();

 ?>