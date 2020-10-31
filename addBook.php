<?php
require "view/template/header.php";
require "view/template/nav.php";
require "model/entity/book.php";
require "model/bookManager.php";


$bookManager = new BookManager();

if(isset($_POST["ajouter"])){
    $book = new Book($_POST);
    $addBook = $bookManager->addBook($book);
    if ($addBook){
        header("location: index.php");
    }
}

require "view/addBookView.php";
require "view/template/footer.php";