<?php
header('Content-Type: text/html; charset=utf-8');
include 'conecta.php';

        $nome =  utf8_encode(htmlspecialchars($_POST['nome']));
		$setor =  utf8_encode(htmlspecialchars($_POST['setor']));
		$senha =  utf8_encode(htmlspecialchars($_POST['senha']));


        
		
// inserir dados


$sql = "INSERT INTO usuarios (nome, setor, senha)
VALUES ('$nome', '$setor', '$senha')";

if (mysqli_query($conn, $sql)) {
    echo "CADASTRADO COM SUCESSO ";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

echo " <p> <a href= index.html>Retornar</a> </p>";
?>





		












