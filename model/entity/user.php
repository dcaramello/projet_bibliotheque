<?php
// Classe représetant les utilisateurs stockés en base de données
class User {
    protected int $id;
    protected string $lastname;
    protected string $firstname;
    protected string $email;
    protected string $city;
    protected string $city_code;
    protected string $sex;
    
    public CONST SEX = [
        "H",
        "F"
    ];

    public function setId(int $id):self{
        $this->id = $id;
        return $this;
    }
    public function getId(){
        return $this->id;
    }

    public function setLastname(string $lastname):self{
        $this->lastname = $lastname;
        return $this;
    }
    public function getLastname(){
        return $this->lastname;
    }

    public function setFirstname(string $firstname):self{
        $this->firstname = $firstname;
        return $this;
    }

    public function getFirstname(){
        return $this->firstname;
    }

    public function setEmail(string $email):self{
        $this->email = $email;
        return $this;
    }
    public function getEmail(){
        return $this->email;
    }

    public function setCity(string $city):self{
        $this->city = $city;
        return $this;
    }
    public function getCity(){
        return $this->city;
    }

    public function setCity_code(string $city_code):self{
        $this->city_code = $city_code;
        return $this;
    }
    public function getCity_code(){
        return $this->city_code;
    }

    public function setSex(string $sex):self{
        if (in_array($sex, self::SEX)) {
            $this->sex = $sex;
          }
        return $this;
    }
    public function getSex(){
        return $this->sex;
    }

    private function hydrate(array $data) {
        foreach ($data as $key => $value) {
            $method = "set" . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function __construct(array $data) {
        $this->hydrate($data);
    }
}
