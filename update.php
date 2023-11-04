<?php
include_once ('database.php');
include_once ('nav.php');



?>
<div class="container">
    <h3 style="margin: 5px ; text-align: center;">Actualiser des données</h3>
<form action="" method="POST">
 
  <div class="mb-3">
    <label for="exampleInputId" class="form-label">Id Stagiare</label>
    <input type="number" class="form-control"  name="id">
  </div>
  
  <button type="submit" value="modifier stagiare" class="btn btn-primary" name="modifier" >Modifier stagiare</button>
</form>
</div>