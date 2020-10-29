

<p class="mt-3 d-flex justify-content-center cloisterBlack" style="font-size: xx-large;">Catalogue</p>


<!-- affiche tous les livres -->
<table class="table table-striped container mt-5 mb-5">
  <thead>
    <tr>
      <th scope="col">Titre</th>
      <th scope="col">Auteur</th>
      <th scope="col">Categorie</th>
      <th scope="col">Statut</th>
      <th scope="col">Etat</th>
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
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>


