<h2 class="mt-3 d-flex justify-content-center cloisterBlack" style="font-size: xx-large;">Catalogue</h2>

<div class="d-flex justify-content-center">

<form action="index.php" method="POST" class="mt-5 ml-5">
<div class="card" style="width: 10rem;">
  <div class="card-header">
    Trier par :
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><input type="radio" value="manga" name="category">
    <label for="manga">Manga</label></li>
    <li class="list-group-item"><input type="radio" value="roman" name="category">
    <label for="roman">Roman</label></li>
    <li class="list-group-item"><input type="radio" value="comics" name="category">
    <label for="comics">comics</label></li>
    <li class="list-group-item"><input type="radio" value="BD" name="category">
    <label for="BD">BD</label></li>
    <li class="list-group-item"><input type="radio" value="Tout" name="tout">
    <label for="tout">tout afficher</label></li>
  </ul>
  <div>
  <input class="m-3 btn btn-outline-dark" type="submit" value="Trier">
  </div>
</div>
</form>

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

  <!-- Si un tri est demandé -->
<?php 
if(isset($_POST["category"])):
?>
  <tbody>
    <?php foreach($sortBooks AS $sortBook): ?>
    <tr>
      <?php echo "<td>" . $sortBook->getTitle() . "</td>"; ?></td>
      <?php echo "<td>" . $sortBook->getAuthor() . "</td>"; ?></td>
      <?php echo "<td>" . $sortBook->getCategory() . "</td>"; ?></td>
      <?php if($sortBook->getUser_id() !== NULL): ?>
        <td><span class="badge badge-danger">Non disponible</span></td>
      <?php else: ?>
        <td><span class="badge badge-success">Disponible</span></td>
      <?php endif; ?>
      <td><a href="book.php?id=<?php echo $sortBook->getId()?>><button type="button" class="btn btn-outline-dark" name="id">Voir</button></a></td>
      <form action="" method="POST">
      <?php if($sortBook->getUser_id() !== NULL): ?>
        <td><button type="button" class="btn btn-outline-secondary" name="">Supprimer</button></td>
      <?php else: ?>
      <td><a href="index.php?id=<?php echo $sortBook->getId()?>><button type="submit" class="btn btn-outline-danger" name="id">Supprimer</button></a></td>
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

<?php
elseif (empty($_POST) OR $_POST["tout"]):
?>

<!-- si aucun tri n'est saisi affiche tout -->
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
  endif;
    ?>
  </tbody>
  </table>


