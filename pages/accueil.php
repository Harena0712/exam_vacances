<?php
    include('../inc/fonction.php');
    $categorie = cat_objet();
    $taille = 0;
    while (isset($categorie[$taille]))
    {
        $taille++;
    }

    $objet = all_objet();
    $count = 0;
    while (isset($objet[$count]))
    {
        $count++;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Accueil</title>
</head>
<body>
    <?php include('header.php');
        for ($i=0; $i < $taille; $i++) { ?>
            <div class="titre_accueil col-md-7 shadow rounded mt-4">
                <h1 class="text-center p-3 text-white"><?php echo $categorie[$i]['nom_categorie'] ?></h1>
            </div>
            <div class="container contait_table_accueil p-5 rounded shadow mb-4">
                <table  class="table table-striped table-hover text-center rounded border mt-4">
                    <thead class="mt-4">
                        <tr>
                            <th class="p-2 ms-4 me-4" style="background-color: #E8EAF6; color: #7986CB">Nom objet</th>
                            <th class="p-2 ms-4 me-4" style="background-color: #E8EAF6; color: #7986CB">Date de retour</th>
                        </tr>
                    </thead>
        
                    <tbody>
                        <?php for ($a=0; $a < $count; $a++) { 
                            if ($objet[$a]['id_categorie'] == $categorie[$i]['id_categorie']) { ?>
                                <tr>
                                    <td class="text-primary p-2 ms-4 me-4"><?php echo $objet[$a]['nom_objet']?> </td>
                                    <?php $emprunté = emprunt($objet[$a]['id_objet'])?>
                                    <td class="p-2 ms-4 me-4"><?php echo $emprunté ?></td>
                                </tr>
                        <?php }
                        } ?>
                    </tbody>
                </table>
            </div>
    <?php } ?>
</body>
</html>