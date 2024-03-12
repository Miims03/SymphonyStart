<?php
require ("Voiture.php");


//  --------------------------- VERSION CONSTRUCTOR ---------------------------

// $voiture1 = new Voiture('Verte', 600.95, 5000);
// echo "Voiture1 est de couleur : ".$voiture1->obtenirCouleur(). "<br>";
// echo "Voiture1 a un poids de : ".$voiture1->obtenirPoids() . "Kg<br>";
// echo "Voiture1 à un prix de : " . $voiture1->obtenirPrix() . "€<br>";

// echo "<br>";

// $voiture2 = new Voiture('Blanche', 1000, 6500);
// echo "Voiture2 est de couleur : ".$voiture2->obtenirCouleur(). "<br>";
// echo "Voiture2 a un poids de : ".$voiture2->obtenirPoids() . "Kg<br>";
// echo "Voiture2 à un prix de : " . $voiture2->obtenirPrix() . "€<br>";

// echo "<br>";

// if ($voiture1->obtenirPrix() > $voiture2->obtenirPrix() ){
//     echo "La voiture ".$voiture1->obtenirCouleur()." est plus chère que la voiture".$voiture2->obtenirCouleur()." de ".$voiture1->obtenirPrix() - $voiture2->obtenirPrix()." €";
// }
// if ($voiture2->obtenirPrix() > $voiture1->obtenirPrix() ){
//     echo "La voiture ".$voiture2->obtenirCouleur()." est plus chère que la voiture".$voiture1->obtenirCouleur()." de ".$voiture2->obtenirPrix() - $voiture1->obtenirPrix()." €";
// }


//  --------------------------- VERSION CLASS ---------------------------

$voiture1 = new Voiture();

$voiture1->changerCouleur('Verte');
$voiture1->changerPoids(1000);
$voiture1->changerPrix(5000);

echo "Voiture1 est de couleur : ".$voiture1->obtenirCouleur(). "<br>";
echo "Voiture1 a un poids de : ".$voiture1->obtenirPoids() . "Kg<br>";
echo "Voiture1 à un prix de : " . $voiture1->obtenirPrix() . "€<br>";

echo "<br>";

$voiture2 = new Voiture();

$voiture2->changerCouleur('Blanche');
$voiture2->changerPoids(600);
$voiture2->changerPrix(6500);

echo "Voiture2 est de couleur : ".$voiture2->obtenirCouleur(). "<br>";
echo "Voiture2 a un poids de : ".$voiture2->obtenirPoids() . "Kg<br>";
echo "Voiture2 à un prix de : " . $voiture2->obtenirPrix() . "€<br>";

echo "<br>";

if ($voiture1->obtenirPrix() > $voiture2->obtenirPrix() ){
    echo "La voiture ".$voiture1->obtenirCouleur()." est plus chère que la voiture".$voiture2->obtenirCouleur()." de ".$voiture1->obtenirPrix() - $voiture2->obtenirPrix()." €";
}
if ($voiture2->obtenirPrix() > $voiture1->obtenirPrix() ){
    echo "La voiture ".$voiture2->obtenirCouleur()." est plus chère que la voiture".$voiture1->obtenirCouleur()." de ".$voiture2->obtenirPrix() - $voiture1->obtenirPrix()." €";
}