<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Inscription</title>
</head>
<body class="container">
    <h1 class="text-center mt-4">Inscription</h1>
    <div class="bg-light col-md-5 rounded mt-4 text-center p-4 log shadow">
        <h4 class="text-center p-3">Site emprunt</h4>
        <form action="traitement_inscription.php" method="post">
            <input type="texte" class="col-md-10 p-1 rounded mt-3 mb-3" name="nom" placeholder="   nom">
            <input type="date" class="col-md-10 p-1 rounded mt-3 mb-3" name="date" placeholder="   date de naissance">
            <input type="texte" class="col-md-10 p-1 rounded mt-3 mb-3" name="genre" placeholder="   genre (M ou F)">
            <input type="texte" class="col-md-10 p-1 rounded mt-3 mb-3" name="email" placeholder="   email">
            <input type="texte" class="col-md-10 p-1 rounded mt-3 mb-3" name="ville" placeholder="   ville d'otigine">
            <input type="password" class="col-md-10 p-1 rounded mt-3 mb-3" name="mdp" placeholder="   mot de passe">
            <input type="submit" class="col-md-7 p-1 rounded mt-3 mb-4" value="S'inscrire">
        </form>
    </div>
</body>
</html>