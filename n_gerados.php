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
  <title></title>
 </head>
<body>

<h1>DOCUMENTOS GERADOS</h1>

<?php

include 'conecta.php';




$sql = "SELECT numero,documento  FROM contrato ";
$result = mysqli_query($conn, $sql);
  
  
  
  
 if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo  "NUMERO do DOCUMENTO : " . $row["numero"]. "  - TIPO DE DOCUMENTO: " . $row["documento"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn); 
?> 

</body>
</html>