<?php 

class Login {

	public static $user;

	public static function verificarLogin(){
		echo "<br>O usuario ".self::$user." está logado!";
	}

	public  function sairSistema(){
		echo "<br>O usuario deslogou!";
	}

}

// quando a função for static
Login::$user = "admin";
Login::verificarLogin();

// quando a função for publica
$login = new Login();
$login->sairSistema();


 ?>