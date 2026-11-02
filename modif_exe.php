
<?php
include("connexion.php");

$id = $_GET['id'];

if (isset($_POST['modifier'])) {

    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $date_creation = $_POST['date_creation'];

    $req = $cnx->prepare(
        "UPDATE exercice
         SET titre=?, auteur=?, date_creation=?
         WHERE id=?"
    );

    $req->execute(array($titre, $auteur, $date_creation, $id));

    header("Location: afficher.php");
    exit();
}

$req = $cnx->prepare("SELECT * FROM exercice WHERE id=?");
$req->execute(array($id));

$ligne = $req->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modifier exercice</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Modifier un exercice</h2>

<form method="POST">

    <label>Titre :</label>
    <input type="text" name="titre"
    value="<?php echo htmlspecialchars($ligne['titre']); ?>" required>

    <label>Auteur :</label>
    <input type="text" name="auteur"
    value="<?php echo htmlspecialchars($ligne['auteur']); ?>" required>

    <label>Date :</label>
    <input type="date" name="date_creation"
    value="<?php echo $ligne['date_creation']; ?>" required>

    <input type="submit" name="modifier" value="Modifier">

</form>

</body>
</html>
