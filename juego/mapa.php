<?php
function mapear($dir){
$y=-4;
echo '
<table width=420 border=0 bordercolor="#ffffff" background="images/map/bg.gif">
	   <caption align="TOP">
	   			<center>Planetas</center>
	   </caption>';
echo '<tr>
	 	  <td width="10%"></td>
		  <td width="10%"><center>-4</center></td>
		  <td width="10%"><center>-3</center></td>
		  <td width="10%"><center>-2</center></td>
		  <td width="10%"><center>-1</center></td>
		  <td width="10%"><center>0</center></td>
		  <td width="10%"><center>1</center></td>
		  <td width="10%"><center>2</center></td>
		  <td width="10%"><center>3</center></td>
		  <td width="10%"><center>4</center></td>
	  </tr>';

while($y<=4){
   			   echo "<tr><td width=\"10%\">$y</td>"; 
			   $x=-4;
			   while($x<=4){

						   $c="SELECT * FROM sw_plan WHERE x='$x' AND y='$y'";
						   $result = mysql_query($c)or die(mysql_error());
						   $p = mysql_fetch_array($result);
						   
						   $j=0;
						   		$s = "SELECT * FROM sw_city WHERE planeta='$p[nombre]'";
						   		$q = mysql_query($s)or die(mysql_error());
						   		while ($l = mysql_fetch_array($q)){$j++;}
								
						   $equi=0;
						   $hab=0;
						   $c= "SELECT * FROM `sw_users` WHERE planeta='$p[nombre]'";
						   $result = mysql_query($c)or die(mysql_error());
						   while ($user= mysql_fetch_array($result)){$equi+=$user[lado]; $hab++;}
						   $equi=round($equi);		
								
			   			   if ($p[nombre]==""){echo "<td><src=\"images/map/blank.gif\"></td>";}else{echo "<td><a onMouseover=\" ddrivetip('$p[nombre] ($p[x],$p[y]) <br>Ciudad(es):  <b>$j</b><br>Habitant(es): <b>$hab</b><br>Equilibrio Fuerza: <b>$equi</b>', '#808080');\" onMouseout=\"hideddrivetip()\" href=\"$dir?pl=$p[nombre]&ac=ciudad\"><img border="; if ($p[nombre]==$pl[nombre]){echo '1';}else{echo '0';} echo " src=\"images/map/planeta.gif\"></a></td>";}
			   			   $x++;
			   }
			   $y++;
			   echo '</tr>';
}
echo '</table>';
}

?>