<?php

class Sql extends PDO {

	private $conn;

	public function __construct() {

		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

	}


	//recebe todos os parametros
	private function setParams($statment, $parameters = array()){
		
		foreach ($parameters as $key => $value) {
			$this->setParam($statment ,$key, $value);			
		}

	}

	//faz o bind do parametro recebido
	private function setParam($statment,$key, $value){

		$statment->bindParam($key, $value);

	}

	/**
	instancia a propria classe, faz um prepare da rawQuery e passa os 
	parametros para a função responsavel por fazer o bind dos parametros,
	executa o statment e retorna a variavel do statment
	*/
	public function minhaQuery($rawQuery, $params = array()){
		
		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params); 

		$stmt->execute();

		return $stmt;

	}

	public function select($rawQuery,$params = array()):array
	{

		$stmt = $this->minhaQuery($rawQuery, $params);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);


	}

}