<?php
// Controleur qui gère l'affichage du détail d'un livre
require "view/template/header.php";
require "view/template/nav.php";
require "model/bookManager.php";
require "model/userManager.php";
require "model/entity/user.php";
require "model/entity/book.php";

$bookManager = new BookManager();
$userManager = new userManager();

$books = $bookManager->getBook($_GET["id"]);
$users = $bookManager->getInfoUser($_GET["id"]);

$usersObjet = $userManager->getUsers();


if(isset($_POST["emprunter"])){
    $userId = new User($_POST);
    $borrowBook = $bookManager->borrowBook($userId);
    header("location: index.php");
}

if(isset($_POST["rendre"])){
    $returnBook = $bookManager->returnBook();
    header("location: index.php");
}


require "view/bookView.php";
require "view/template/footer.php";