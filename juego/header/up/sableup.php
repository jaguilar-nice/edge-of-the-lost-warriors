<?php


#Se sube de nivel cuando:
if ($us[nv_sable]==1 && $us[pk]>=10){#Se ganan 10PKs
	 $us[nv_sable]=2;
	 echo "Has ascendido de Rango!"; 
} 
if ($us[nv_sable]==2 && $us[merito]>=1000){ #Se consigue 1000 de merito
	 $us[vig]+=10; 
	 $us[nv_sable]=3;
	 echo "Has ascendido de Rango!";	 
}
if ($us[nv_sable]==3 && $us[vigor]>99 && $us[inteligencia]>99 && $us[constitucion]>99 && $us[destreza]>99 && $us[poder]>99){ #se entrena todo a 100
	 $us[nv_sable]=4;
	 echo "Has ascendido de Rango!";	 
}

#Cambiar el nivel
mysql_query("UPDATE `sw_users` SET nv_sable='$us[nv_sable]', vigor='$us[vigor]' WHERE nombre='$us[nombre]'")or die(mysql_error());



Switch ($us[nv_sable]){
   case "0":
	 		$titulo="";
			$nivel="Usuario de la Fuerza";
			$nvdesc="USUARIO DE LA FUERZA: Est�s en el nivel m�s b�sico, apenas sabes dominar la fuerza que fluye dentro de t�. Pero no te preocupes, pronto podr�s ingresar de una academia, en la cual podr�s aprender a controlar tu poder y convertirte en un poderoso guerrero. (Mientras seas Usuario no podr�s atacar ni ser atacado por otros jugadores.";
   break;
	 
	 case "1":
	 		if ($us[lado]>=0){
				 $titulo="Padawan";
				 $nivel="Padawan Jedi";
				 $nvdesc="PADAWAN JEDI: Tu camino en la fuerza ha comenzado, est�s en el lado de la luz, pero nada es irreversible, puedes cambiar de bando en cualquier momento, as� que cuida tus actos. Ascender�s de nivel cuando derrotes a 10 enemigos. (Deber�s empezar a buscar un clan.)";
			}else{
				 $titulo="Aprendiz";
				 $nivel="Aprendiz Sith";
				 $nvdesc="APRENDIZ SITH: Tu camino en la fuerza ha comenzado, est�s en el lado Oscuro, pero nada es irreversible, puedes cambiar de bando en cualquier momento, as� que cuida tus actos. Ascender�s de nivel cuando derrotes a 10 enemigos. (Deber�s empezar a buscar un clan.)";
			}
	 break;
	 
	 case "2":
	 			if ($us[sexo]=="H"){
				   	  if ($us[lado]>=0){
								 $titulo="Caballero";
								 $nivel="Caballero Jedi";
								 $nvdesc="CABALLERO JEDI: Tu tiempo ha llegado, has dejado atr�s la Academia para enfrentarte al mundo, sal ah� fuera y demuestrales de que est�s hecho!";
							}else{
								 $titulo="Guerrero";
								 $nivel="Guerrero Sith";
								 $nvdesc="GUERRERO SITH: Tu tiempo a llegado, has dejado atr�s la Academia para enfrentarte al mundo, sal ah� fuera y demuestrales de que est�s echo!";
							}
				 }else{
				 	    if ($us[lado]>=0){
								 $titulo="Caballera";
								 $nivel="Caballera Jedi";
							   $nvdesc="CABALLERA JEDI: Tu tiempo ha llegado, has dejado atr�s la Academia para enfrentarte al mundo, sal ah� fuera y demuestrales de que est�s hecho!";
							}else{
								 $titulo="Guerrera";
								 $nivel="Guerrera Sith";
								 $nvdesc="GUERRERA SITH: Tu tiempo a llegado, has dejado atr�s la Academia para enfrentarte al mundo, sal ah� fuera y demuestrales de que est�s echo!";
							}
				 }

	 break;
	 case "3":
	 			if ($us[sexo]=="H"){
					  if ($us[lado]>=0){
								 $titulo="Maestro";
								 $nivel="Maestro Jedi";
							 	 $nvdesc="MAESTRO JEDI: has alcanzado el auge del camino de la luz, tu deber ahora es ense�arles a todos tu poder.";
						}else{
								 $titulo="Lord";
								 $nivel="Lord Sith";
							 	 $nvdesc="LORD SITH: has alcanzado el auge del Lado Oscuro, tu deber ahora es ense�arles a todos tu poder.";
						}
				}else{
					  if ($us[lado]>=0){
								 $titulo="Maestra";
								 $nivel="Maestra Jedi";						
							 	 $nvdesc="MAESTRA JEDI: has alcanzado el auge del camino de la luz, tu deber ahora es ense�arles a todos tu poder.";
						}else{
								 $titulo="Lady";
								 $nivel="Lady Sith";						
								 $nvdesc="LADY SITH: has alcanzado el auge del Lado Oscuro, tu deber ahora es ense�arles a todos tu poder.";
						}
				}
  break;
	case "4":			
	 			if ($us[sexo]=="H"){
					  if ($us[lado]>=0){
								 $titulo="Gran Maestro";
								 $nivel="Gran Maestro Jedi";
								 $nvdesc="GRAN MAESTRO JEDI: La fuerza, la orden Jedi, los sables y el destino ya no tienen secretos para t�. Aunque la fuerza ense�a que siempre queda algo por aprender, quien sabe...";
						}else{
								 $titulo="Gran Lord";
								 $nivel="Gran Lord Sith";
							 	 $nvdesc="GRAN LORD SITH: La fuerza, las fuerzas sith, los sables y el destino ya no tienen secretos para t�. Aunque la fuerza ense�a que siempre queda algo por aprender, quien sabe...";
						}
				}else{
					  if ($us[lado]>=0){
								 $titulo="Gran Maestra";
								 $nivel="Gran Maestra Jedi";						
							 	 $nvdesc="GRAN MAESTRA JEDI: La fuerza, la orden Jedi, los sables y el destino ya no tienen secretos para t�. Aunque la fuerza ense�a que siempre queda algo por aprender, quien sabe...";
						}else{
								 $titulo="Gran Lady";
								 $nivel="Gran Lady Sith";						
							 	 $nvdesc="GRAN LADY SITH: La fuerza, las fuerzas sith, los sables y el destino ya no tienen secretos para t�. Aunque la fuerza ense�a que siempre queda algo por aprender, quien sabe...";
						}
				}
  break;
}	

#Actualizar Nivel
mysql_query("UPDATE `sw_users` SET nivel='$nivel', titulo='$titulo' WHERE nombre='$us[nombre]'")or die(mysql_error()); 



?>