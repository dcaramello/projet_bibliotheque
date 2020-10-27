<p class="mt-3 d-flex justify-content-center">Vous avez cliqué sur :</p>
<div class="mt-3 mb-5 d-flex justify-content-center animate__animated animate__bounceIn">
    <?php 
    foreach($books as $book): ?>
        <div class="card" style="width: 18rem;">
            <img src="assets/img/book.jpg" class="card-img-top" alt="book">
            <div class="card-body">
            <h5 class="card-title"><?php echo $book->getTitle(); ?></h5>
            <p class="card-text"><?php echo $book->getAuthor(); ?></p>
            <p class="card-text"><?php echo $book->getCategory(); ?></p>
            <p class="card-text"><?php echo $book->getRelease_date(); ?></p>
            <p class="card-text"><?php echo $book->getSynopsis(); ?></p>
            <a href="index.php" class="btn btn-primary">Retour</a>
        </div>
</div>
<?php
endforeach;
?>