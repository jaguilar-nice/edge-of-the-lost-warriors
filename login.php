<body bgcolor="#000000" text="#FFFFFF" link="#FFFFCC" vlink="#FFFFCC" alink="#FFFF99">


<html>
<head>

	<title>Star Wars - Edges of The Lost Warriors</title>


<SCRIPT LANGUAGE="JavaScript">
<!-- This script generated free online at -->
<!-- Wilson Information http://www.wilsoninfo.com -->

<!-- Begin
function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=200,left = 150,top = 200');");
}
// End -->
</script>
	
	
	
	<style>
BODY {
scrollbar-face-color: #000000;
scrollbar-highlight-color: #666666;
scrollbar-3dlight-color: #000000;
scrollbar-darkshadow-color: #000000;
scrollbar-shadow-color: #000000;
scrollbar-arrow-color: #666666;
scrollbar-track-color: #000000;
}
</STYLE>

	<style>
A {
	color: #FFFFCC;
}
A:hover {
	color: #ffffff;

</style>


<meta http-equiv="Page-Enter" content="revealTrans(Duration=1.0,Transition=23)">
</head>

<!--onLoad="javascript:popUp('http://jagcompany.civitis.com/sw-eotlw/tip/')"-->
<body text="#FFFFFF" bgcolor="#000000" background="juego/images/bg1.gif" link="#FFFFAE" vlink="#FFEFAE">

<small><table width="100%"><tr><td> <font face="Verdana" style="font-size: 8pt">SW-eotlw es una creaci�n de <a href="http://jagcompany.civitis.com">JAGCompany</a></small><br><br></td><td><div align="right">
 <font face="Verdana" style="font-size: 8pt"></div></td></tr></table>
<br>
<div align="center">
  <center>
  <p>&nbsp;</p>
<div align="center">
  <center>
  <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse; border-width: 0" width="661" id="AutoNumber4" height="184">
    <tr>
      <td width="33%" height="184" style="border-style: none; border-width: medium">
<div align="center">
  <center>
  <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse; border-width: 0" bordercolor="#111111" width="661" id="AutoNumber5">
    <tr>
      <td width="661" align="center" style="border-style: none; border-width: medium">
      <img border="0" src="juego/images/edge456.gif" width="661" height="235"><table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse; border-width: 0" width="100%" id="AutoNumber6" height="178" bgcolor="#000000">
        <tr>
          <td width="71" style="border-style: none; border-width: medium" background="juego/images/borde1.jpg" height="176">
          &nbsp;</td>
          <td style="border-style: none; border-width: medium" height="176">&nbsp;<div align="center">
            <center>
            <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse; border-width: 0" width="90%" id="AutoNumber7">
              <tr>
                <td width="90%" align="center" style="border-style: none; border-width: medium">

<?php session_start();
include 'juego/db.php';
include 'juego/header/explicit.php';

if ($_POST[name]=="" || $_POST[pass]==""){echo 'Debe rellenar el nombre y la contrase�a';}else{

	$result = mysql_query("SELECT * FROM `sw_users` WHERE nombre='$_POST[name]'"); 
	$row = mysql_fetch_array($result);

	if ($_POST[name]!=$row[nombre]){echo 'Ese personaje no existe o ha muerto...';}else{
	if ($_POST[pass]!=$row[password]){ echo 'Password incorrecto...';}else{
	   
   			$_SESSION[nombre] = $_POST[name];
			$_SESSION[password] = $_POST[pass];		
		
		if ($row[reg]=="N"){
			 echo 'La cuenta no ha sido confirmada...';
			 session_unset();
		}else{
		
		   if ($row[at]==1){
			 		echo 'Has sido Baneado del juego, �Creias que te podias escapar, turbio?';
				  session_unset();
			 }else{

			 			 echo "<b><center><big>Entrando en la web...</big></center></b><br>Si la web no se carga seguramente es por que tu Explorador no soporta las SESSIONS, prueba a configurarlo debidamente <a href=\"http://Mozilla.org\">(O bajate el Explorador Mozilla Firefox)</a> <META HTTP-EQUIV=\"Refresh\" CONTENT=\"2;URL=juego/\"><br><small>Puedes entrar directamente pulsando <a href=\"juego/\">aqu�</a>.</small>";




}}}}}
;?>

<p>&nbsp;</td>
              </tr>
            </table>
            </center>
          </div>
          </td>
          <td width="71" style="border-style: none; border-width: medium" background="juego/images/borde2.jpg" height="176">
          <img border="0" src="juego/images/borde2.jpg" width="71" height="44"></td>
        </tr>
      </table>
      </td>
    </tr>
  </table>
  </center>
</div>

      <p style="margin-top: 0; margin-bottom: 0">
      <img border="0" src="juego/images/bajo.jpg" width="661" height="69"></td>
    </tr>
  </table>
  </center>
</div>

<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>

</body>

</html>