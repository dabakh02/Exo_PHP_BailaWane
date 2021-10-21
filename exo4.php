
<?php
/*ecrire un script qui genere une annee et un mois puis determine et affiche le nombre de jours de ce mois dans cette annee*/

define("MOISMIN", 1);
define("MOISMAX", 12);
define("ANNEEMIN", 1900);
define("ANNEEMAX", 2099);
$mois=rand(MOISMIN,MOISMAX);
$annee=rand(ANNEEMIN,ANNEEMAX);

if ($mois==4 OR $mois==6 OR $mois==9 OR $mois==11) 
{
	$nbrjour=30;
}elseif ($mois==2)
{
	if ($annee%100==0 AND $annee%400==0)
	{
		$nbrjour= 29;
	}else
	{
		$nbrjour=28;
	}
}else
{
	$nbrjour=31;
}
echo("la date générée est : ".$mois."/".$annee);
echo "<br>";
echo ("le nombre de jour du mois no ".$mois." est ".$nbrjour);


?>