<?php include 'db.php';

include 'explicit.php'; //Cargar Funciones y Variables generales

$handle = opendir('header/var/');
   while (false !== ($file = readdir($handle))) {
       if ($file != "." && $file != "..") {
           include_once "var/$file";
       }
   }
closedir($handle);
