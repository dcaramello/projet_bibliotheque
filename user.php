<?php
// Controleur qui gère l'affichage du détail d'un utilisateur
require "view/template/header.php";
require "view/template/nav.php";
require "model/userManager.php";
require "model/entity/user.php";

$userManager = new UserManager();

$users = $userManager->getUserById($_GET["id"]);

require "view/userView.php";
require "view/template/footer.php";