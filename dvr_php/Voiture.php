<?php
class Voiture{
    private string $couleur;
    private float $poids;
    private int $prix;

    // //  --------------------------- CONSTRUCTOR ---------------------------

    // function __construct($couleur,$poids,$prix){
    //     $this->couleur = $couleur;
    //     $this->poids = $poids;
    //     $this->prix = $prix;
    // }

    //  --------------------------- METHODES ---------------------------
    public function obtenirCouleur(): string{
        return $this->couleur;
    } 
    public function obtenirPoids(): float{
        return $this->poids;
    } 
    public function obtenirPrix(): int{
        return $this->prix;
    }
    public function augmenterPrix(int $augmentationPrix): void{
         $this->prix = $this->prix + $augmentationPrix;
    } 
    public function changerCouleur(string $nouvelleCouleur): void{
        $this->couleur = $nouvelleCouleur;
    }
    public function changerPoids(float $nouveauPoids): void{
        $this->poids = $nouveauPoids;
    }
    public function changerPrix(int $nouveauPrix): void{
        $this->prix = $nouveauPrix;

      
}
}