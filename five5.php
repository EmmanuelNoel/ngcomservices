

<?php
if (!empty($_POST['enregistrer'])) {


  try {
    $bdd = new PDO('mysql:host=10.30.54.119;dbname=ftpscioes_160827;charset=utf8', 'ftpscioes_160827', '4Africains2020');
  } catch (Exception $e) {
    die('Erreur' . $e->getMessage());
  }
  $donnes = $bdd->query('select * from admin');

  $info = $donnes->fetch();


  $nom = $info["nom"];
  $password = $info["motDePasse"];



  $pwd = $_POST['Password'];
  $unm = $_POST['Nom'];



  if ($nom == $unm and $password == $pwd) {
    header('location:espace_admin.php');
  } else {
    header('location:admin.php');
  }
}



?>