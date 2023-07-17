<?php
if (!empty($_POST['soumettre'])) {

    try {
        $bdd = new PDO('mysql:host=10.30.54.119;dbname=ftpscioes_160827;charset=utf8', 'ftpscioes_160827', '4Africains2020');
    } catch (Exception $e) {
        die('Erreur' . $e->getMessage());
    }


    if (
        isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['mail']) and isset($_POST['sexe'])
        and isset($_POST['ecole']) and isset($_POST['filiere']) and isset($_POST['debut_stage'])
        and isset($_POST['fin_stage'])
    ) 
    
    {
        $enregistrer = $bdd->prepare('INSERT INTO demandeattestation(nom,prenom,email,sexe,ecole,filiere,debut_stage,fin_stage)
    VALUES (:nom,:prenom,:email,:sexe,:ecole,:filiere,:debut_stage,:fin_stage)');
        $enregistrer->execute(array(
            'nom' => $_POST['nom'], 'prenom' => $_POST['prenom'], 'email' => $_POST['mail'],
            'sexe' => $_POST['sexe'], 'ecole' => $_POST['ecole'], 'filiere' => $_POST['filiere'],
            'debut_stage' => $_POST['debut_stage'], 'fin_stage' => $_POST['fin_stage']
        ));

        header('location:index-c.html');
    }


    /* else
 {

 } */
}
