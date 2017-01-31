<?php
$bdd = new PDO('mysql:host=localhost;dbname=mon_armoire;charset=utf8','root','root');
// $reponse = $bdd->query('SELECT * FROM mes_chaussettes;');
$req= $bdd->prepare('SELECT * FROM mes_chaussettes WHERE couleur=:couleur');
$req->execute(array('couleur' => $_GET["couleur"]));

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
<?php while($donnees = $req->fetch()):?>
	<tr>
		<td><?=$donnees['id'];?></td>
		<td><?=$donnees['pointure'];?></td>
		<td><?=$donnees['couleur'];?></td>
		<td><?=$donnees['temp_lavage'];?></td>
		<td><?=$donnees['date_lavage'];?></td>
	</tr>
<?php endwhile?>
<?php $req->closeCursor();?>
</table>
</body>
</html>

