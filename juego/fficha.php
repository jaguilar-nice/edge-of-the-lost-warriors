<?php include 'header.php';

if ($us[lado]==0) {
   $ctxt='Eres completamente neutral...';
}elseif ($us[lado] < 0) {
   $ctxt="Est�s en el lado oscuro";
}elseif ($us[lado] > 0) {
   $ctxt="Est�s en el Lado de la Luz.";
}else{
   $ctxt="Error calculando lado, contacte con el programador...";
}

$lade=$us[lado]+200;
$t = $us[pk] + $us[lpk];
if ($t==0) {$per=0;}else{$per = round(($us[pk]*100)/$t);}

echo "<center><big><big><font color=\"$us[txtc]\"><b>$us[titulo] $us[prefix] $us[nombre]</b></font></big></big>
<table>
	   <tr>
	   	   <td>
		   	   <table>
			   		  <tr>
					  	  <td>
						  	  <table border=1>
							  		 <tr>
									 	 <td>
										 	   <span title=\"Cambiar avatar\">
											   	   		 <a href=\"avatar.php\"><img  border=0 height=100 src=\"$us[avatar_path]\"></a>
	   										   </span>
										 </td>
								     </tr>
							  </table>
						  </td>
						  <td>
						  	  <table cellspacing=\"3\" width=\"100%\">
							  		 <tr>
       								 	    <td><div align='right'><b>Raza:</b></div></td>
										    <td>$us[raza]</td>
									        <td><div align='right'><b>Clan:</b></div></td>
       										<td>$cl[nombre] <a href=\"clanact.php?act=salir&clan=$us[clan]\"><span title=\"Salir del Clan (Borrar si eres lider)\"><img border=0 src=\"images/x.gif\"></span></a> <a href=\"clanact.php?act=fundar\"><span title=\"Fundar clan\"><img border=0 src=\"images/e.jpg\"></span></a>";
											
											if($us[cmess]=="S"){echo " <a href=\"cboard.php?clan=$us[clan]\"><span title=\"Mensaje nueno en el Tabl�n del Clan!\"><blink><img border=0 src=\"images/msg.gif\"></blink></span></a>";}

							          echo "</td>										 
									 </tr>
									 <tr>
									        <td><div align='right'><b>Nivel:</b></div></td>
       										<td><b>$us[nv]</b> ($us[puntos] / $us[next])PX</td>
									        <td><div align='right'><b>Rango:</b></div></td>
       										<td>$us[nivel] <a href=\"ayuda.php#nivel\" onMouseover=\" ddrivetip(' $nvdesc ', '#808080');\" onMouseout=\"hideddrivetip()\"><img border=0 src=\"images/h.gif\"></a></td>
									 </tr>
									 <tr>
									        <td><div align='right'><b>M�rito:</b></div></td>
       										<td>$us[merito]</td>
									        <td><div align='right'><b>Cr�ditos:</b></div></td>
       										<td>$us[creditos]</td>
									 </tr>
									 <tr>
									        <td><div align='right'><b>Origen:</b></div></td>
       										<td>$us[origen]</td>
									        <td><div align='right'><b>Ciudad:</b></div></td>
       										<td>$ci[nombre] ($pl[nombre])</td>
									 </tr>									 
								</table>
					      </td>
					  </tr>
			   </table>
		   </td>
       </tr>
	   <tr>
	       <td>
			   <!--Lado--><br><a href=\"ayuda.php#lado\" onMouseover=\" ddrivetip('El lado simboliza tu equilibrio en la fuerza, puntos positivos indican Lado de la Luz y puntos negativos indican Lado Oscuro.', '#808080');\" onMouseout=\"hideddrivetip()\"><img border=0 src=\"images/h.gif\"></a><b>Alineaci�n:</span></b> $ctxt ($us[lado])
			   <br><b>PK Ganadas:</b> $us[pk]  <b>PK Perdidas:</b> $us[lpk] <b>Victorias:</b> $per %
		   </td>
	   </tr>
</table></center>	 
";















echo "<hr>";





