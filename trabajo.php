<?php include 'header.php';
if ($ci[ayuda] =="S"){
?>
Recuerda que al trabajar tus puntos de lado aumentan hacia el lado de la luz.<br>
<form method="post" action="trabok.php">
<table width="100%" cellspacing="7"><caption ALIGN="TOP"><center><font color="#bbf3f3"><b>Trabajo</b></font></center></caption>
<tr bgcolor="#3f3f3f"><td><b>Trabajo</b></td><td><b>Info</b></td></tr>
<?php if ($us[nv_sable]>=0){?>
<tr><td><input name="tr" type="radio" value="ambulante"> Mercader</td><td><i>Venta de trastos</i></td></tr>
<tr><td><input name="tr" type="radio" value="tendero"> Tendero</td><td><i>Venta productos (Inteligencia)</i></td></tr>
<tr><td><input name="tr" type="radio" value="reponedor"> Reponedor</td><td><i>Reponedor de productos (Vigor)</i></td></tr>
<tr><td><input name="tr" type="radio" value="artesano"> Artesano</td><td><i>Venta de ceramica (Destreza)</i></td></tr>
<tr><td><input name="tr" type="radio" value="portero"> Portero</td><td><i>Vigilancia (Constituci�n)</i></td></tr>
<?php } ?>
</table>
<input type="submit" value="Trabajar">

</form>



<?php
}else{echo 'La ciudad en la que te hayas no dispone de puestos de trabajo...';}

if ($ci[mina]=="S"){echo '<br>- La ciudad dispone de una <a href="mina.php">Mina</a>';}
if ($ci[fabrica]=="S"){echo '<br>- La ciudad dispone de una <a href="fabrica.php">Fabrica</a>';}
if ($ci[bar]=="S"){echo '<br>- La ciudad dispone de un <a href="bar.php">Bar</a>';}
?>


<br><br>No hay m�s trabajos disponibles...

<?php include 'footer.php'?>