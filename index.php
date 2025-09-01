<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>index</title>
</head>
<body class="container">
    <h1 class="text-center mt-4">Login</h1>
    <div class="bg-light col-md-5 rounded mt-4 text-center p-4 log shadow">
        <h4 class="text-center p-3">Site emprunt</h4>
        <form action="pages/traitement_log.php" method="post">
            <input type="texte" class="col-md-10 p-1 rounded" name="email" id="" placeholder="   email">
            <input type="password" class="col-md-10 p-1 rounded mt-4" name="mdp" id="" placeholder="   mot de passe">
            <?php if (isset($_GET['er'])) { ?> 
                <div class="p-3 bg-danger col-md-10 er text-white rounded">Email ou mot de passe incorrect</div>
            <?php } ?>
            <input type="submit" class="col-md-7 p-1 rounded mt-4 mb-4" value="Se connecter">
        </form>
        <hr>
        <a href="pages/inscription.php">S'inscrire</a>
    </div>
</body>
</html>