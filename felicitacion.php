<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en"xmlns="https://www.w3.org/1999/xhtml" xmlns:fb="https://ogp.me/ns/fb#">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="css/estilo.css" type="text/css" rel="stylesheet" />
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
<!--facebook-->
<!--compartir link-->
<script type="text/javascript">
function formu()
{
	window.location="https://appiglu.com/apps.facebook/nestle/appnestletrivia/formulario.php";
}
</script>
<!----->
<div id="fb-root"></div>
        <script>
          // Additional JS functions here
          window.fbAsyncInit = function() {
            FB.init({
              appId      : '253600731488598', // App ID
              channelUrl : 'https://appiglu.com/apps.facebook/nestle/appnestletrivia/mecanica.html?', // Channel File
              status     : true, // check login status
              cookie     : true, // enable cookies to allow the server to access the session
              xfbml      : true,  // parse XFBML
			
            });

             // Additional init code here

          };

          // Load the SDK asynchronously
          (function(d){
             var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement('script'); js.id = id; js.async = true;
             js.src = "//connect.facebook.net/en_US/all.js";
             ref.parentNode.insertBefore(js, ref);
			
           }(document));
        </script>

<div id="fb-root"></div>
<script>/*(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=456712504440229";
  fjs.parentNode.insertBefore(js, fjs); 
}(document, 'script', 'facebook-jssdk'));*/</script>

 <script type="text/javascript" > 
                    function postOnWall(){
                        FB.ui({
                        method: 'feed',
                        link: 'https://www.facebook.com/Nestle.Ecuador/app_253600731488598',

                        picture: 'https://www.appiglu.com/apps.facebook/nestle/appnestletrivia/img/iconog.jpg',
						href:'https://appiglu.com/apps.facebook/nestle/appnestletrivia/formulario.php',
                        name: ':  ¡Experto en Platos T&iacute;picos – Nestle&reg;! ',
                        caption: '',
                        description: ': Demuestra cu&aacute;nto sabes de las delicias ecuatorianas y participa por canastas de productos. &iquest;Qu&eacute; esperas? ',
						
                        }, function(response){
							url:formu()
							});
                    }  
                </script>
<!---->
<!--fin facebook-->
</head>

<body>
<img src="img/7_respuesta1.jpg" width="790px" height="700px" />
<div class="compartir">
<!--<div class="fb-share-button" data-href="https://www.facebook.com/SEGUROSORIENTE/app_456712504440229" data-width="178" data-type="button"></div>-->
<a id="share_link" href="#" 
onclick="postOnWall()" style="background: url('img/btn_compartir.png') no-repeat; display: block; height: 63px; left: 333px; position: absolute; text-indent: -9999em; top: 646px; width: 188px; z-index:100;">
 </a>	
</div>
</body>
</html>