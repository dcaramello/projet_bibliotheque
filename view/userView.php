<div class="mt-3 mb-5 d-flex justify-content-center animate__animated animate__bounceInLeft">
    <?php 
    foreach($users as $user): ?>
        <div class="card" style="width: 18rem;">
            <img src="assets/img/lecteur.jpg" class="card-img-top" alt="book">
            <div class="card-body">
            <h5 class="card-title"><?php echo $user->getFirstname() . " " . $user->getLastname(); ?></h5>
            <p class="card-text">E-mail : <?php echo $user->getEmail(); ?></p>
            <p class="card-text">Ville : <?php echo $user->getCity() . " " . $user->getCity_code(); ?></p>
            <p class="card-text">Sexe :<?php echo $user->getSex(); ?></p>
            <p class="card-text">Numéro :<?php echo $user->getId(); ?></p>
            <p class="card-text">Emprunt en cours :</p>
            <?php foreach ($books as $book): ?>
                <p class="card-text">Titre : <?php echo $book->getTitle(); ?></p>
            <?php endforeach; ?>
            <a href="users.php" class="btn btn-outline-dark">Retour</a>
        </div>
</div>
<?php
endforeach;
?>