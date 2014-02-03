<?php function start() {
	// Affichage sur le terminal
	$texte = OStalking();
	$data = fopen('proglist.txt', 'r+'); //Ouverture du fichier proglist
    while($ligne = fgets($data)) {$texte = $texte . $ligne . "<br/>";} //Ecriture du contenu
    $nbr = 5;
	$texte = substr($texte, 0, -$nbr); //Pour enlever le dernier <br/> de la chaine
    $texte = $texte . OSstoptalking(); 
	say($texte);
}
