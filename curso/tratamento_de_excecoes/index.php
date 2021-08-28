<?php

//Exception e -> message , code , file , line

class Newsletter{

	public function cadastrarEmail($email){

		if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
				
			throw new Exception("Este email é invalido", 1);
		else:
			echo "Email cadastrado com sucesso!";
		endif;

	}

}


$novo = new Newsletter();

try {

$novo->cadastrarEmail("contato@");

} catch (Exception $e) {
	
	echo "Mensagem: ".$e->getMessage();
	echo "<br>Codigo: ".$e->getCode();
	echo "<br>Linha: ".$e->getLine();
	echo "<br>Arquivo: ".$e->getFile();

}




?>