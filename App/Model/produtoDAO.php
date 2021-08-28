<?php

namespace App\Model;

class ProdutoDAO{

	public function create(Produto $p){

		//Codigo SQL para inserir informação no banco
		$sql = 'INSERT INTO produtos (nome,descricao) VALUES (?,?)';

		//preprarando conexão com banco
		$stmt = Conexao::getConn()->prepare($sql);

		//pegando os valores 
		$stmt->bindValue(1, $p->getNome());
		$stmt->bindValue(2, $p->getDescricao());

		//executando o comando
		$stmt->execute();
	}

	public function read(){

		//Codigo SQL para Consultar o Banco
		$sql = 'SELECT * FROM produtos';

		//preprarando conexão com banco
		$stmt = Conexao::getConn()->prepare($sql);

		//executando o comando
		$stmt->execute();

		if ($stmt->rowCount() > 0):
			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $resultado;
		else:
			return [];
		endif;
		
	}

	public function update(Produto $p){

		//Codigo SQL para alterar informações no banco
		$sql = 'UPDATE produtos SET nome = ?, descricao = ? WHERE id = ?';

		//preprarando conexão com banco
		$stmt = Conexao::getConn()->prepare($sql);

		//pegando os valores 
		$stmt->bindValue(1, $p->getNome());
		$stmt->bindValue(2, $p->getDescricao());
		$stmt->bindValue(3, $p->getId());

		//executando o comando
		$stmt->execute();

	}

	public function delete($id){

		//Codigo SQL para DELETAR informações no banco
		$sql = 'DELETE FROM produtos WHERE id = ?';

		//preprarando conexão com banco
		$stmt = Conexao::getConn()->prepare($sql);

		//pegando os valores 
		$stmt->bindValue(1, $id);

		//executando o comando
		$stmt->execute();

	}


}



?>