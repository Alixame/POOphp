<?php

require_once 'vendor/autoload.php';

use App\Model\Users;
use App\Model\UsersDAO;


$clieteDAO = new UsersDAO;

#-------------------------------------#

// CADASTRANDO REGISTRO 


$cliente = new Users;
$cliente->setNome('Ana maria');
$cliente->setEmail('maria@gmail.com');
$cliente->setSenha('123456');

//$clieteDAO->create($cliente);

echo '<pre>';
echo $clieteDAO->readAll();
echo '</pre>';



#-------------------------------------#

//ALTERANDO REGISTRO 

$cliente->setId(1);
$cliente->setNome('Lucas Alixame');
$cliente->setEmail('lucas2003@gmail.com');
$cliente->setSenha('123456');

//$clieteDAO->update($cliente);

echo '<pre>';
echo $clieteDAO->readAll();
echo '</pre>';


#-------------------------------------#

//EXCLUINDO REGISTRO 

$cliente->setId(1);

// $clieteDAO->delete($cliente);

echo '<pre>';
echo $clieteDAO->readAll();
echo '</pre>';
