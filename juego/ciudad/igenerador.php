<?php

   $cli=sel("sw_clan", "", $ci[clan]);

if ($cli[nombre]!="") {
    if ($_GET[ok]) {
        $cli=sel("sw_clan", "", $ci[clan]);

        $coste = $cli[pago]*$_GET[turnos];

        if ($_GET[turnos]<=0) {
            echo "Turnos Inv&aacute;lidos";
        } else {
            if ($coste>$cli[fondos]) {
                echo 'El clan no puede pagarte esa cantidad';
            } else {
                $us[turnos]-=$_GET[turnos];
                if ($us[turnos]<0) {
                    echo 'Energ&iacute;a insuficiente';
                } else {
                    $us[estres]+=($_GET[turnos]/5)*2;
                    $us[creditos]+=$coste;
                    $cli[fondos]-=$coste;
                    $lad=$_GET[turnos]/10;
                    $us[lado]+=$lad;
                    $us[puntos]+=$_GET[turnos]/10;
                    $mert=$_GET[turnos]/10;
                    $cli[potencia]+=$_GET[turnos];
                    if ($cli[nombre]==$cl[nombre]) {
                        $us[merito]+=$mert;
                    }

                    mysql_query("UPDATE `sw_clan` SET fondos='$cli[fondos]', potencia='$cli[potencia]' WHERE nombre='$cli[nombre]'")or die(mysql_error());
                    mysql_query("UPDATE `sw_users` SET puntos='$us[puntos]', estres='$us[estres]', merito='$us[merito]', lado='$us[lado]', creditos='$us[creditos]', turnos='$us[turnos]' WHERE nombre='$us[nombre]'")or die(mysql_error());


                    echo 'Trabajo completo..';
                    echo "<br><small><font color=\"#caffff\">Has caminado $lad puntos al lado de la Luz.</font></small>";
                }
            }
        }
    } else {
        echo "<small>El clan $cli[nombre] te pagar&aacute; $cli[pago] por cada punto de Energ&iacute;a que est&eacute;s trabajando.<br>El clan ganar&aacute; un W por cada turno que trabajes para ellos</small>";
        echo "<small><br><br>Recuerda que trabajar en el generador aumenta tus puntos hacia el lado de la Luz</small>";
        echo '<form action="ciudad/" method="GET">Gastar <input name="turnos" type="input" value="1">Energ&iacute;a. <input name="id" type="hidden" value="igenerador"><input name="ok" value="Trabajar" type="submit"></form>';
    }
} else {
    echo "Mientras la Ciudad no tenga un clan, no se podr&aacute; trabajar en el generador";
}
?>
