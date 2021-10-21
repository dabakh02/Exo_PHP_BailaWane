<?php

/*ecrire un script qui genere un jour , une mois, et une année puis verifie si la date genere est valide

nb--->si l'annee est en debut de siecle divisible par 400
nb--->si l'annee n'est pas en debut de siecle divisible par 4

fevrier soit 29 soit 28

*/

define("MOISMIN", 1);
define("MOISMAX", 12);
define("JOURMIN", 1);
define("JOURMAX", 31);
define("ANNEEMIN", 1600);
define("ANNEEMAX", 2099);
$mois=rand(MOISMIN,MOISMAX);
$jour=rand(JOURMIN,JOURMAX);
$annee=rand(ANNEEMIN,ANNEEMAX);

//*Mois de fevrier
if ($mois==2) 
{
	if ($annee%100==0 AND $annee%400==0)
	{
		define(JOURMAX, 29);
	}else
	{
		define(JOURMAX, 28);
	}
}
//autres mois
if ($mois==4 OR $mois==6 OR $mois==9 OR $mois==11)
{
	define(JOURMAX, 30);
}
echo("la date  ".$jour."/".$mois."/".$annee."  générée est valide ");



?>