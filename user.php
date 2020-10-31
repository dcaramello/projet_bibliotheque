<?php
// Controleur qui gère l'affichage du détail d'un utilisateur
require "view/template/header.php";
require "view/template/nav.php";
require "model/userManager.php";
require "model/entity/user.php";
require "model/entity/book.php";
require "model/bookManager.php";

$userManager = new UserManager();

$users = $userManager->getUserById(htmlspecialchars($_GET["id"]));
$books = $userManager->getBookBorrow(htmlspecialchars($_GET["id"]));

require "view/userView.php";
require "view/template/footer.php";