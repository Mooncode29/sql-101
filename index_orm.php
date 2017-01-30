<?php
require 'vendor/autoload.php';
// require_once 'vendor/j4mie/idiorm/idiorm.php';

ORM::configure('mysql:host=localhost;dbname=mon_armoire');
ORM::configure('username', 'root');
ORM::configure('password', 'root');
ORM::configure('return_result_sets', true);

$chaussette = ORM::for_table('mes_chaussettes')->where('couleur', 'bleu')->find_one();
echo $chaussette->id." ".$chaussette->couleur;

$sets = ORM::for_table('mes_chaussettes')->where('couleur', 'rouge')->find_many();
foreach( $sets as $key=>$value){
  echo $value->id."\n";
}

ORM::for_table('mes_chaussettes')->where('couleur', 'rose')->find_result_set()
->set('couleur', 'rouge')
->save();