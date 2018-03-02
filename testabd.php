<?php 
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
        }
?>