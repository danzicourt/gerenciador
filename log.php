<?php
/*
$host="localhost"; // Nome do host onde esta o banco de dados. Padrão ‘localhost’ 
$usuario="root"; // Usuário do Mysql. Padrão ‘root’
$senha=""; // Senha do Mysql 
$db ="gerenciador"; // Nome da Database 


// Conecta ao servidor e selecione a database.
mysql_connect("$host", "$usuario", "$senha")or die("cannot connect"); 
mysql_select_db("$db ")or die("cannot select DB");

*/



	//Dados Banco:
	$server = 'localhost';
	$user = 'root';
	$senha = '';
	$banco_selecionado = 'gerenciador';
      
	//Conecta Banco
	$conecta = mysql_connect($server, $user, $senha);
	mysql_select_db($banco_selecionado);

	if ($conecta) {
            echo "Conexão realizada com Sucesso";
	}else {
	    die("Não foi possivel conectar");

session_start();

// Busca as variaveis $login e $senha 
$nome =$_POST ['nome']; 
$senha=$_POST ['senha'];

// Proteção contra  MySQL injection 
$nome = stripslashes($nome);
$senha = stripslashes($senha);
$nome = mysql_real_escape_string($nome);
$senha = mysql_real_escape_string($senha);

$sql="SELECT * FROM usuarios WHERE nome='$nome' and senha='$senha' ";
$result=mysql_query($sql);

// Mysql_num_row conta as linhas da tabela
$count=mysql_num_rows($result);

// Se o resultado do  $login e $senha, a linha da tabela deve ser 1

if($count==1){

// Registrando $login, $senha e redireciona para o arquivo "logado.php"


session_register("nome");
session_register("senha"); 
header("location:principal.php");
}
else {
echo "login ou senha incorretos";
exit();
}

?>