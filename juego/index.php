<?php 
include 'header.php';

echo "<center><big><b><big>Bienvenido a <br><font color=\"#ffffbf\"><strong>Star Wars - Edges of The Lost Warriors</strong></font></big></b></big></center>";

echo "<br><br><b>Ultimas noticias:</b><hr>";

$s="SELECT * FROM sw_board_noticias WHERE tipo!='ULTIMA NOTICIA' ORDER BY id DESC";
$q=mysql_query($s)or die(mysql_error());
while ($l=mysql_fetch_array($q)){
echo "<center><big><b>$l[tipo]</b></big></center><br>$l[post] <br><div align=\"right\"><i>$l[poster] <small>($l[id])</small></i></div><hr>";
}










include 'footer.php'; ?>
