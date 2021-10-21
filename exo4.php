<?php
/*ecrire un script qui genere 2 points A(x,y) et B(x,y)
le script 
_affiche les 2 points puis 
_determine et affiche la distance qui separe ses 2 points

*/
define("Min", 0);define("Max", 20);
$pointAx=rand(Min,Max);$pointAy=rand(Min,Max);
$pointBx=rand(Min,Max);$pointBy=rand(Min,Max);
echo("Les deux points sont :<br> ");
echo("le point A de coordonnées : (".$pointAx.";".$pointAy.")"."<br>");
echo("le point B de coordonnées : (".$pointBx.";".$pointBy.")"."<br>");

$distance=(sqrt(pow($pointAx-$pointBx, 2)+pow($pointAy-$pointBy, 2)));
echo("La distance entre les deux points est : ".$distance);
?>