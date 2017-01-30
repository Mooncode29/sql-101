<?php


$bdd = new PDO('mysql:host=localhost;dbname=mon_armoire;charset=utf8', 'root', 'root');
$reponse = $bdd->query("SELECT * FROM mes_chaussettes");

while ($donnees = $reponse->fetch())
{
  echo $donnees['id']."\n";
  echo $donnees['couleur']; 
}


$reponse->closeCursor();