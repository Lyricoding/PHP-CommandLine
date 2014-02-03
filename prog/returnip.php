<?php function start() {
$texte = OStalking()."Votre addresse IP est ".$_SERVER["REMOTE_ADDR"].OSstoptalking();
say($texte);
}?>
