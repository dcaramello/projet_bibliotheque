

<p class="mt-3 d-flex justify-content-center">Catalogue</p>


<!-- affiche tous les livres -->

<table class="table table-striped container mt-5 mb-5">
  <thead>
    <tr>
      <th scope="col">Titre</th>
      <th scope="col">Auteur</th>
      <th scope="col">Categorie</th>
      <th scope="col">Status</th>
      <th scope="col">Voir</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($books AS $book): ?>
    <tr>
      <?php echo "<td>" . $book->getTitle() . "</td>"; ?></td>
      <?php echo "<td>" . $book->getAuthor() . "</td>"; ?></td>
      <?php echo "<td>" . $book->getCategory() . "</td>"; ?></td>
      <td>Status</td>
      <td><button type="button" class="btn btn-outline-dark">Voir</button></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>


