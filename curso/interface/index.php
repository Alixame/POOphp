<?php

interface Crud{

	public function create();
	public function read();	
	public function update();
	public function delete();

}

class Noticias implements Crud{

	public function create(){
		// aqui vai a logica para crear
	}

	public function read(){
		// aqui vai a logica para ler
	}

	public function update(){
		// aqui vai a logica para alterar
	}

	public function delete(){
		// aqui vai a logica para deletar
	}

}












?>