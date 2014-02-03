<?php function start($timer=1000) {
$data = fopen('session.tmp','r+');
ftruncate($data,0);
$texte = OStalking()."Redemarrage en cours, patientez...<script>window.setTimeout(\"location=('index.php');\",".$timer.");</script>".OSstoptalking();
say($texte); }
?>
