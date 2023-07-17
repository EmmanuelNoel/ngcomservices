<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generer attestation</title>
</head>
<style>
    img {
        float: left;
        width: 100px;
        height: 100px;
        margin-left: 8%;
    }

    p {
        clear: both;

    }

    h5 {

        margin-left: 50%;
    }

    .text {
        font-size: xx-large;
    }

   .bas {
        font-size: x-large;
     margin-left: 100px;
    }

    #lot {

       
        margin-top: 2px;
    }
    #contenu
    {
        margin-left: 7%;
        margin-right: 7%;

    }
</style>

<body>

    <?php

try {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=ngcom;charset=utf8', 'root', '');
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}

$req = $bdd->prepare('SELECT * FROM demandeattestation WHERE id=:id');
$req->execute(array('id' => $_GET['val']));

$donnes = $req->fetch();
$nom = $donnes['nom'];
$prenom = $donnes['prenom'];
$ecole = $donnes['ecole'];
$debut_stage = $donnes['debut_stage'];
$fin_stage = $donnes['fin_stage'];

date_default_timezone_set('Africa/Abidjan');
$currenttime = date('d/m/Y ');
list($ddd, $ttt) = explode(' ', $currenttime);
$dates = '' . $currenttime;

?>


            <img src="LOGO_NGCOMSERVICES.jpg" alt="" >


      <div id="contenu">
      <p id="text">

<h4 id="lot">Lot 783 1, Boulevard du Canada <br> Immeuble KPONDEHOU -Bat 2 <br> Rue 560 Cadjèhou,
    Cotonou (Voie pavée – à côté de la pharmacie St Philomène)<br><u>BENIN</u> N°06 21’53,7’ &nbsp;  E 002°24’05,8’.</h4>

<center><u><strong><p class="text">ATTESTATION DE STAGE</p></strong></u></center> 
<p class="text">Je soussigné <b> Yao GNAGBOLOU</b>, Président de <b> NGCOM SERVICES SAS </b> atteste <br> que 
Mr/Mme <?php echo $nom ?><?php echo $prenom ?>, étudiant(e) en <?php echo $ecole ?> a effectué au sein de notre société un stage académique
du <?php echo $debut_stage; ?> au <?php echo $fin_stage; ?> . <b>NGCom Services </b> intervient depuis 2011 dans le conseil, l’offre de
solutions informatiques, télécoms, énergétiques et toutes autres prestations associées. <br>
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;                     La présente attestation
lui est délivrée pour servir et valoir ce que de droit . </p>
</p>
<h5 class="bas">
Fait à Cotonou le <?php echo $dates; ?>
</h5>
      </div>


</body>

</html>