<?php
session_start();

if (isset($_POST))
{
	
	if (isset($_POST["res"]))
	{
		
	$_SESSION["res1"]=$_POST["res"];	
	/*die($_SESSION["res1"]."-".$_POST["res"]);*/
	echo("<script> window.location.href='" . "pregunta2.php" . "'</script>");

		
	}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="css/estilo.css" type="text/css" rel="stylesheet" /> 
<script type="text/javascript" src="js/funciones.js"></script>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38627793-1']);
  _gaq.push(['_setDomainName', 'appiglu.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript">
    function ActivarCampoOtroTema(){
        var contenedor = document.getElementById("respuesta");
		var contenedor1 = document.getElementById("respuesta1");
        contenedor.style.display = "block";
		contenedor1.style.display = "block";
        return true;
    }
</script>
<script type="text/javascript" >
                $(document).ready(function() {
					//botonverdadero
                   $('#btn1').click(function(e)
					{
						e.preventDefault();
						$('#res').val('2');
						//alert($('#res').val());
						//$('#form').submit();
						//alert($('#val01').val());
					});
					
                }); 
            </script>
</head>

<body>

<img src="img/2_pregunta.jpg" width="790px" height="700px" />
<div class="contenedorb">

    <div class="btntigr">
   <form name="form" id="form"action="pregunta1.php" method="post" />
	<input type="hidden" name="res" id="res" />
    <!--<input type="button" value="res"id="btn1" />-->
    <a href="#" onclick="ActivarCampoOtroTema()" id="btn1">
    <img src="img/opcion1a.png" width="119px" height="63px" />
    </a>
    </div>
    <div class="btncevich">
    <a href="#" onclick="ActivarCampoOtroTema()" id="btn2">
    <img src="img/opcion1b.png" width="119px" height="63px" />
    </a>
    </div>
    <div class="btnlocro">
    <a href="#" onclick="ActivarCampoOtroTema()"id="btn3">
    <img src="img/opcion1c.png" width="119px" height="63px" />
    </a>
    </div>
    <div class="btnfritada">
    <a href="#" onclick="ActivarCampoOtroTema()" id="btn4">
    <img src="img/opcion1d.png" width="119px" height="63px" />
    </a>
    </div>
    <div class="respuesta" id="respuesta" style="display:none">
    <img src="img/repuesta1.png" width="406px" height="169px" />
    </div>
    <div class="respuesta1" id="respuesta1" style="display:none">
    <input type="button" id="respuesta1" onclick="document.form.submit();"/>  
    </div>
   
    </form>
</div>

</body>
</html>