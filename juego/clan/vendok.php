<?php include_once 'header.php';
if ($_GET[vehiculo]==""){
	 	echo "<script> location.href=\"lista/hangar.php\" </script>";
	 }

	 $v=false;
	 $ul=sel("sw_vehiculos", "", $_GET[vehiculo]);
  if($ul[tipo]!="Crucero" && $ul[uso]=="N"){

	 if($ul[tprop]=="Jugador" && $ul[prop]==$us[nombre]){
			$v=true;
	 }elseif($ul[tprop]=="Clan" && $ul[prop]==$cl[nombre] && $us[nombre]==$cl[lider]){
			$v=true;
 	 }else{
	 		echo "Imposible de vender";
	 }
	}	 

	 if ($v){

	  	 $result=mysql_query("UPDATE `sw_vehiculos` SET venta='S', precio='$_GET[precio]' WHERE nombre='$_GET[vehiculo]'")or die(mysql_error());
	  
	  	 echo 'Puesto a la venta';
	}else{
		  Echo 'No tienes jurisdicci�n para poner a la venta el vehiculo o no existe';
	}




include_once 'footer.php'; ?>
