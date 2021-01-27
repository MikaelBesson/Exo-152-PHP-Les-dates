<?php

$timestamp = time();
$date = getdate();


/*- Aficher le jour de la semaine sous forme textuelle en utilisant date() dans le script index.php ( lisez bien la doc sur php.net )*/


echo "nous somme le ".$date["weekday"]."<br><br>";

/*- A la suite, afficher en utilisant date(), la date suivante : "2018.12.10" ( celle ci doit apparaitre exactement de cette façon )*/
$Date = new DateTime('2018-12-10');
echo $Date->format('Y.m.d')."<br><br>";

/*- A la suite, afficher en utilisant date(), l'heure suivante : "11:35:07" ( celle ci doit apparaitre exactement de cette façon )*/
$Date1 = new DateTime('11:35:07');
echo $Date1->format('H:i:s')."<br><br>";





