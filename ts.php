<html>
<head>

<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>DOC MANAGER</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/btn3d.css" rel="stylesheet">



  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
	<title></title>
</head>
<body>

<?php
header('Content-Type: text/html; charset=utf-8');
include 'conecta.php';

       // $nome = $_POST ['nad'];
		$tipo = utf8_encode(htmlspecialchars($_POST['sel']));
		

        
		
// inserir dados


$sql = "INSERT INTO contrato (documento) VALUES ('$tipo')";

 

if (mysqli_query($conn, $sql)) {
    echo   "NUMERO GERADO COM SUCESSO  DOC N? "   .  mysqli_INSERT_ID ($conn )  ;


} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
 
echo " <h3> <a href= cad.html>Retornar</a> </h3>" ;
?>

</body>
</html>










