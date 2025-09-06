<?php
    include('connection.php');

    function cat_objet()
    {
        $sql ="SELECT * FROM categore_objet";
        $requet = mysqli_query(dbconnect(),$sql);
        $result = array();
        while($all_categorie = mysqli_fetch_assoc($requet))
        {
            $result[] = $all_categorie;
        }
        mysqli_free_result($requet);
        return $result;
    }
    
    function all_objet()
    {
        $sql ="SELECT * FROM objet";
        $requet = mysqli_query(dbconnect(),$sql);
        $result = array();
        while($all_objet = mysqli_fetch_assoc($requet))
        {
            $result[] = $all_objet;
        }
        mysqli_free_result($requet);
        return $result;
    }
    
    function emprunt($id_objet)
    {
        $sql ="SELECT * FROM emprunt WHERE id_objet = %s AND date_retour > NOW()";
        $sql = sprintf($sql,$id_objet);
        $requet = mysqli_query(dbconnect(),$sql);
        $result = mysqli_fetch_assoc($requet);
        if (isset($result)) 
        {
            return $result['date_retour'];
        }
        else 
        {
            return 'Non emprunté';
        }
    }
?>