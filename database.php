
<?php

$host = 'localhost';
$user = 'root';
$pas = '';
$nom_Bd = 'miniformation';

try {
//$pdo = new PDO ("mysql:host = $host, dbname = $nom_Bd", $user, $pas);
$pdo = new PDO('mysql:host=localhost;dbname=miniformation', 'root', '');
} catch (PDOException $e) {
    
    echo "Erruer: ". $e->getMessage();
    die();

}
/*


*/
?>