#<!--Barra Vida-->
$bar1=($us[hp]/$us[maxhp])*150;
$bar2=($us[turnos]/$to)*150;
$bar3=($us[estres]/1000)*150;

echo "<center>
<table width=\"100%\">
	   <tr>
	   	   <td width=*><div align=\"right\"> <b><a href=\"ayuda.php#vida\" onMouseover=\" ddrivetip('La vida es tu vitalidad en combate. cuando tu vida llegue a 0 habr�s quedado KO', '#808080');\" onMouseout=\"hideddrivetip()\"><img border=0 src=\"images/h.gif\"></a>P. de Vida</span></b></div></td>
		   <td><img src=\"images/b1.gif\" width=\"$bar1\" height=11> <b>[$us[hp]/$us[maxhp]]</b>";
		   			if($us[hp]<=0){echo ' <sup><b><small><font color="#ffff80">KO</font></small></b></sup>';}?></td>
		   <td><a href="idistritos.php?def=irhospital.php" onMouseover=" ddrivetip('Curarse en el Hospital', '#808080');" onMouseout="hideddrivetip()">H</a> <a href="idistritos.php?def=irburdel.php" onMouseover=" ddrivetip('Curarse en el Burdel', '#808080');" onMouseout="hideddrivetip()">B</a> <a href="entok.php?c=maxhp" onMouseover=" ddrivetip('Entrenar Vida Maxima', '#808080');" onMouseout="hideddrivetip()"><img border=0 src="images/e.jpg"></a></td>
	   </tr><?

#<!--Barra energia-->
echo "  <tr>
           <td><div align=\"right\"><b><a href=\"ayuda.php#energia\" onMouseover=\" ddrivetip('La energ�a es lo que gastas para realizar acciones, cuando tu energia llegue a 0 no podr�s hacer m�s acciones. La energia se recarga automaticamente cada hora.', '#808080');\" onMouseout=\"hideddrivetip()\"><img border=0 src=\"images/h.gif\"></a>Energ�a</b></td>
		   <td><img src=\"images/b2.gif\" width=\"$bar2\" height=11> <b>[$us[turnos]/$to]</b></td>
		   <td>";?><a href="entok.php?c=extrae" onMouseover=" ddrivetip('Entrenar Energ�a M�xima', '#808080');" onMouseout="hideddrivetip()"><img border=0 src="images/e.jpg"></a></td>
		</tr><?

#<!--Barra Estres-->
echo "  <tr>
 	 	   <td><div align=\"right\"><b><b><a href=\"ayuda.php#estres\" onMouseover=\" ddrivetip('El estres es el da�o mental de tu personaje, si pierde mucho, tiene poco dinero o no come bien el estress sube, si llega a 1000 el personaje morir�.', '#808080');\" onMouseout=\"hideddrivetip()\"><img border=0 src=\"images/h.gif\"></a>Estr�s</b></td>
		   <td><img src=\"images/b3.gif\" width=\"$bar3\" height=11> <b>[$us[estres]/1000]</b></td>
		   <td><a href=\"idistritos.php?def=icbar.php\" onMouseover=\" ddrivetip('Sanar estr�s en el Bar', '#808080');\" onMouseout=\"hideddrivetip()\">B</a></td>
		</tr>
		<tr>
		   <td><!-- Salto --></td>
		</tr>";


#<!--Barra atributos-->
echo "  <tr>
	 		<td><div align=\"right\"><a href=\"ayuda.php#vigor\" onMouseover=\" ddrivetip('El Vigor Mide la fuerza de tus ataques f�sicos. Como m�s Vigor, m�s da�inos ser�n tus ataques de arma.', '#808080');\" onMouseout=\"hideddrivetip()\"><img border=0 src=\"images/h.gif\"></a><b>Vigor</b></td>
			<td><img src=\"images/b1.gif\" width=$us[vigor] height=11> <b>$us[vigor]";?> </td>
			<td> <a href="entok.php?c=vigor" onMouseover=" ddrivetip('Entrenar Vigor', '#808080');" onMouseout="hideddrivetip()"><img border=0 src="images/e.jpg"></a></b></td>
		</tr><?
