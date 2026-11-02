

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Gestion des exercices</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Ajouter un exercice</h2>

<form action="ajouter.php" method="POST">

    <label>Titre :</label>
    <input type="text" name="titre" required>

    <label>Auteur :</label>
    <input type="text" name="auteur" required>

    <label>Date de création :</label>
    <input type="date" name="date_creation" required>

    <input type="submit" value="Ajouter">

</form>

<a href="afficher.php">Consulter les exercices</a>

</body>
</html>
