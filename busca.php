<?php
   //recebe o valor digitado no form
   $palavra = $_POST["busca"];

  //inicia a conexão
  $conexao = mysqli_connect("localhost:3306", "root", "", "gerenciador");

  //faz a consulta na tabela procurando palavras do form
  $query = mysqli_query($conexao, "select * FROM usuarios WHERE nome like '$palavra%' or  setor LIKE '$palavra%'");

  //se fazer a pesquisa
  if($query):
      while($pesquisa = mysqli_fetch_object($query)):
       //esse ->nome  é referente ao nome do campo. Poderia ser $pesquisa->sobrenome e por ai vai
       echo "
             $pesquisa->nome </br>
            ";
       endwhile;


  else:
     echo "Não foi possível fazer a pesquisa.";
  endif; 
  ?>