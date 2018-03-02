<?php
if ( !empty($_POST['Submit'])) {
 
	//Faz a conecção com a base de dados
	include("conecta.php");
 
	//recebe os valores submetidos, protegendo-os contra ataques de SQL injection
	$login = ($_POST["nome"]);
	$senha = ($_POST["senha"]);
 
        // ver se o utilizador e a sua password constam na base de dados
	$resultado = mysqli_query($link,"select * from usuarios where nome= '$login' senha = '$senha'");
	$linhas = mysqli_num_rows($resultado);

	//testa se existe algum utilizador com o login pretendido
	if ($linhas != 1) { 
		// introduziu dados incorrectos, nao existe 1 utilizador
		$msg_erro = "Introduziu dados inválidos, por favor tente novamente!";
        }
	else {
		// o utilizador existe, e é único, logo os dados estão correctos
		//Inicia a session
		session_start();
		$_SESSION["login_usuario"] = $login;
		$_SESSION["senha_usuario"] = $senha;
 
		// redireciona para a pagina principal
		header("Location: princ.php");
             exit();   
	}
}
?>