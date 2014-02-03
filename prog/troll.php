<?php function start($color="green") {

switch ($color) {
 case "green" :
  $prefix = '<span style="color:green;">';
  break;
 case "red" :
  $prefix = '<span style="color:red;">';
  break;
 case "blue" :
  $prefix = '<span style="color:blue;">';
  break;
 case "yellow" :
  $prefix = '<span style="color:yellow;">';
  break;
 case "white" :
  $prefix = '<span style="color:white;">';
  break;
 default :
  $prefix = '<b style="color:red;">L\'argument envoyé n\'est pas pris en charge !</b><br/><span style="color:green;">';
}

$texte=$prefix."
░░░░░▄▄▄▄▀▀▀▀▀▀▀▀▄▄▄▄▄▄░░░░░░░<br/>
░░░░░█░░░░▒▒▒▒▒▒▒▒▒▒▒▒░░▀▀▄░░░░<br/>
░░░░█░░░▒▒▒▒▒▒░░░░░░░░▒▒▒░░█░░░<br/>
░░░█░░░░░░▄██▀▄▄░░░░░▄▄▄░░░░█░░<br/>
░▄▀▒▄▄▄▒░█▀▀▀▀▄▄█░░░██▄▄█░░░░█░<br/>
█░▒█▒▄░▀▄▄▄▀░░░░░░░░█░░░▒▒▒▒▒░█<br/>
█░▒█░█▀▄▄░░░░░█▀░░░░▀▄░░▄▀▀▀▄▒█<br/>
░█░▀▄░█▄░█▀▄▄░▀░▀▀░▄▄▀░░░░█░░█░<br/>
░░█░░░▀▄▀█▄▄░█▀▀▀▄▄▄▄▀▀█▀██░█░░<br/>
░░░█░░░░██░░▀█▄▄▄█▄▄█▄████░█░░░<br/>
░░░░█░░░░▀▀▄░█░░░█░█▀██████░█░░<br/>
░░░░░▀▄░░░░░▀▀▄▄▄█▄█▄█▄█▄▀░░█░░<br/>
░░░░░░░▀▄▄░▒▒▒▒░░░░░░░░░░▒░░░█░<br/>
░░░░░░░░░░▀▀▄▄░▒▒▒▒▒▒▒▒▒▒░░░░█░<br/>
░░░░░░░░░░░░░░▀▄▄▄▄▄░░░░░░░░█░░
"."</span>";
say($texte); }
?>
