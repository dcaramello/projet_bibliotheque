<?php

class bookManager{

  private $db;

  public function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=bibliotheque_PHP', 'bibliothequePHP', 'root');
  }

  // Récupère tous les livres
  public function getBooks():?array{
    $query = $this->db->query(
      "SELECT title, author, category
      FROM book" 
    );
    
    $books = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($books as $key => $book){
      $books[$key] = new Book($book);
    }

    return $books;
  }

  // Récupère un livre
  public function getBook() {

  }

  // Ajoute un nouveau livre
  public function addBook() {

  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus() {

  }

}
