<?php
require "view/template/header.php";
require "view/template/nav.php";
require "model/entity/book.php";
require "model/bookManager.php";

$bookManager = new BookManager();

$books = $bookManager->getBooks();


require "view/indexView.php";
require "view/template/footer.php";