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

  // affiche les livres empruntés par l'utilisateur
  public function getBookBorrow($id){
    $query = $this->db->prepare(
      "SELECT b.user_id, u.id, b.title
      FROM book AS b
      LEFT JOIN user AS u
      ON b.user_id = u.id
      WHERE u.id = :id"
    );
    $query->execute([
      "id" => $id
    ]);

    $books = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($books as $key => $book){
      $books[$key] = new Book($book);
    }
    return $books;
  }

  // compte le nombre d'utilisateurs enregistré dans la table
  public function getCountUsers(){
    $query = $this->db->query(
      "SELECT COUNT(*)
      FROM user" 
    );
    
    $countUsers = $query->fetch(PDO::FETCH_NUM);
    
    return $countUsers;
  }

  // Ajoute un nouvel utilisateur avec transaction sql
  public function addUser(User $user) {
    try{
      $this->db->beginTransaction();
        $query = $this->db->prepare(
        "INSERT INTO user(lastname, firstname, email, city, city_code, sex)
        VALUES(:lastname, :firstname, :email, :city, :city_code, :sex)"
      );

      $result = $query->execute([
        "lastname" => htmlspecialchars($user->getLastname()),
        "firstname" => htmlspecialchars($user->getFirstname()),
        "email" => htmlspecialchars($user->getEmail()),
        "city" => htmlspecialchars($user->getCity()),
        "city_code" => htmlspecialchars($user->getCity_code()),
        "sex" => htmlspecialchars($user->getSex())
      ]);
      $this->db->commit();  
      return $result;
    }
    catch (\Exception $e){
      $this->db->rollBack();
      }
  }
}
