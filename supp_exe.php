
<?php
include("connexion.php");

$id = $_GET['id'];

$req = $cnx->prepare("DELETE FROM exercice WHERE id=?");

$req->execute(array($id));

header("Location: afficher.php");
exit();
?>
