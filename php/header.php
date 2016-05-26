<meta charset="UTF-8">
<title>El Cliente Misterioso | Zona de usuario</title>
<link rel="stylesheet" type="text/css" href="../css/default.css?<?php echo time(); ?>" media="screen" />
<link rel="stylesheet" type="text/css" href="../css/jquery-ui.min.css">
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="../css/app.css?<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="../css/jquery.ui.colorPicker.css">

<link rel="stylesheet" href="http://cdn.kendostatic.com/2014.1.318/styles/kendo.common.min.css" />
<link rel="stylesheet" href="http://cdn.kendostatic.com/2014.1.318/styles/kendo.blueopal.min.css" />
<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
<link rel="icon" href="../img/favicon.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<!-- LOS SIGUIENTES SCRIPTS SE DEBEN PONER EN ORDEN PARA FUNCIONAR CORRECTAMENTE, YA POR COMO ESTÁN ESCRITOS SE COMUNICAN ENTRE ELLOS -->

<script>
paceOptions = {
  elements: false,
  target: "#PACE",
  ajax: true,
  restartOnRequestAfter: true
}
</script>

 <script type="text/javascript">
 // Nombre de usuario
  var usuario = "<?php echo $_SESSION['usuario_nombre']; ?>";
 // Directorio de usuario
  var diruser = "<?php echo $diruser; ?>";
 // Preferencias de usuario 
  var pos_panel = "<?php echo $PREF_pos_panel; ?>";
   var bg_panel = "<?php echo $PREF_BACKGROUNDPANEL; ?>";

 // Carga del sistema
  var systemload = "<?php echo $carga[0]; ?>"
    var systemload1 = "<?php echo $carga[1]; ?>"
      var systemload2 = "<?php echo $carga[2]; ?>"
  </script>


<script src='../langs/es-ES.js'></script>
<script src='../js/lib/pace.min.js'></script>
<script src='../js/lib/jquery-2.1.4.min.js'></script>
<script src='../js/enviroment/assets.js'></script>
<script src='../js/enviroment/notify.js'></script>
<script src='../js/enviroment/calendar.js'></script>
<script src='../js/lib/jquery-ui.min.js'></script>
<script src='../js/enviroment/g_icons.js'></script>
<script src='../js/enviroment/taskbar.js'></script>
<script src='../js/enviroment/gcolors.js'></script>
<script src='../js/enviroment/g_windows.js'></script>
<script src='../js/enviroment/dash.js'></script>
<script src='../js/enviroment/jquery.ui.colorPicker.min.js'></script>
<script src='http://cdn.kendostatic.com/2014.1.318/js/kendo.all.min.js'></script>
<script src='../js/enviroment/default.js'></script>
<div id="aerowindows"></div>
<script>
$(function(){
  // Script en Jquery para fixear el fondo 

  $("body , .blurred , .notificacionblur").css("background", "rgba(0,0,0,0.8) url(http://"+document.domain+"/AREACLIENTE/home/<?php echo $_SESSION['usuario_nombre']; ?>/config/wallpaper.jpg) no-repeat center center fixed"); // Aplicamos el fondo del directorio del usuario sobre BODY

// Aplicamos el tamaño COVER para el fondo (Ampliado)
       $('body , .blurred , .notificacionblur').css({"-webkit-background-size":"cover"});
            $('body , .blurred , .notificacionblur').css({"-moz-background-size":"cover"});
            $('body , .blurred , .notificacionblur').css({"-o-background-size":"cover"});
            $('body , .blurred , .notificacionblur').css({"background-size":"cover"});
  console.log("Intentado poner el fondo con http://"+ document.domain+"/home/<?php echo $_SESSION['usuario_nombre']; ?>/config/wallpaper.jpg");
});

</script>
 
  <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->