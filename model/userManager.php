<?php

class userManager {

  public function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=bibliotheque_PHP', 'bibliothequePHP', 'root');
  }

  // Récupère tous les utilisateurs
  public function getUsers() {
    $query = $this->db->query(
      "SELECT lastname, firstname, email, city, city_code, sex
      FROM user" 
    );
    
    $users = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($users as $key => $user){
      $users[$key] = new User($user);
    }

    return $users;
  }

  // Récupère un utilisateur par son id
  public function getUserById() {

  }

  // Récupère un utilisateur par son code personnel
  public function getUser() {

  }
}
