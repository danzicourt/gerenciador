<?php 
//CONECTA COM O BANCO DE DADOS 
require_once(“conecta.php”);

//RECEBE OS DADOS DO FORMULÁRIO 
$usuario = $_POST[txtUser]; 
$senha = $_POST[txtSenha];

//VERIFICA 
$sql = mysql_query(
SELECT A.ID_USUARIO, A.NOME_USUARIO FROM tb_usuarios A 
WHERE A.USUARIO = ‘$usuario’ 
AND A.SENHA = '$senha') or die(“ERRO NO COMANDO SQL”);

//LINHAS AFETADAS PELA CONSULTA 
$row = mysql_num_rows($sql);

//VERIFICA SE RETORNOU ALGO 
if($row == 0) echo “Usuário/Senha inválidos”;

else { 
//PEGA OS DADOS 
$id = mysql_result($sql, 0, “ID_USUARIO”); 
$nome = mysql_result($sql, 0, “NOME_USUARIO”);

//INICIALIZA A SESSÃO 
session_start();

//GRAVA AS VARIÁVEIS NA SESSÃO 
$_SESSION[id] = $id; 
$_SESSION[nome] = $nome;

//REDIRECIONA PARA A PÁGINA QUE VAI EXIBIR OS PRODUTOS 
Header(“Location: resultado.php”); 
} //FECHA ELSE 


?>