<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <head class="mb-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
            <div class="container-fluid">
                <img src="../assets/bootstrap-icons/icons/houses.svg" class="ms-4" width="3%" height="3%">
                <a class="navbar-brand ms-2" href="#">Emprunt</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav ms-auto me-5">
                        <li class="nav-item">
                            <p class="nav-link me-4 nav_case_profil text-center">
                                <img src="../assets/bootstrap-icons/icons/person-circle.svg" class="me-2 ms-2" width="35%" height="35%">
                                <?php echo $_SESSION['nom_connect']?>
                            </p>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav_case me-4 mt-3" href="../index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav_case me-4 mt-3" href="bare_recherche.php">Recherche</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav_case me-4 mt-3" href="info_plus.php">Inormation sur l'emploie</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </head>

    <srcipt src="bootdtrap/js/bootstrap.bundle.min.js"> </srcipt>
</body>
</html>