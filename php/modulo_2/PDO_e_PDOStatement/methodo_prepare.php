<?php

//Constantes para armazenamento das variáveis de conexão.
define('HOST','localhost');
define('PORT', '3306');
define('DBNAME', 'mock');
define('USER', 'root');
define('PASSWORD', '');

try {
    echo ("connected on server ️‍🔥");
	$dsn = new PDO("mysql:host=". HOST . ";port=".PORT.";dbname=" . DBNAME .";user=" . USER . ";password=" . PASSWORD);
} catch (PDOException $e) {
	echo 'A conexão falhou e retorno a seguinte mensagem de erro: ' .$e->getMessage();
}finally{
    echo("<hr/>");
    echo("a connexão com o servidor foi encerrada.");
}

//Realizando uma consulta no BD através do login e senha recebidos por POST
$login = $_POST['login'];
$pswd = $_POST['pswd'];

$stmt = $dsn->prepare("Select * From Usuario Where login = :login And password =:password");
$stmt->execute([':login' => $login, ':password' => $pswd]);

/*Aqui entraria o código para tratar o resultado da instrução SQL acima*/


//Destruindo o objecto statement e fechando a conexão
$stmt = null;
$dsn = null;