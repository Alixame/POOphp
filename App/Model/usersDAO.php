<?php 

// NAMESPACE PARA FAZER O AUTOLOAD DA CLASSE
namespace App\Model;


class UsersDAO {


    /**
     * METODO RESPONSAVEL POR CADASTRAR UM USUARIO NO BANCO
     * @return boolean
     */
    public function create(Users $usuario){

        // QUERY SQL PARA INSERIR REGISTRO NO BANCO
		$sql = 'INSERT INTO usuarios (nome,email,senha) VALUES (?,?,?)';

		// PREPARANDO CONEXÃO COM O BANCO
		$stmt = Conexao::getConn()->prepare($sql);

		// PEGANDO ATRIBUTOS DO USUARIO 
		$stmt->bindValue(1, $usuario->getNome());
		$stmt->bindValue(2, $usuario->getEmail());
        $stmt->bindValue(3, $usuario->getSenha());

		// EXECUTANDO QUERY
		$stmt->execute();

    }

    /**
     * METODO RESPONSAVEL POR TRAZER OS USUARIOS NO BANCO
     * @return boolean
     */
    public function readAll(){

        // QUERY SQL PARA FAZER CONSULTA NO BANCO
		$sql = 'SELECT * FROM usuarios';

		// PREPARANDO CONEXÃO COM O BANCO
		$stmt = Conexao::getConn()->prepare($sql);

		// EXECUTANDO QUERY
		$stmt->execute();
        
        // VERIFICA SE TEM REGISTRO NA TABELA
		if ($stmt->rowCount() > 0){

            // ARMAZENA OS RESULTADOS 
			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            
            // RETORNA OS RESULTADOS EM JSON
			return json_encode($resultado);

        }else{

            // CASO NÃO TENHA REGISTRO RETORNARA ARRAY VAZIO
			return [];

        }

    }


    /**
     * METODO RESPONSAVEL POR ATUALIZAR UM USUARIO NO BANCO
     * @return boolean
     */
    public function update(Users $usuario){

        // QUERY SQL PARA FAZER ALTERAÇÃO NO BANCO
		$sql = 'UPDATE usuarios SET nome = ?, email = ?,senha = ? WHERE id = ?';

		// PREPARANDO CONEXÃO COM O BANCO
		$stmt = Conexao::getConn()->prepare($sql);

		// PEGANDO ATRIBUTOS DO USUARIO 
		$stmt->bindValue(1, $usuario->getNome());
		$stmt->bindValue(2, $usuario->getEmail());
        $stmt->bindValue(3, $usuario->getSenha());
		$stmt->bindValue(4, $usuario->getId());

		// EXECUTANDO QUERY
		$stmt->execute();

    }

    /**
     * METODO RESPONSAVEL POR EXCLUIR UM USUARIO NO BANCO
     * @return boolean
     */
    public function delete(Users $usuario){

        //Codigo SQL para DELETAR informações no banco
		$sql = 'DELETE FROM usuarios WHERE id = ?';

		// PREPARANDO CONEXÃO COM O BANCO
		$stmt = Conexao::getConn()->prepare($sql);

		// PEGANDO ATRIBUTOS DO USUARIO
		$stmt->bindValue(1, $usuario->getId());

		// EXECUTANDO QUERY
		$stmt->execute();

    }

}