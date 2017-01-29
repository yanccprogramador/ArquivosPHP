<html>
<head>
<title>Exemplo 1</title>
</head>
<body bgcolor="blue">
Por favor digite a quantidade: <br>
<form>
<input type=text name=num1> <br> <br>
Por favor digite o preço unitario: <br>
<input type=text name=num2> <br> <br>

<input type=submit value="submeter dados">
</form>
<?php
  function calculo($qtd,$preco,&$total){
  	
	$total-=$total*0.10;
	echo $total;
	return;
  }
  $n1= $_GET['num1'];
  $n2= $_GET['num2'];
  $total=$n1*$n2;
  

 calculo($n1,$n2,$total);
    
  
?>
</body>
</html>