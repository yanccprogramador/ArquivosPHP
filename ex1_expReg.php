<html>
<head>
<title>Exemplo 1</title>
</head>
<body bgcolor="black">
Por favor digite seu nome: <br>
<form>
<input type=text name=cpf> <br> <br>
<input type=submit value="submeter dados">
</form>
<?php
  $cpf=preg_replace("/[^0-9]/", "",$_GET['cpf']);
  $fp=fopen("cpf.txt","a");
  fwrite($fp,"$cpf");
  fclose($fp);
?>
</body>
</html>