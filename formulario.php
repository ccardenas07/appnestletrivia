<?php
/*funcion que llama a la clase donde se ingresa los metodos de insercion*/
require_once'conexion/Trabajo.php';
/*condicional para guardadr el dato*/
if(isset($_POST) and $_POST["grabar"]=="si")
{
	//($_POST);
	/*instancia de la clase trabajo*/
	
	$tra=new Trabajo();
	$tra->insertusuario();
	exit; 
	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="css/estilo.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.10.2.min.js" ></script>
<script type="text/javascript" src="js/funciones.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>     
<script type="text/javascript" src="js/validCampoFranz.js"></script>

<script type="text/javascript">
            $(function(){
                //Para escribir solo letras
                $('#minombre').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéiou');
				$('#miapellido').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéiou');
				$('#miciudad').validCampoFranz('abcdefghijklmnñopqrstuvwxyzáéiou');
                //Para escribir solo numeros    
                $('#mitelefono').validCampoFranz('0123456789'); 
				$('#micelular').validCampoFranz('0123456789');
				     
            });
        </script> 
</head>

<body>
<img src="img/9_form.jpg" width="790px" height="700px" />
<div class="formulario">
<form name="form" id="form" method="post" action="formulario.php">
<?php
if (isset($_GET["m"]) and $_GET["m"]==1)
{
	?>
	<h2 style="color:green;">Email y Cedula  ya existen</h2>
	<?php
}
?>
<div class="lnom">Nombres:</div>
<div class="nombre"><input type="text" name="nombre" id="minombre" size="14px"/></div>
<div class="apellido"><input type="text" name="apellido" id="miapellido" size="14" /></div>
<div class="lcel">Email:</div>
<div class="celular"><input type="text" name="email" id="miemail"  size="40px"/>
</div>
<div class="lemail">Telf Domicilio:</div>
<div class="email"><input type="text" name="telefono" id="mitelefono"size="40px" /></div>
<div class="lced">Celular:</div>
<div class="cedula"><input type="text" name="celular" id="micelular"size="40px" /></div>
<div class="lced">Ciudad:</div>
<div class="cedula"><input type="text" name="ciudad" id="miciudad"size="40px" /></div>
<div class="botonilumina">
<input type="hidden" name="grabar" id="grabar"  value="si" />
<div id="error"></div>
<!--<input type="button" id="boton" src="images/btn_enviar.png" width="171px" height="68px" onclick="valida_registro();" border="none"  />-->
<!--<input type="image" id="boton" src="images/btn_enviar.png" width="171px" height="68px" onclick="valida_registro();" />-->
<a href="javascript:void(0);" id="boton" onclick="valida_registro();">
<img src="img/btn_enviar.png" width="131px" height="71px" />
</a>
</div>

</form>
</div>
</body>
</html>