<?php

class bookManager{

  private $db;

  public function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=bibliotheque_PHP', 'bibliothequePHP', 'root');
  }

  // Récupère tous les livres
  public function getBooks():?array{
    $query = $this->db->query(
      "SELECT id, title, author, category, user_id
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
      "SELECT id, title, author, synopsis, release_date, category, user_id
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

  // Ajoute un nouveau livre avec transaction sql
  public function addBook(Book $book) {
    try{
      $this->db->beginTransaction();
      $query = $this->db->prepare(
        "INSERT INTO book(title, author, synopsis, release_date, category)
        VALUES(:title, :author, :synopsis, :release_date, :category)"
      );

      $result = $query->execute([
        "title" => htmlspecialchars($book->getTitle()),
        "author" => htmlspecialchars($book->getAuthor()),
        "synopsis" => htmlspecialchars($book->getSynopsis()),
        "release_date" => htmlspecialchars($book->getRelease_date()),
        "category" => htmlspecialchars($book->getCategory())
      ]);

      $this->db->commit();
      return $result;
    }
    catch (\Exception $e){
    $this->db->rollBack();
    }
  }

  // Emprunter un livre avec transaction sql
  public function borrowBook(User $user):bool {
    try{
      $this->db->beginTransaction();
      $query = $this->db->prepare(
        "UPDATE book
        SET user_id = :user_id
        WHERE id = :id"
      );

      $result = $query->execute([
        "user_id" => $user->getId(),
        "id" => $_GET["id"]
      ]);

      $this->db->commit();
      return $result;
    }
    catch (\Exception $e){
      $this->db->rollBack();
    }
  }

  // affiche les infos de l'utilisateur a coté du livre emprunté
  public function getInfoUser($id){
    $query = $this->db->prepare(
      "SELECT u.id, u.lastname, u.firstname, b.user_id, b.id, u.sex
      FROM user AS u
      RIGHT JOIN book AS b
      ON u.id = b.user_id
      WHERE b.id = :id AND u.id = b.user_id"
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

  // rendre un livre avec transaction sql
  public function returnBook():bool{
    try{
      $this->db->beginTransaction();
        $query = $this->db->prepare(
        "UPDATE book
        SET user_id = NULL
        WHERE id = :id"
      );

      $result = $query->execute([
        "id" => $_GET["id"]
      ]);

      $this->db->commit();
      return $result;
    }
    catch (\Exception $e){
      $this->db->rollBack();
    }
  }

  // supprime un livre avec transaction sql
  public function deleteBook(){
    try{
      $this->db->beginTransaction();
      $query = $this->db->prepare(
        "DELETE FROM book
        WHERE id = :id"
      );

      $result = $query->execute([
        "id" => $_GET["id"]
      ]);

      $this->db->commit();
      return $result;
    }
    catch (\Exception $e){
      $this->db->rollBack();
    }
  }

  // tri les livres par categorie
  public function sortBooksByCategory(){
    $query = $this->db->prepare(
      "SELECT id, title, author, category, user_id
      FROM book
      WHERE category = :category" 
    );

    $query->execute([
      "category" => $_POST["category"]
    ]);

    $books = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($books as $key => $book){
      $books[$key] = new Book($book);
    }

    return $books;
  }

}
