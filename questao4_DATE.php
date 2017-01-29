<?php
 date_default_timezone_set('Brazil/East');
 setlocale(LC_ALL,"portuguese-brazil");

$dia_ingles=date("l");
 switch ($dia_ingles){
 	case "Monday":
	$dia_port="Segunda-Feira";
	break;
	case"Tuesday":
	$dia_port="Terça-Feira";
	break;
	case "Wednesday":
	$dia_port="Quarta-feira";
	break;
	case"Thursday":
	$dia_port="Quinta-Feira";
	break;
	case"Friday":
	$dia_port="Sexta-Feira";
	break;
	case "Saturday":
	$dia_port="Sabado";
	break;
	case"Sunday":
	$dia_port="Domingo";
	break;
 }
$mes_ingles=date("M");
 switch ($mes_ingles){
 	case "Jan":
	$mes_port="Janeiro";
	break;
	case"Feb":
	$mes_port="Fevereiro";
	break;
	case "Mar":
	$mes_port="Março";
	break;
	case "Apr":
	$mes_port="Abril";
	break;
	case"May":
	$mes_port="Maio";
	break;
	case "Jun":
	$mes_port="Junho";
	break;
	case"Jul":
	$mes_port="Julho";
	break;
 	case "Aug":
	$mes_port="Agosto";
	break;
	case"Sep":
	$mes_port="Setembro";
	break;
	case "Oct":
	$mes_port="Otubro";
	break;
	case "Nov":
	$mes_port="Novembro";
	break;
        case "Dec":
        $mes_port="Dezembro";
	break;
 }

$data=date("d");
$ano=date("Y");
 echo "Florestal,".$dia_port.",".$data." de ".$mes_port." de ".$ano;
?>