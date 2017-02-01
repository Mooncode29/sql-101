<?php
require 'vendor/autoload.php';
ORM::configure('mysql:host=localhost;dbname=mon_armoire');
ORM::configure('username','root');
ORM::configure('password','root');

$tab = ORM::for_table('mes_chaussettes')->find_many();
// $tab = ORM::for_table('mes_chaussettes')->select('id')->where('couleur','rouge')->find_many();
// $tab = ORM::for_table('mes_chaussettes')->where('couleur','rouge')->find_many();
$tab = ORM::for_table('mes_chaussettes')->select('id')->where_gt('pointure',40)->find_many();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mes données ORM</title>
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
<?php foreach($tab as $value):?>
	<tr>
		<td><?=$value['id'];?></td>
		<td><?=$value['pointure'];?></td>
		<td><?=$value['couleur'];?></td>
		<td><?=$value['temp_lavage'];?></td>
		<td><?=$value['date_lavage'];?></td>
	</tr>
<?php endforeach?>
</table>
</body>
</html>
