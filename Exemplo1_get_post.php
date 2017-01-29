<html>
<head>
<title>Exemplo 1</title>
</head>
<body bgcolor="blue">
Por favor digite seu nome: <br>
<form>
<input type=text name=username> <br> <br>
<input type=submit value="submeter dados">
</form>
<?php
  echo $HTTP_GET_VARS['username']."<br>";
  echo $username."<br>";
  echo $_GET['username']."<br>";
  echo $_REQUEST['username']."<br>";
?>
</body>
</html>