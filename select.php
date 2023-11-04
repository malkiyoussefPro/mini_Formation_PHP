<?php

require_once ('database.php');//connexion avec la base de donnée
require_once ('nav.php');// appel du navigation barre deja creer.


//Requete
$q_select = $pdo -> query('SELECT * FROM stagiare');

$stagiares = $q_select -> fetchAll(PDO::FETCH_OBJ);
/*
//get values
// il te renvoie la query select est connecté avec la table:
var_dump($q_select);
test selectobject(PDOStatement)#2 (1) { ["queryString"]=> string(22) "SELECT * FROM stagiare" }
// il te renvoie les enregistremets sous forme d'un tableau
echo "<pre>";
print_r($stagiares);
echo "</pre>";
Array
(
    [0] => Array
        (
            [id] => 1
            [nom] => alo
            [prenom] => alo2
            [age] => 25
        )

)
*/
?>
<!-- generer un tableau via Bootstrap-->
<div class="container my-4 d-flex justify-content-end">
  <a href="insert.php"> <input class="btn btn-success btn-sm" type="submit" value="ajouter" name="ajouter"></a>
</div>

<div class="container my-2">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Age</th>
      <th scope="col">Opérations</th>
    </tr>
  </thead>
  <tbody>
    <?php
    /*
    - Ici c'est la 1ere forme pour faire l'affichage des informatios de la table
    stagiare.
    //Requete
$q_select = $pdo -> query('SELECT * FROM stagiare');

$stagiares = $q_select -> fetchAll(PDO::FETCH_ASSOC);
    
        foreach ($stagiares as $stagiare){
        echo "<tr>
                <td> ".$stagiare['id']." </td>
                <td>".$stagiare['nom']."</td>
                <td>".$stagiare['prenom']."</td>
                <td>".$stagiare['age']." </td>
              </tr>";
    }
    - Ici c'est la 2eme forme pour faire l'affichage des informatios de la table
    stagiare.
    //Requete
    $q_select = $pdo -> query('SELECT * FROM stagiare');

    $stagiares = $q_select -> fetchAll(PDO::FETCH_ASSOC);
      foreach ($stagiares as $stagiare){
      ?>
      <tr>
        <td > <?=  $stagiare['id'] ?>  </td>
        <td > <?=  $stagiare['nom'] ?>  </td>
        <td > <?=  $stagiare['prenom'] ?> </td>
        <td > <?=  $stagiare['age'] ?>  </td>
      </tr>
      <?php
      - Ici c'est la 3eme (avec object) forme pour faire l'affichage des informatios de la table
    stagiare.
    //Requete
$q_select = $pdo -> query('SELECT * FROM stagiare');

$stagiares = $q_select -> fetchAll(PDO::FETCH_OBJ);
    foreach ($stagiares as $stagiare){
      ?>
      <tr>
        <td > <?=  $stagiare -> id ?>  </td>
        <td > <?=  $stagiare -> nom ?>  </td>
        <td > <?=  $stagiare -> prenom ?> </td>
        <td > <?=  $stagiare -> age ?> ans  </td>
        <td>
          <form action="" method="post">
            <input class="btn btn-info btn-sm" type="submit" value="inserer" name="inserer">
            <input class="btn btn-danger btn-sm" type="submit" value="modifier" name="modifier">
            <input class="btn btn-primary btn-sm" type="submit" value="supprimer" name="supprimer">
          </form>
        </td>
      </tr>
      <?php
    
    }
    */
   
    foreach ($stagiares as $stagiare){
      ?>
      <tr>
        <td > <?=  $stagiare -> id ?>  </td>
        <td > <?=  $stagiare -> nom ?>  </td>
        <td > <?=  $stagiare -> prenom ?> </td>
        <?php
        $bg_color = '';
        if($stagiare -> age < 30){
          $bg_color = 'bg-success';
        }elseif($stagiare -> age > 50){
          $bg_color = 'bg-warning';
        }else{
          $bg_color = 'bg-danger';
        }

        ?>
        <td >  <span class="badge <?php echo $bg_color ?>  text-dark"><?=  $stagiare -> age ?> ans</span> </td>
        
        <td>
          
          <a href="update.php"> <input class="btn btn-danger btn-sm" type="submit" value="modifier" name="modifier"></a>
            <a href="delete.php"><input class="btn btn-primary btn-sm" type="submit" value="supprimer" name="supprimer"></a>
        </td>
        
      </tr>
      <?php
    
    }
    ?>

  </tbody>
</table>
</div>
<?php

require_once ('footer.php');
?>
