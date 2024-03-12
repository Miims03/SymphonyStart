<?php 

require 'class/Article.php';

class User{

    private int $id_user;
    private string $name;
    private int $age;
    private array $article;

    public function construct(string $name,int $age){
        $this->name = $name;
        $this->age = $age;
        $this->article = [];
    }
    // public function getArticleName(): void{
    //     foreach($this->article as $art){
    //         echo $art->article_name.' ';
    //     }
    // }
    public function addArticle(string $a,string $b): void{
        $articlee = new Article($a,$b);
        array_push($this->article,$articlee);
    }
    public function toString(): string{
        return 'Name : '.$this->name.'<br>
                Age : '.$this->age.'<br>
                Articles : ';
    }
}

