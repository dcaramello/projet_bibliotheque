<?php
// Controleur qui gère l'affichage de tous les utilisateurs
require "view/template/header.php";
require "view/template/nav.php";
require "model/entity/user.php";
require "model/userManager.php";

$userManager = new UserManager();

$users = $userManager->getUsers();


require "view/usersView.php";
require "view/template/footer.php";