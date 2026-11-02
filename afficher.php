
<?php
include("connexion.php");

$req = $cnx->query("SELECT * FROM exercice");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Liste des exercices</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Liste des exercices</h2>

<a href="index.php">Ajouter un exercice</a>

<table>
    <tr>
        <th>ID</th>
        <th>Titre</th>
        <th>Auteur</th>
        <th>Date de création</th>
        <th>Actions</th>
    </tr>

    <?php
    while ($ligne = $req->fetch(PDO::FETCH_ASSOC)) {
    ?>

    <tr>
        <td><?php echo $ligne['id']; ?></td>
        <td><?php echo $ligne['titre']; ?></td>
        <td><?php echo $ligne['auteur']; ?></td>
        <td><?php echo $ligne['date_creation']; ?></td>

        <td>
            <a href="modif_exe.php?id=<?php echo $ligne['id']; ?>">
                Modifier
            </a>

            <a href="supp_exe.php?id=<?php echo $ligne['id']; ?>"
               onclick="return confirm('Voulez-vous supprimer cet exercice ?')">
                Supprimer
            </a>
        </td>
    </tr>

    <?php } ?>

</table>

</body>
</html>
