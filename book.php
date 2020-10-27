<?php
// Controleur qui gère l'affichage du détail d'un livre
require "view/template/header.php";
require "view/template/nav.php";
require "model/bookManager.php";
require "model/entity/book.php";

$bookManager = new BookManager();

$books = $bookManager->getBook($_GET["id"]);

require "view/bookView.php";
require "view/template/footer.php";