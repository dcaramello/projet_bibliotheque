<?php

class userManager {

  public function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=bibliotheque_PHP', 'bibliothequePHP', 'root');
  }

  // Récupère tous les utilisateurs
  public function getUsers() {
    $query = $this->db->query(
      "SELECT id, lastname, firstname, email, city, city_code, sex
      FROM user" 
    );
    
    $users = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($users as $key => $user){
      $users[$key] = new User($user);
    }

    return $users;
  }

  // Récupère un utilisateur par son id
  public function getUserById($id) {
    $query = $this->db->prepare(
      "SELECT id, lastname, firstname, email, city, city_code, sex
      FROM user
      WHERE id = :id"
    );

    $query->execute([
      "id" => $id
    ]);

    $users = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($users as $key => $user){
      $users[$key] = new User($user);
    }
    return $users;
  }

  // Récupère un utilisateur par son code personnel
  public function getUser() {

  }
}
