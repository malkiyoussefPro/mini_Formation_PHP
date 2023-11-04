

<?php include 'nav.php'; ?>
<?php include 'database.php'; ?>
<div class="container my-4">
<?php
/*

 Insert into : on utilise les 2 fonctions prepare() execute()
*/
if (isset($_POST['ajouter'])) {
  $nom = htmlspecialchars($_POST['nom']) ;
  $prenom = htmlspecialchars($_POST['prenom']) ;
  $age = htmlspecialchars($_POST['age']);
 
 if (!empty($nom) && !empty($prenom) && !empty($age)) {
  $q_insert = $pdo -> prepare('INSERT INTO stagiare  values (null,?, ?, ?)');
  $succes = $q_insert -> execute([$nom, $prenom, $age]);
  var_dump($succes);// pour tester si l'ajout a été executer avec succes.
  header('Location: select.php');
  ?>
  <div class="alert alert-success" role="alert">
  Ajout avec succès!!
  </div>
  

  <?php
  echo 'nom: '.$nom.' prénom: '.$prenom . ' age: '.$age;
}else{
  ?>
  <div class="alert alert-danger" role="alert">
  Remplissez tout les champs Svp!!¡¡
  </div>
    <?php
  }
}

?>

<form action="" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Prenom</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="prenom">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Age</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="age">
  </div>
  <button type="submit" value="ajouter utilisateur" class="btn btn-success" name="ajouter" >Ajouter stagiare</button>
</form>
</div>

<?php

require_once ('footer.php');
?>