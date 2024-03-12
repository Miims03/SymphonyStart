<?php 

class Eleve{

    private string $fname;
    private string $lname;
    private int $age;
    public float $moyenne;
    public bool $peutPasser;
    public array $note;

    public function calculMoyenne(array $tab): float{
        return array_sum($tab)/sizeof($tab);
    }

    public function passerLAnnee($moyenne){
        if($moyenne < 10 && $moyenne >= 0){
            return false;
        }
        return true;
    }

    public function __construct(string $fname, string $lname, int $age, array $note){
        $this->fname = $fname;
        $this->lname = $lname;
        $this->age = $age;
        $this->note = $note;
        $this->moyenne = $this->calculMoyenne($this->note);
        $this->peutPasser = $this->passerLAnnee($this->moyenne);
    }
    public function __toString(): string{   
        return '<br>
                Fname : '.$this->fname.'<br>
                Lname : '.$this->lname.'<br>
                Age : '.$this->age.'<br>
                Moyenne : '.$this->moyenne." / 20<br>
                Passe l'année : ".($this->peutPasser ? 'Oui' : 'Non')." <br>";
    }
}






?>