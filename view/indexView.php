<p class="mt-3 d-flex justify-content-center cloisterBlack" style="font-size: xx-large;">Catalogue</p>


<!-- affiche tous les livres -->
<table class="table table-striped container mt-5 mb-5">
  <thead>
    <tr>
      <th scope="col">Titre</th>
      <th scope="col">Auteur</th>
      <th scope="col">Categorie</th>
      <th scope="col">Etat</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($books AS $book): ?>
    <tr>
      <?php echo "<td>" . $book->getTitle() . "</td>"; ?></td>
      <?php echo "<td>" . $book->getAuthor() . "</td>"; ?></td>
      <?php echo "<td>" . $book->getCategory() . "</td>"; ?></td>
      <?php if($book->getUser_id() !== NULL): ?>
        <td><span class="badge badge-danger">Non disponible</span></td>
      <?php else: ?>
        <td><span class="badge badge-success">Disponible</span></td>
      <?php endif; ?>
      <td><a href="book.php?id=<?php echo $book->getId()?>><button type="button" class="btn btn-outline-dark" name="id">Voir</button></a></td>
      <form action="" method="POST">
      <?php if($book->getUser_id() !== NULL): ?>
        <td><button type="button" class="btn btn-outline-secondary" name="">Supprimer</button></td>
      <?php else: ?>
      <td><a href="index.php?id=<?php echo $book->getId()?>><button type="submit" class="btn btn-outline-danger" name="id">Supprimer</button></a></td>
      </form>
    </tr>
    <?php 
    endif;
    endforeach; 
    if(isset($_GET["id"])):
    ?>
    <div id="blocLayer">
      <div class="layer">
        <form method="POST">
          <p class="d-flex justify-content-center mt-3">Voulez vous supprimer cette référence ?</p>
          <div class="d-flex justify-content-center mb-3">
            <button name="oui" type="submit" class="btn btn-outline-success d-flex justify-content-center mr-4">Oui</button>
            <button name="non" type="submit" class="btn btn-outline-danger d-flex justify-content-center ml-4">Non</button>
          </div>
        </form>
      </div>
    </div>
    <?php
    endif;  
    ?>
  </tbody>
</table>


