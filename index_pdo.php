<?php
$bdd = new PDO('mysql:host=localhost;dbname=mon_armoire;charset=utf8','root','root');
$reponse = $bdd->query('SELECT * FROM mes_chaussettes;');
// var_dump($reponse);
// var_dump($donnees);
// while($donnees = $reponse->fetch()):
// 	echo $donnees['id']."-".$donnees["couleur"]."\n".$donnees["pointure"]."\n".$donnees["temp_lavage"]."\n".$donnees["description"]."\n".$donnees["date_lavage"];
// endwhile;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mes données</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<table>
	<tr>
		<th>Id</th>
		<th>pointure</th>
		<th>couleur</th>
		<th>temp_lavage</th>
		<th>date_lavage</th>
	</tr>
<?php while($donnees = $reponse->fetch()):?>
	<tr>
		<td><?=$donnees['id'];?></td>
		<td><?=$donnees['pointure'];?></td>
		<td><?=$donnees['couleur'];?></td>
		<td><?=$donnees['temp_lavage'];?></td>
		<td><?=$donnees['date_lavage'];?></td>
	</tr>
<?php endwhile?>
<?php $reponse->closeCursor();?>
</table>
</body>
</html>

