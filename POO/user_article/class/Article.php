<?php 

class Article{

    public string $article_name;
    public string $article_desciption;

    public function __construct($article_name,$article_desciption){
        $this->article_name = $article_name;
        $this->article_desciption = $article_desciption;
    }

}