echo "  <tr>
	 		<td><div align=\"right\"><a href=\"ayuda.php#constitucion\" onMouseover=\" ddrivetip('La Constituci�n representa la forma f�sica del jugador, mide la resistencia a los golpes f�sicos; Como m�s constituci�n menos da�os recibir�s en combate.', '#808080');\" onMouseout=\"hideddrivetip()\"><img border=0 src=\"images/h.gif\"></a> <b>Constituci�n</b></td>
			<td><img src=\"images/b4.gif\" width=$us[constitucion] height=11> <b>$us[constitucion]";?>  </td>
			<td> <a href="entok.php?c=constitucion" onMouseover=" ddrivetip('Entrenar Constitucion', '#808080');" onMouseout="hideddrivetip()"><img border=0 src="images/e.jpg"></a></b></td>
		</tr><?
echo "  <tr>
	 		<td><div align=\"right\"><a href=\"ayuda.php#destreza\" onMouseover=\" ddrivetip('La Destreza mide tu habilidad manual. Como m�s destreza, m�s r�pidos y precisos ser�n tus golpes.', '#808080');\" onMouseout=\"hideddrivetip()\"><img border=0 src=\"images/h.gif\"></a><b>Destreza</b></td>
			<td><img src=\"images/b5.gif\" width=$us[destreza] height=11> <b>$us[destreza]";?> </td>
			<td> <a href="entok.php?c=destreza" onMouseover=" ddrivetip('Entrenar Destreza', '#808080');" onMouseout="hideddrivetip()"><img border=0 src="images/e.jpg"></a></b></td>
		</tr><?
echo "  <tr>
	 		<td><div align=\"right\"><a href=\"ayuda.php#inteligencia\" onMouseover=\" ddrivetip('La Inteligencia mide tu capacidad de Raciocinio. Como m�s Inteligencia, m�s frecuentemente usar�s los poderes de la fuerza y m�s facil te resultar� la Caza.', '#808080');\" onMouseout=\"hideddrivetip()\"><img border=0 src=\"images/h.gif\"></a> <b>Inteligencia</b></td>
			<td><img src=\"images/b6.gif\" width=$us[inteligencia] height=11><b> $us[inteligencia]";?>  </td>
			<td> <a href="entok.php?c=inteligencia" onMouseover=" ddrivetip('Entrenar Inteligencia', '#808080');" onMouseout="hideddrivetip()"><img border=0 src="images/e.jpg"></a></b></td>
		</tr><?
echo "  <tr>
	 		<td><div align=\"right\"><a href=\"ayuda.php#poder\" onMouseover=\" ddrivetip('El Poder de la Fuerza indica la capacidad del usuario de controlar la Fuerza. Como m�s Poder de la Fuerza, m�s da�o causar�s en combate con ataques de fuerza.', '#808080');\" onMouseout=\"hideddrivetip()\"><img border=0 src=\"images/h.gif\"></a><b>Poder de la Fuerza</b></td>
			<td><img src=\"images/b3.gif\" width=$us[poder] height=11> <b>$us[poder]";?>  </td>
			<td> <a href="entok.php?c=poder" onMouseover=" ddrivetip('Entrenar Poder de la Fuerza', '#808080');" onMouseout="hideddrivetip()"><img border=0 src="images/e.jpg"></a></b></td>
		</tr><?
echo "  
</table>
</center><hr>";

echo "<i>Log:</i> <a href=\"log.php?ver=vaciar\"><span title=\"Vaciar Log\"><img border=0 src=\"images/x.gif\"></a><br>";

$c= "SELECT * FROM sw_log WHERE user='$us[nombre]' ORDER BY id DESC";
$result=mysql_query($c)or die(mysql_error());
while ($log = mysql_fetch_array($result)){
	  echo "<a href=\"log.php?ver=ver&tipo=$log[tipo]&ref=$log[ref]\"><img border=0 src=\"images/arr.gif\"></a><b> D�a $log[dia]:</b> $log[log]  <a href=\"log.php?ver=borrar&id=$log[id]\"><span title=\"borrar\"><img border=0 src=\"images/x.gif\"></a><br>";
}

echo "</center>";


include 'footer.php'; ?>