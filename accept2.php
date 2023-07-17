<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Demande acceptée</title>
</head>

<style>
     body
        {
            background-color: #2A7C46 ;
            color:white
        }

        table , thead , tbody
        {
            color:white
        }
     a{
        color: white;
        text-decoration: none;
    }

    a:hover
    {
        color: white;
    }
    @media only screen and (max-width:700px){
        table,thead,tbody,tr,th,td{
            display:block;
        }
        td{
            padding: left 150px;
            position: relative;
        }
        td::before{
            content:'Hallo!';
            position: absolute;
            top:0;
            left:0;
            width: 130px;
            bottom:0;
        }
        tr{
            margin: bottom 1rem;
        }
    }
</style>

<body>
    <header >
        <div class="container text-center fs-3 fw-bold">
            LISTE DES DEMANDES ACCEPTEES
        </div>
    </header>
    <?php
    try{
        $bdd = new PDO('mysql:host=10.30.54.119;dbname=ftpscioes_160827;charset=utf8', 'ftpscioes_160827', '4Africains2020');
    }
      catch(Exception $e){
          die('Erreur'.$e->getMessage());
      }
     
    ?> 
    <div class="container">
    <?php






    try{
        $bdd= new PDO('mysql:host=localhost;dbname=ngcom','root','');
      }
      catch(Exception $e){
          die('Erreur'.$e->getMessage());
      }






      $donnes=$bdd->query('select * from demandeaccepte');
    ?>
        <div class="container">





        <table class="table table-bordered border-black" style="border: 1px solid white;"> 
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Sexe</th>
                    <th scope="col">Ecole</th>
                    <th scope="col">Département</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>  
                </tr>
            </thead>
            <?php
                  $donnes=$bdd->query('select * from demandeaccepte');

            while($aff=$donnes->fetch()){
            ?>
            <tbody class="table-group-divider">
                <tr>
                <td><?php echo $aff['id'];?></td>
                    <td><?php echo $aff['nom'];?></td>
                    <td><?php echo $aff['prenom'];?></td>
                    <td><?php echo $aff['adresse'];?></td>
                    <td><?php echo $aff['gmail'];?></td>
                    <td><?php echo $aff['contact'];?></td>
                    <td><?php echo $aff['sexe'];?></td>
                    <td><?php echo $aff['ecole'];?></td>
                    <td><?php echo $aff['departement'];?></td>
                    <td><?php echo $aff['dates'];?></td>

                    <td >
                    <button class="btn btn-primary"> <a href="academique2.php?val=<?php echo $aff['id'];?> ">Confirmer</a></button>                    </td>
                  
                </tr>
            </tbody>
            <?php
            }
            ?>
        </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</html>