<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #leftpart {
            border-radius: 20px;

        }


        body {
            background-color: honeydew;
        }

        a {
            text-decoration: none;
            color: white;
        }




        @media (min-width: 1000px),
        screen and (orientation: portrait) {
            .container {
                margin-top: 15%;
                margin-left: 12%;
            }
        }


        @media (max-width: 700px),
        screen and (orientation: portrait) {
            .container {
                margin-top: 5%;
                margin-left: 1%;
            }

            .row {
                width: 80%;
                margin-left: 10%;
            }



        }

        button :hover {
            color: white;
        }




        .fa-check {
            color: green;
        }
    </style>
</head>

<body style=" background-color: #2A7C46 ;">

    <div class="container p-3 item" id="admin">
        <H2 class="text-white">Connexion de l'administrateur</H2>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <img src="media/solaire.jpg" class="card-img-left" alt="" width="100%">

            </div>

            <div class="col-md-6 col-lg-4 mt-3 ">

                <form action="five5.php" method="POST">
                    <div class="form-floating  ">
                        <input type="text" class="username form-control rounded-4 " id="floatingInput"
                            placeholder="name@example.com" name="Nom" required>

                        <label for="floatingInput"> Nom de l'utilisateur </label>
                    </div>

                    <div class="form-floating mt-2">
                        <input type="password" class="pwd form-control rounded-4" id="floatingPassword"
                            placeholder="Mot de passe" name="Password">

                        <label for="floatingPassword">Mot de passe</label>
                    </div>
                    <div class="mt-2">
                        <input class=" btn btn-success text-center" type="submit" value="Connexion" name="enregistrer">
                    </div>
                </form>
            </div>
        </div>
    </div>



</body>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
    crossorigin="anonymous"></script>


</html>