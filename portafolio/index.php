<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="aqua" />
	<title id="">Titulo</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon"  href="images/icon_primary.ico">
	<meta name="description" content="Alejandro maldonado">
    <meta name="author" content="Carlos Alejandro Maldonado López">
    <meta name="copyright" content="camltasks">
    <meta name="robots" content="index, follow">
    <meta name="rating" content="1 years">
    <link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Shizuru&display=swap" rel="stylesheet">

        <script src="js/css_browser_selector.js"></script>
        <script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>
 <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=0a447542-3280-4fea-9cf4-ed0b9ed4a79e"> </script>
<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.13.1/dist/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.13.1/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.13.1/dist/js/uikit-icons.min.js"></script>
<!-- End of  Zendesk Widget script -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bungee&family=Press+Start+2P&family=Shizuru&display=swap" rel="stylesheet">
</head>
<script type="text/javascript">
            $(window).on("load", function(){
        $(".coontaner").css("opacity",1);
        $("#precarga").css("display", "none");
        });

</script>
        <center>
<img id="precarga" src="images/load.gif">
</center>

<body>
<div class="coontaner">

<?php 

  include("lib/nav.php");
  include("styles/style.php");
  include("lib/inicio.php");
  include("lib/conocimientos.php");


?>












<script type="text/javascript">


var bienvenido="Bienvenido, encuentra todo sobre";
var nombre="Carlos Alejandro Maldonado López";
var pestaña = "Inicio";
var dia= Date();

document.title=dia+pestaña+nombre;


function cambioNombre(){
$("#nombre").text('Carlos Alejandro Maldonado López');

}
function cambioBio(){
$("#nombre").text('Bienvenido, conoce mas de mi');

}



setInterval('cambioNombre()',1300);
setInterval('cambioBio()',2500);


</script>

<script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>

  <!-- Cargamos nuestro componente de React. -->
  <script src="like_button.js"></script>
</div>

</body>
</html>