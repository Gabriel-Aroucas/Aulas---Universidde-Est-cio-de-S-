<?php
class Fruta
{
	//Propriedades ou atributos da Classe
	var $nome;
	var $tipo;
	//Construtor da Classe: Essa função é executada todas as vezes em que uma instância da classe é criada.
	//Como abaixo, essa função pode ser vazia. Ou seja, não realiza nenhuma ação.
	public function __construct(){
	}
	// a função recebe um parametro que é declarado quase como uma váriável;
	public function setNome($parametro){
		// a variável nome irá receber tudo oque estiver nos parametros
		$this-> nome = $parametro;
	}
	public function getNome(){
		//retorna o conteudo da variavel nome;
		return $this->nome;

	}
	public function setTipo($tipo){
		$this->tipo = $tipo;
	}
	public function getTipo(){
		return $this->tipo;
	}
}



// instanciando um objeto da classe Fruta
$fruta1 = new Fruta(); 
// utilizando o objeto criado para chamar o método “setNome”
// colocando parametros para a função
$fruta1->setNome("morango"); 
// utilizando o objeto criado para chamar o método “setTipo”
$fruta1->setTipo("vermelha");
// utilizando o comando “echo” para imprimir o resultado da chamada ao método “getNome” 
echo $fruta1->getNome(); 
// utilizando o comando “echo” para imprimir o resultado da chamada ao método “getTipo” 
echo $fruta1->getTipo(); 
