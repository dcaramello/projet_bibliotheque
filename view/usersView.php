<p class="mt-3 d-flex justify-content-center cloisterBlack" style="font-size: xx-large;">Vos utilisateurs</p>

<table class="table table-striped mt-5 mb-5 container">
  <thead>
    <tr>
      <th scope="col">Prénom</th>
      <th scope="col">Nom</th>
      <th scope="col">E-mail</th>
      <th scope="col">Ville</th>
      <th scope="col">Code postal</th>
      <th scope="col">Sexe</th>
      <th scope="col">Détail</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($users as $user): ?>
        <tr>
            <?php echo "<td>" . $user->getFirstname() . "</td>"; ?>
            <?php echo "<td>" . $user->getLastname() . "</td>"; ?>
            <?php echo "<td>" . $user->getEmail() . "</td>"; ?>
            <?php echo "<td>" . $user->getCity() . "</td>"; ?>
            <?php echo "<td>" . $user->getCity_code() . "</td>"; ?>
            <?php if($user->getSex() === "H"): ?>
              <td><img src="assets/img/male.png" class="card-img-top" style="width: 35px;" alt="man"></td>
            <?php else: ?>
              <td><img src="assets/img/female.png" class="card-img-top" style="width: 35px;" alt="female"></td>
            <?php endif; ?>  
            <td><a href="user.php?id=<?php echo $user->getId()?>><button type="button" class="btn btn-outline-dark" name="id">Voir</button></a></td>
    <?php endforeach; ?>
        </tr>    
</tbody>
</table>