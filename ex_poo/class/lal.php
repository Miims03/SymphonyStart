<?php 
class lal{
    public string $name;
    private string $pays;

    public function __construct($pays,$name){
        $this->pays = $pays;
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function getPays(){
        return $this->pays;
    }
}

?>