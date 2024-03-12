<?php 
require 'Employé.php';

$dateNaiss = new DateTime('1998-04-03');
$dateEmboche = new DateTime('2015-07-15');

$employé1 = new Employé('1234','chraibi','amine',$dateNaiss,$dateEmboche,2000);

echo $employé1->AfficherEmployé();

?>