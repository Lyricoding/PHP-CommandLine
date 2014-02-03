<! DOCTYPE html>
<html>
<head>
<title>CommandLine v 0.1.5</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css?cachebreaker=1" type="text/css" />
</head>
<body onload="document.getElementById('id_input').focus()">
<?php

function OStalking(){ //Fonction permetant d'indiquer les messages importants. Il y en a une pour demarrer, et une pour arreter.
$echo = "<span class=\"phpOS\">";
echo $echo;
return $echo;
}
function OSstoptalking(){ 
$echo = "</span>";
echo $echo;
return $echo;
}
function say($texte){ //Permet a un programme d'envoyer du texte.
 echo $texte;
 $file = fopen("session.tmp",'r+');
 while($ligne = fgets($file)) {}
 fputs($file, $texte."<br/>");
 fclose($file);
}

if(isset($_POST['command']))
{
  $data = fopen('session.tmp', 'r+'); //Ouverture du fichier session
  while($ligne = fgets($data)) {echo $ligne;} //Ecriture du contenu
  
  $userprefix = "user@phpOS:~$ ";
  echo $userprefix.$_POST['command'];
  $txt = $userprefix.$_POST['command'].'</br>';
  fputs($data, $txt); // Ecriture de la derniere commande
  fclose($data); //Fermeture

  $words = explode(" ",$_POST['command']); //Analyse de la commande pour voir si une action doit etre faite
  $list = fopen('proglist.txt','r+');
  //Verification de l'existence de la commande dans la liste
  $prog = false;
  while($ligne=fgets($list))
   {
     $ligne = str_replace("\n","",$ligne);

	$demand = explode(" ",$ligne);

	if($demand[0]===$words[0])
	{
          echo "</br>";
          $prog = true;
	  $command = str_replace("\n","",$ligne);
	}
	
   }
  fclose($list);
   
   //Si la commande existe, execution du programme
 if($prog)
 {
	$nbword = count($words);
	include("prog/".$words[0].".php");
        if ($nbword>1) //Systeme peu élégant pour ajouter des arguments. [A revoir]
	{
	 switch ($nbword) {
		case 2:
		 start($words[1]);
		 break;
		case 3:
		 start($words[1],$words[2]);
		 break;
		case 4:
		 start($words[1],$words[2],$words[3]);
		 break;
		case 5:
		 start($words[1],$words[2],$words[3],$words[4]);
	 }
        }
	else{start();}
 }
 else
 {
	echo "</br>";
	$texte = OStalking().$words[0]." : commande introuvable.".OSstoptalking();
	say($texte);
 }
}
else
{
  $data = fopen('session.tmp','r+');
ftruncate($data,0);
$texte = OStalking()."Demarrage d'une nouvelle session...<br/>Preparation des fichiers de sauvegardes...<br/>Pret.".OSstoptalking();
say($texte);
}
?>

<form method="post" action="index.php">
<label for="id_input">user@phpOS:~$ </label>
<input id="id_input" type="text" name="command" autocomplete="off"/>
</form>

</body>
</html>
