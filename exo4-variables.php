<?php
/*ecrire un script qui genere 2 points A(x,y) et B(x,y)
le script 
_affiche les 2 points puis 
_deterMINe et affiche la distance qui separe ses 2 points

*/
define("MIN", 0);define("MAX", 20);
$pointAx=rand(MIN,MAX);$pointAy=rand(MIN,MAX);
$pointBx=rand(MIN,MAX);$pointBy=rand(MIN,MAX);
echo("Les deux points sont :<br> ");
echo("le point A de coordonnées : (".$pointAx.";".$pointAy.")"."<br>");
echo("le point B de coordonnées : (".$pointBx.";".$pointBy.")"."<br>");

$distance=(sqrt(pow($pointAx-$pointBx, 2)+pow($pointAy-$pointBy, 2)));
echo("La distance entre les deux points est : ".$distance);
?>