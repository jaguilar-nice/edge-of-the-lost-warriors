<?php include_once 'header.php';
//envios
echo "A continuaci�n una lista de los m�dulos enviados por los jugadores/admins. Est�n en formato txt para poder ser leidos.<br>Si quieres enviar un m�dulo en respuesta a una petici�n, puedes usar <address>http://www.pastebin.com</address> y pegar el link en el foro, tambi�n puedes enviarlo a <address>JAGcompany@hotmail.com</address>";
include "db.php";
$sqla = mysql_query("SELECT * FROM dc_envios ORDER BY id DESC")or die(mysql_error()); 
while ($r=mysql_fetch_array($sqla)){
			echo "<hr><a href='envios/$r[arc]'><b>$r[tit]<b></a> - $r[id]<br>$r[desc]<br><i>by: $arc[adm] </i>";
}


include_once 'footer.php'; ?>
