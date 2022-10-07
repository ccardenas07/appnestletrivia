<?php
//clase conectora
class Coneccion
{
	//funcion para crear coneccion
	public static function con()
	{
		//datos de servidor
		$con=mysql_connect("localhost","appigluc_trivian","SO.trivia.nestle-aa2014");
		//base de datos
		mysql_select_db("appigluc_trivia");
		return $con;
	}
}
?>