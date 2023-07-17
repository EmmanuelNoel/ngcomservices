<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  
  try{
    $bdd = new PDO('mysql:host=10.30.54.119;dbname=ftpscioes_160827;charset=utf8', 'ftpscioes_160827', '4Africains2020');
}
    catch(Exception $e){
        die('Erreur'.$e->getMessage());
    }

    $supprimer=$bdd->prepare('DELETE FROM stagiaire WHERE id=:id');

    $supprimer->execute(array('id'=>$_GET['val']));

    header('location:list.php');
    
    
    ?>
</body>
</html>