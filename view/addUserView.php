<!-- un formulaire qui ajoute un utlisateur en BDD -->
<h2 class="mt-3 d-flex justify-content-center cloisterBlack" style="font-size: xx-large;">Enregistrer un utilisateur</h2>

<form class="container animate__animated animate__zoomInDown" method="POST">
  <div class="form-group">
    <label>Nom</label>
    <input name="lastname" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label>Prénom</label>
    <input name="firstname" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label>E-mail</label>
    <input name="email" type="email" class="form-control">
  </div>
  <div class="form-group">
    <label>Ville</label>
    <input name="city" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label>Code postal</label>
    <input name="city_code" type="number" class="form-control" rows="3">
  </div>
  <div class="form-group">
    <label>Sexe</label>
    <select name="sex" class="form-control">
      <option>H</option>
      <option>F</option>
    </select>
  </div>
  
  <div class="form-group">
    <button name="enregistrer" type="submit" class="btn btn-outline-dark">Enregister</button>
    <a href="users.php" class="btn btn-primary">Retour</a>
  </div>
</form>