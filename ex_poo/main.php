<?php 
// require 'class/1class.php';
// $miims = new Eleve('Amine','Miims',25,[15,15,5]);
// $miims->calculMoyenne($miims->note);
// $miims->passerLAnnee($miims->moyenne);
// echo $miims;


// $vehicule = [
//     $avion1,$avion2,
//     $bateau1,$bateau2
// ];

require 'class/lal.php';
require 'functions/pays.php';

$moto1 = new lal('jap','moto1');
$moto2 = new lal('bxl','moto2');
$moto3 = new lal('bxl','moto3');
$moto4 = new lal('bxl','moto4');

$vehi = [
    $moto1,$moto2,$moto3,$moto4 
];

// if (isset($_POST['pays'])) {
//     $_SESSION['pays'] = $_POST['pays'];
// }
// pays($vehi);
// require 'page/titre.php';
// require 'page/form.php';

// echo $moto1->name;

pays($vehi);

?>



<?php
// function trierTab(array $tab){
//     usort($tab,function($a,$b){
//         return $a->getCapa() <=> $b->getCapa();
//     });

    // if ($a < $b) {
    //     return 1;
    // }else if ($a > $b){
    //     return -1;
    // }else{
    //     0;
    // }
//     foreach ($tab as $elem) {
//         echo 'Nom : '.$elem->getName().'<br>
//               Capa : '.$elem->getCapa();
//     }
// }
// trierTab($vehicule);

?>