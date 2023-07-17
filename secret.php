<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.min.css">
</head>

<body>



    <?php



    if (isset($_POST['enregistre'])) {
        try {
            // On se connecte à MySQL
            $bdd = new PDO('mysql:host=10.30.54.119;dbname=ftpscioes_160827;charset=utf8', 'ftpscioes_160827', '4Africains2020');
        } catch (Exception $e) {
            // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : ' . $e->getMessage());
        }



        $re = $bdd->prepare('INSERT INTO stagiaire(nom,prenom,adresse,gmail,contact,sexe,ecole,type_stage,departement,
    fichiers,message,dates)
VALUES (:nom,:prenom,:adresse,:gmail,:contact,:sexe,:ecole,:type_stage,:departement,:fichiers,:message,:dates)');


        foreach ($_FILES as $file) {
            if ($file['error'] == UPLOAD_ERR_NO_FILE) {
                continue;
            }
            /*  var_dump($_FILES);
    var_dump($file['tmp_name'].'==>'.$file['name']); */
            $cheminDestination = 'file/' . $file['name'];
            $cheminTemporaire = $file['tmp_name'];

            $fichier = 'file/' . $file['name'];
            move_uploaded_file($cheminTemporaire, $cheminDestination);
        }


        date_default_timezone_set('Africa/Abidjan');
        $currenttime = date('d-m-Y H:i:s');
        list($ddd, $ttt) = explode(' ', $currenttime);
        $dates = '' . $currenttime;
        echo $dates;
        $re->execute(array(
            'nom' => htmlspecialchars($_POST['nom']), 'prenom' => htmlspecialchars($_POST['prenom']),
            'adresse' => htmlspecialchars($_POST['adresse']), 'gmail' => htmlspecialchars($_POST['gmail']),
            'contact' => htmlspecialchars($_POST['contact']), 'sexe' => htmlspecialchars($_POST['sexe']),
            'ecole' => htmlspecialchars($_POST['ecole']), 'type_stage'=> htmlspecialchars($_POST['type_stage']),
            'departement' => htmlspecialchars($_POST['departement']),'fichiers' => htmlspecialchars($fichier),
            'message' => htmlspecialchars($_POST['message']), 'dates' => $dates
        ));


        ?>


        <?php


        header('location:stagiaire.html');
    }
    ?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>

</html>