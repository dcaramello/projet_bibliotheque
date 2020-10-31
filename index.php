<?php
require "view/template/header.php";
require "view/template/nav.php";
require "model/entity/book.php";
require "model/bookManager.php";

$bookManager = new BookManager();

$books = $bookManager->getBooks();

if(isset($_POST["oui"])){
    $deletebook = $bookManager->deleteBook($_GET["id"]);
    header("location: index.php");
}
if(isset($_POST["non"])){
    header("location: index.php");
}

if (isset($_POST["category"])){
    $sortBooks = $bookManager->sortBooksByCategory($_POST);
}

require "view/indexView.php";
require "view/template/footer.php";