<?php 

// Version Tableau :

$houda = [
    'name' => 'Houda',
    'age' => 30,
    'ville' => 'Bruxelles'
];

echo $houda['age'];

// Version Objet/Class
class Houda{
    public $name = 'Houda';
    public $age = 30;
    public $ville = 'Burxelles';
}

$houda2 = new Houda();

echo $houda2->ville

?>