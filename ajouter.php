
<?php
include("connexion.php");

$titre = $_POST['titre'];
$auteur = $_POST['auteur'];
$date_creation = $_POST['date_creation'];

$req = $cnx->prepare(
    "INSERT INTO exercice (titre, auteur, date_creation)
     VALUES (?, ?, ?)"
);

$req->execute(array($titre, $auteur, $date_creation));

header("Location: afficher.php");
?>
