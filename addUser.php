<?php

require "view/template/header.php";
require "view/template/nav.php";
require "model/entity/user.php";
require "model/userManager.php";

$userManager = new UserManager();

if(isset($_POST["enregistrer"])){
    $user = new User($_POST);
    $addUser = $userManager->addUser($user);
    if ($addUser){
        header("location: users.php");
    }
}

require "view/addUserView.php";
require "view/template/footer.php";