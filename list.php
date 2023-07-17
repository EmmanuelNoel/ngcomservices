<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<style>
     body
        {
            background-color: #2A7C46;
    
        }
        table  ,thead , tr
        {
            color: white;
            border: 1px solid white;
            font-size: 12px;
        }

       
    a{
        color: white;
        text-decoration: none;
    }

    a:hover
    {
        text-decoration: none;
        color: white;
    }
    @media only screen and (max-width:700px){
        table,thead,tbody,tr,th,td{
            display:block;
         
        }
        thead{
            display:none;
        }
        td{
            text-align:right;
            position: relative;
            margin-top: -1px; 
        }
        td::before{
            content:attr(data-label);
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
        <div class="container text-center fs-3 fw-bold text-white">
            LISTE DES DEMANDES
        </div>
    </header>
    <?php
    try{
        $bdd = new PDO('mysql:host=10.30.54.119;dbname=ftpscioes_160827;charset=utf8', 'ftpscioes_160827', '4Africains2020');
      }
      catch(Exception $e){
          die('Erreur'.$e->getMessage());
      }
      $donnes=$bdd->query('select * from stagiaire');
    ?>
        <div class="container">
        <table class="table table-bordered border-black"  > 
            <thead >
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Sexe</th>
                    <th scope="col">Ecole</th>
                    <th scope="col">Type de stage</th>
                    <th scope="col">Département</th>
                    <th scope="col">Fichiers</th>
                    <th scope="col">Message</th>
                    <th scope="col">Dates</th>
                    <th colspan="2">Action</th>  
                </tr>
            </thead>
            <?php
            while($aff=$donnes->fetch()){
            ?>
            <tbody class="table-group-divider">
                <tr>
                <td data-label='ID'><?php echo $aff['id'];?></td>
                    <td data-label='Nom'><?php echo $aff['nom'];?></td>
                    <td data-label='Prenom'><?php echo $aff['prenom'];?></td>
                    <td data-label='Adresse'><?php echo $aff['adresse'];?></td>
                    <td data-label='Mail'><?php echo $aff['gmail'];?></td>
                    <td data-label='Contact'><?php echo $aff['contact'];?></td>
                    <td data-label='Sexe'><?php echo $aff['sexe'];?></td>
                    <td data-label='Ecole'><?php echo $aff['ecole'];?></td>
                    <td data-label='type_stage'><?php echo $aff['type_stage'];?></td>
                    <td data-label='Département'><?php echo $aff['departement'];?></td>
                    <td data-label='Fichiers'><?php echo $aff['fichiers'];?></td>
                    <td data-label='Message'><?php echo $aff['message'];?></td>
                    <td data-label='Dates'><?php echo $aff['dates'];?></td>

                    <td data-label>
                    <button class="btn btn-primary"> <a href="accept.php?val=<?php echo $aff['id'];?>">Accepter</a></button>                    </td>
                  <td>
                 <button class="btn btn-danger" id="refuser"><a href="refuser.php?val=<?php echo $aff['id'];?>">Refuser</a></button>

                  </td>
                </tr>
            </tbody>
            <?php
            }
            ?>
        </table>
        </div>
    
</body>

<script type="text/javascript">

var connection = document.getElementById('refuser');
connection.addEventListener('mouseover',agit);
function agit()
{
  alert("Cette action est irréversible");

}
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</html>