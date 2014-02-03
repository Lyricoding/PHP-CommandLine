PHP-CommandLine
===============

PHPCommandLine est une systeme permettant de simuler un terminal de commande (console) en PHP. Il ne s'agit pas d'une console GNU/Linux, mais un systeme permettant de mettre en place rapidement des petits programmes d'administration pour un projet.

Les programmes sont stockés dans le dossier "prog" en nomDuProgramme.php . Ils sont aussi listés dans le fichier proglist.txt .

Le programme consiste en une fonction start() qui peut avoir jusqu'a cinq arguments. Cependant, le systeme d'arguments étant peu pratique, il serait intéréssant de le revoir, et peut-etre de lui donner un format plus proche d'une commande GNU.

Par ailleur, le systeme ne supporte actuellement qu'un seul utilisateur à la fois.
