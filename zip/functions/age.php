<?php 
// fonction qui retourne l'age en fonction d'une date de type DateTime
    function calculateAge(DateTime $date): int{
        $today = new DateTime();
        $difference = $date->diff($today);
        //y signifie year donc il donnera la difference en année
        return $difference->y; 
    }


// Exo7 ------------------------------------------------------------------------------

// try{
    
//     $resultat = $pdo->query('SELECT firstname, date_of_birth,gender from users where gender = "M" ' );
//     foreach($resultat->fetchAll(PDO::FETCH_OBJ) as $req){
//     //ici je transforme la date de naissance reçu en string de la base de données en un objet date de type DateTime
//     $dateDeN = new DateTime($req->date_of_birth); 
//     echo "prénom : ".$req->firstname . "<br>age : ". age($dateDeN) . "<br>sexe : ".$req->gender . "<br><br>";
// }
// }catch (PDOException $e){
//     die('Erreur : '. $e->getMessage()); 
// }




?>