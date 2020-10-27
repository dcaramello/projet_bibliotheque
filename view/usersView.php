<p class="mt-3 d-flex justify-content-center gotisch">Vos utilisateurs</p>

<table class="table table-striped mt-5 mb-5 container">
  <thead>
    <tr>
      <th scope="col">Prénom</th>
      <th scope="col">Nom</th>
      <th scope="col">E-mail</th>
      <th scope="col">Ville</th>
      <th scope="col">Code postal</th>
      <th scope="col">Sexe</th>
      <th scope="col">Voir</th>
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
            <?php echo "<td>" . $user->getSex() . "</td>"; ?>
            <td><button type="button" class="btn btn-outline-dark">Voir</button></td>
    <?php endforeach; ?>
        </tr>    
</tbody>
</table>