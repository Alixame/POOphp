<?php

//Associação
//Acontece quando o objeto "Utiliza" outro ,0 porem, sem que ele dependa um do outro

class Pedido{
	public $numero;
	public $cliente;
}

class Cliente{
	public $nome;
	public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Lucas Alixame";
$cliente->endereco = "Rua Laurindo José Basso, Numero:08";

$pedido = new Pedido();
$pedido->numero = "24";
$pedido->cliente = $cliente;

$dados = array(
	'numero' => $pedido->numero,
	'nome_cliente' => $pedido->cliente->nome,
	'endereco_cliente'=> $pedido->cliente->endereco
);

var_dump($dados);

?>