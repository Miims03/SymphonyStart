<?php 

class Employé{
    private string $Matricule;
    private string $Nom;
    private string $Prenom;
    private DateTime $DateNaissance;
    private DateTime $DateEmbauche;
    private int $Salaire;

    public function __construct(string $Matricule,string $Nom,string $Prenom,DateTime $DateNaissance,DateTime $DateEmbauche,int $Salaire){
        $this->Matricule = $Matricule;
        $this->Nom = strtoupper($Nom);
        $this->Prenom = ucfirst(strtolower($Prenom));
        $this->DateNaissance = $DateNaissance;
        $this->DateEmbauche = $DateEmbauche;
        $this->Salaire = $Salaire;
    }
    public function get_Matricule(): string{
        return $this->Matricule;
    }
    public function get_Nom(): string{
        return $this->Nom;
    }
    public function get_Prenom(): string{
        return $this->Prenom;
    }
    public function get_DateNaissance(): string{
        return $this->DateNaissance->format('d-m-Y');
    }
    public function get_DateEmbauche(): string{
        return $this->DateEmbauche->format('d-m-Y');
    }
    public function get_Salaire(): int{
        return $this->Salaire;
    }
    public function Age(): int{
        $current = new DateTime();
        $diff = $current->diff($this->DateNaissance);
        return $diff->y;
    }
    public function Anciennete(): int{
        $current = new DateTime();
        $diff = $current->diff($this->DateEmbauche);
        return $diff->y;
    }
    public function AugmentationDuSalaire(): int{
        if($this->Anciennete() < 5){
            return $this->get_Salaire() * 1.02;
        }else if($this->Anciennete() >= 5 && $this->Anciennete() < 10){
            return $this->get_Salaire() * 1.05;
        }else{
            return $this->get_Salaire() * 1.1;
        } 
    }
    public function AfficherEmployé(): string{
        return '- Matricule : ['.$this->get_Matricule().']<br><br>- Nom complet : ['.$this->get_Nom().' '.$this->get_Prenom().']<br><br>- Âge : ['.$this->Age().']<br><br> - Salaire : ['.$this->AugmentationDuSalaire().']';
    }
}
?>