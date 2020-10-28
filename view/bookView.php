<!-- affiche le livre sélectionné -->
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
            <a href="index.php" class="btn btn-outline-dark">Retour</a>
        </div>
    <?php   
    endforeach;
    ?>
</div>

<?php 
if($book->getUser_id() === NULL):
?>
<!-- si le livre est disponible, propose un formulaire d'emprunt -->
<div class="mt-3 col-4 mb-2 row justify-content-end animate__animated animate__bounceInRight">
    <form class="card-body" method="POST">
    <div class="form-group">
        <label for="exampleFormControlInput1">Numéro : </label>
        <input name="id" type="number" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Nom :</label>
        <select name="lastname" class="form-control" id="exampleFormControlSelect1">
            <?php 
            foreach ($usersObjet as $userObjet): 
            ?>
            <option><?php echo $userObjet->getFirstname() . " " . " " . $userObjet->getLastname() . " : " . $userObjet->getId(); ?></option>
            <?php 
            endforeach; 
            ?>
        </select>
    </div>
    <button name="emprunter" type="submit" class="btn btn-outline-dark">Emprunter</button>
    </form>
</div>

<?php
else:
?>
<!-- si le livre n'est pas disponible, présente l'utilisateur qui le possède -->
<div class="mt-3 col-4 mb-2 row justify-content-end animate__animated animate__bounceInRight">
    <?php
    foreach($users as $user): ?>
        <div class="card" style="width: 18rem; height: 30rem;">
        <div class="card-body">
            <?php if($user->getSex() === "H"): ?>
                <img src="assets/img/homme.png" class="card-img-top" alt="neutre">
            <?php else: ?>
                <img src="assets/img/femme.png" class="card-img-top" alt="neutre">
            <?php endif; ?>   
        </div> 
            <div class="card-body">   
                <h5 class="card-title">Emprunté par : </h5>
                <h5 class="card-title">Numéro : <?php echo $user->getId(); ?></h5>
                <p class="card-text">Nom : <?php echo $user->getFirstname() . " " . $user->getLastname(); ?></p>
                <button type="button" class="btn btn-outline-dark">Rendre</button>
            </div>
        </div>
<?php
endforeach;
endif;
?>
</div>