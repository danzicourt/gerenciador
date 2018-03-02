<?php
require_once("./conf/confBD.php");
include_once("/cabecalhos/cabecalho_login.html");

try
{
	// se não foram passados 4 parâmetros na requisição e não vier da página de cadastro
	//desvia para a mensagem de erro: 	// "previne" acesso direto à página
	$origem = basename($_SERVER['HTTP_REFERER']);
	if((count($_POST)!=4)&&($origem!='Doc.1.html')){
		header("Location:./acessoNegado.php");
		die();
	}
	//se existem os parâmetros...
	else{
		//instancia objeto PDO, conectando-se ao mysql
		$conexao = conn_mysql();
		
		//captura valores do vetor POST
		//utf8_encode para manter consistência da codificação utf8 nas páginas e no banco
		
		$nome = utf8_encode(htmlspecialchars($_POST['nome']));
		$email = utf8_encode(htmlspecialchars($_POST['setor']));
		
		$senha = utf8_encode(htmlspecialchars($_POST['senha']));
		
		
		 $query ='insert into usuarios(nome, setor, senha, ) values(:nome, :senha, :setor,)';
            
            $stmt = $conexao->prepare($query);
		
	
            $stmt->bindValue(':nome', $nome);	
            $stmt->bindValue(':setor', $setor);	
            $stmt->bindValue(':senha', $senha);	
            








            
            
				
	
            $inserir = $stmt->execute();
		
		//verifica se o retorno da execução foi verdadeiro ou falso,
		//imprimindo mensagens ao cliente
		if ($inserir){
			 echo "<h1>Cadastro efetuado com sucesso.</h1>\n";
			 echo "<p class=\"lead\"><a href=\"./index.html\">Página principal</a></p>\n";
		}
		else {
			echo "<h1>Erro na operação.</h1>\n";
				$arr = $operacao->errorInfo();		//mensagem de erro retornada pelo SGBD
				$erro = utf8_decode($arr[2]);
				echo "<p>$erro</p>";							
			    echo "<p><a href=\"./cadastra.php\">Retornar</a></p>\n";
		}
    }
}
catch (PDOException $e)
{
    // caso ocorra uma exceção, exibe na tela
    echo "Erro!: " . $e->getMessage() . "<br>";
    die();
}

include_once("/rodapes/rodape_login.html");

?>
