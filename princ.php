<?php
session_start();
 
if (!isset($_SESSION["login_usuario"]) || !isset($_SESSION["senha_usuario"])) {
    // enviar o utilizador para a pagina de login
    header("Location: login.php");
} else {
    // o utilizador tem sessao iniciada e carregamos o resto da pagina
    $login_usuario = $_SESSION["login_usuario"];
    $senha_usuario = $_SESSION["senha_usuario"];
}
 
?>

<html>
<head>  </head


<body>






<form method="post" action="busca.php">
  <input type="text" name="busca" placeholder="Digite a palavra chave" />
  <input type="submit" value="Buscar" />
</form>  
  
</body>

<footer> </footer>

</html>
