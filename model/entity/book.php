<?php
// Classe représetant les livres stockés en base de données
class Book {
    protected ?int $id;
    protected ?string $title;
    protected ?string $author;
    protected ?string $synopsis;
    protected ?string $release_date;
    protected ?string $category;
    protected ?int $user_id;

    public CONST CATEGORY = [
        "manga",
        "roman",
        "comics"
    ];

    public function setId(int $id = NULL):self{
        if($id){
            $this->id = $id;
        }
        return $this;
    }
    public function getId(){
        return $this->id;
    }

    public function setTitle(string $title):self{
        $this->title = $title;
        return $this;
    }
    public function getTitle(){
        return $this->title;
    }

    public function setAuthor(string $author):self{
        $this->author = $author;
        return $this;
    }
    public function getAuthor(){
        return $this->author;
    }

    public function setSynopsis(string $synopsis):self{
        $this->synopsis = $synopsis;
        return $this;
    }
    public function getSynopsis(){
        return $this->synopsis;
    }

    public function setRelease_date(string $release_date):self{
        $this->release_date = $release_date;
        return $this;
    }
    public function getRelease_date(){
        return $this->release_date;
    }

    public function setCategory(string $category):self{
        $this->category = $category;
        return $this;
    }
    public function getCategory(){
        return $this->category;
    }

    public function setUser_id(int $user_id = NULL):self{
        $this->user_id = $user_id;
        return $this;
    }
    public function getUser_id(){
        return $this->user_id;
    }

    private function hydrate(array $data) {
        foreach ($data as $key => $value) {
            $method = "set" . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
    
    public function __construct(array $data = NULL) {
        if($data){
            $this->hydrate($data);
        }
    }

}
