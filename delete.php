<?php
include_once ('database.php');
include_once ('nav.php');



?>
<div class="container">
<h3 style="margin: 5px ; text-align: center;">Supprimer des données</h3>
<form action="" method="POST">
 
  <div class="mb-3">
    <label for="exampleInputId" class="form-label">Id stagiare</label>
    <input type="number" class="form-control"  name="id">
  </div>
  <button type="submit" value="Supprimer stagiare" class="btn btn-danger" name="supprimer" >Supprimer stagiare</button>
</form>
</div>