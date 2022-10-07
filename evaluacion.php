<?php
session_start();
//ojo die mata todo
/*die($_SESSION["pregunta1"]."preg1".$_SESSION["pregunta2"]."preg2".$_SESSION["pregunta3"]."preg3".$_SESSION["pregunta4"]."preg4".$_SESSION["pregunta5"]."preg5"); isset($_POST) &&*/
 
/*if ( $_POST["enviar"]=="1" )
{*/
/*	die($_SESSION["res1"]."preg1".$_SESSION["res2"]."preg2".$_SESSION["res3"]."preg3".$_SESSION["res4"]."preg4".$_SESSION["res5"]."preg5");*/
	
	$tot=$_SESSION["res1"]+$_SESSION["res2"]+$_SESSION["res3"]+	$_SESSION["res4"]+$_SESSION["res5"];
	
//echo $tot;
	if($tot>=7)
	{
	
	echo("<script> window.location.href='" . "felicitacion.php" . "'</script>");
	}if($tot<7)
	{
	
	echo("<script> window.location.href='" . "repetir.php" . "'</script>");
	}
?>