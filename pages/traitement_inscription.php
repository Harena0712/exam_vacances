<?php
    include('../inc/fonction.php');
    
    $nom = $_POST['nom'];
    $date = $_POST['date'];
    $genre = $_POST['genre'];
    $email = $_POST['email'];
    $ville = $_POST['ville'];
    $mdp = $_POST['mdp'];
    
    if (isset($_POST['pdp'])) 
    {
        $pdp = $_POST['pdp'];
    }
    else 
    {
        $pdp = 'NULL';
    }

    $sql = "INSERT INTO membre (nom, date_de_naissance, genre, email, ville, mdp, image_profil) 
            VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s')";
    $sql = sprintf($sql, $nom, $date, $genre, $email, $ville, $mdp, $pdp);
    $requet = mysqli_query(dbconnect(),$sql);

    header('Location: accueil.php');
?>