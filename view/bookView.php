<div class="mt-3 mb-2 row justify-content-center animate__animated animate__bounceInLeft">
    <?php 
    foreach($books as $book): ?>
        <div class="card col-4" style="width: 18rem;">
            <img src="assets/img/book.jpg" class="card-img-top m-1" alt="book">
            <div class="card-body">
            <h5 class="card-title">Titre : <?php echo $book->getTitle(); ?></h5>
            <p class="card-text">Auteur : <?php echo $book->getAuthor(); ?></p>
            <p class="card-text">Categorie : <?php echo $book->getCategory(); ?></p>
            <p class="card-text">Date de parution : <?php echo $book->getRelease_date(); ?></p>
            <p class="card-text">Synopsis : <?php echo $book->getSynopsis(); ?></p>
            <a href="index.php" class="btn btn-primary">Retour</a>
        </div>
    <?php   
    endforeach;
    ?>
</div>
<div class="mt-3 col-4 mb-2 row justify-content-end animate__animated animate__bounceInRight">
    <?php
    foreach($users as $user): ?>
        <div class="card" style="width: 18rem; height: 30rem;">
            <img src="assets/img/neutre.png" class="card-img-top" alt="neutre">
            <div class="card-body">   
                <h5 class="card-title">Emprunté par : </h5>
                <h5 class="card-title">Numéro : <?php echo $user->getId(); ?></h5>
                <p class="card-text">Nom : <?php echo $user->getFirstname() . " " . $user->getLastname(); ?></p>
                <button type="button" class="btn btn-outline-dark">Rendre</button>
                <button type="button" class="btn btn-outline-dark">Voir fiche</button>
            </div>
        </div>
<?php
endforeach;
?>
</div>