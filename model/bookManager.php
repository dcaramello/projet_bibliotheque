<?php

class bookManager{

  private $db;

  public function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=bibliotheque_PHP', 'bibliothequePHP', 'root');
  }

  // Récupère tous les livres
  public function getBooks():?array{
    $query = $this->db->query(
      "SELECT id, title, author, category
      FROM book" 
    );
    
    $books = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($books as $key => $book){
      $books[$key] = new Book($book);
    }

    return $books;
  }

  // Récupère un livre
  public function getBook($id) {
    $query = $this->db->prepare(
      "SELECT id, title, author, synopsis, release_date, category
      FROM book
      WHERE id = :id"
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

  // Ajoute un nouveau livre
  public function addBook(Book $book) {
    $query = $this->db->prepare(
      "INSERT INTO book(title, author, synopsis, release_date, category)
      VALUES(:title, :author, :synopsis, :release_date, :category)"
    );

    $result = $query->execute([
      "title" => $book->getTitle(),
      "author" => $book->getAuthor(),
      "synopsis" => $book->getSynopsis(),
      "release_date" => $book->getRelease_date(),
      "category" => $book->getCategory()
    ]);
    return $result;
  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus() {

  }

  public function getBookAndUser($id){
    $query = $this->db->prepare(
      "SELECT u.id, u.lastname, u.firstname, b.user_id, b.id, u.sex
      FROM user AS u
      INNER JOIN book AS b
      ON b.user_id = u.id
      WHERE b.id = :id"
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

}
