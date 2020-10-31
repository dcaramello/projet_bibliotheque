<!-- un formulaire qui ajoute un livre en BDD -->
<h2 class="mt-3 d-flex justify-content-center cloisterBlack" style="font-size: xx-large;">Ajouter un nouveau livre</h2>

<form class="container animate__animated animate__zoomInDown pb-0" method="POST">
  <div class="form-group">
    <label>Titre</label>
    <input name="title" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label>Auteur</label>
    <input name="author" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label>Categorie</label>
    <select name="category" class="form-control">
      <option>manga</option>
      <option>comics</option>
      <option>roman</option>
      <option>BD</option>
    </select>
  </div>
  <div class="form-group">
    <label>Date de parution</label>
    <input name="release_date" type="date" class="form-control">
  </div>
  <div class="form-group">
    <label>Synopsis</label>
    <textarea name="synopsis" class="form-control" rows="3"></textarea>
  </div>
  <div class="form-group">
    <button name="ajouter" type="submit" class="btn btn-outline-dark">Ajouter</button>
    <a href="index.php" class="btn btn-primary">Retour</a>
  </div>
</form>