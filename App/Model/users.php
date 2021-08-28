<?php

namespace App\Model;


class Users{

    /**
     * ID usuario
     * @var integer
     * 
     */
    private $id;

    /**
     * Nome usuario
     * @var string
     * 
     */
    private $nome;

    /**
     * Email usuario
     * @var string
     * 
     */
    private $email;
    
    /**
     * Senha usuario
     * @var string
     * 
     */
    private $senha;


    public function setId($id){
		$this->id = $id;
	}
	
	public function getId(){
		return $this->id;
	}

    public function setNome($nome){
		$this->nome = $nome;
	}
	
	public function getNome(){
		return $this->nome;
	}

    public function setEmail($email){
		$this->email = $email;
	}
	
	public function getEmail(){
		return $this->email;
	}

    public function setSenha($senha){
		$this->senha = $senha;
	}
	
	public function getSenha(){
		return $this->senha;
	}


}

