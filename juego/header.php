<?php session_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<base href="http://jagcompany.civitis.com/sw-eotlw/juego/" />

	<title>Star Wars - Edges of The Lost Warriors</title>
<?php
            #Incluir los Datos en Modulos
            include_once 'header/style.php'; #Incluir datos de Estilo
            include_once 'header/var.php'; #incluir Datos PHP
            $ver=sel("sw_info", "id", "ver");
?>

</head>

<body background="images/bg1.gif" text="#FFFFFF" link="#FFFFCC" vlink="#FFFFCC" alink="#FFFF99" marginwidth="0" marginheight="0" style="margin: 0" onLoad="writeMenus()" onResize="if (isNS4) nsResizeHandler()">

<table width="100%">
<tr>
       <td>
			 		<small>SW-eotlw <?php echo $ver[val]; ?> es una creaci&oacute;n de <a href="http://jag-team.com">JAGteam</a></small><br>
       </td>
			 <td>
			 <?php
                        include_once 'header/up.php'; #Incluir datos de subir de niveles
             ?>
			 </td>
       <td>
	   	   <div align="right">
		   		<?php if ($us[admin]>0) {
                 ?> <a target="_BLANK" href="admin" onMouseover=" ddrivetip('Entrar en secci&oacute;n de Administraci&oacute;n', '#808080');" onMouseout="hideddrivetip()"><img height=10 width=10 src="http://jagcompany.civitis.com/sw-eotlw/juego/images/admin.gif" border=0></a> <?php
             }?>

		   </div>
	   </td>
</tr>
</table>



<br>
<center>
<table border="1" width=700 bgcolor="#000000" bordercolorlight="#ffffff" bordercolordark="#e1e1e1">
	   <caption align="top">
	   			<center><img src="images/logo.gif"></center>
	   </caption>
	   <tr>
	   	   <td VALIGN="top" width="100%" height=24>

		   </td>
	   </tr>
	   <tr>
	   	   <td>
		   	   <table whidth="100%">
			   		  <tr>
					  	  <td width=600 VALIGN="TOP">
