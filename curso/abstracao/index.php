<?php 
// Classe que serve como modelo
abstract class banco{

	protected $saldo;
	protected $limiteSaque;
	protected $juros;

	public function setSaldo($s){
		$this->saldo = $s;
	}

	public function getSaldo(){
		return $this->saldo;
	}

	abstract protected function Sacar($s);
	abstract protected function Depositar($d);

}



class Nubank extends Banco {
	public function Sacar($s){
		$this->saldo -= $s;
		echo '<br> Sacou : R$'.$s;
	}
	public function Depositar($d){
		$this->saldo += $d;
		echo '<br> Depositou : R$'.$d;
	}
}

$conta = new Nubank();
$conta->setSaldo(1100);


echo '<hr>Saldo Anterior: R$ '.$conta->getSaldo();
$conta->Sacar(100);
echo '<br>Saldo restante: R$ '.$conta->getSaldo();
echo "<hr>";

echo '<hr>Saldo Anterior: R$ '.$conta->getSaldo();
$conta->Depositar(1000);
echo '<br>Saldo Atualizado: R$ '.$conta->getSaldo();
echo "<hr>";
 ?>