<form class="container" method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1">Titre</label>
    <input name="title" type="text" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Auteur</label>
    <input name="author" type="text" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Categorie</label>
    <select name="category" class="form-control" id="exampleFormControlSelect1">
      <option>manga</option>
      <option>comics</option>
      <option>roman</option>
      <option>BD</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Date de parution</label>
    <input name="release_date" type="date" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Synopsis</label>
    <textarea name="synopsis" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <button name="ajouter" type="submit" class="btn btn-outline-dark">Ajouter</button>
  </div>
</form>