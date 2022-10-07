<?php
require_once'Coneccion.php';
class Trabajo
{
	/*FUNCION SQL PARA INGRESAR USUARIOS*/
public function insertusuario()
{
	/*$query="select email,cedula from usuarios where email='".$_POST["email"]."' && cedula='".$_POST["cedula"]."'";
		$resp=mysql_query($query,Coneccion::con());
		if (mysql_num_rows($resp)==0)
		{*/
		$sql="insert into datos values(null,'".$_POST["nombre"]."','".$_POST["apellido"]."','".$_POST["email"]."','".$_POST["telefono"]."','".$_POST["celular"]."','".$_POST["ciudad"]."')";
		mysql_query($sql,Coneccion::con());
		echo("<script type='text/javascript'> 
		window.location='mecanica.php'
		</script>");/*
		}else
		{
		/*echo '<script type="text/javascript">alert("El E-Mail y cedula ingresado ya existe en la base de datos");window.location="formulario.php";</script>';*/
			//header("Location: formulario.php?m=1");
		/*}*/
}
public function consultaid()
{
	$sql="select count(id) as total from usuarios where id=5 ";
	$res=mysql_query($sql,Coneccion::con());
	if( mysql_num_rows($res==0))
	{
		$res['total'];
		
		echo"<script type='text/javascript'>";
		echo"$(document).ready(function() {";
		echo" setTimeout(function() {";
		echo" $('.imagen1').fadeIn(1000);";
		echo"},1000);";
		echo"});";
		echo"</script>";
	}
}
}//fin clase
?>