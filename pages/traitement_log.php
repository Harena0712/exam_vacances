<?php
    include('../inc/fonction.php');
    
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    $sql = "SELECT * FROM membre WHERE email = '%s' AND mdp = '%s'";
    $sql = sprintf($sql, $email, $mdp);
    $requet = mysqli_query(dbconnect(),$sql);
    $result = mysqli_fetch_assoc($requet);

    if (isset($result)) 
    {
        $_SESSION['nom_connect'] = $nom;
        header('Location: accueil.php');
    }
    else
    {
        header('Location: ../index.php?er=1');
    }
?>