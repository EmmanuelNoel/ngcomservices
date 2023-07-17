<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>ngcomservices.com</title>

  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="mdb.min.css" />
  <link rel="stylesheet" href="chargement.css">
  <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.min.css">
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/fav.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
  <style>
    .activate {
      color: green;
    }

    .active {
      color: white;
    }

    .cho {
      color: white;
    }

    .tree {
      height: 100px;

    }

    .to {
      height: 20px;
    }

    .bg {
      color: green;
    }

    .desc {
      height: 200px;

    }

    .forme {
      border-bottom: 1px solid black;
      border-top: none;
      border-right: none;
      border-left: none;

    }

    .new {
      color: white;

    }
    #mainNav {
      background-color: #2A7C46;
    }

    #bof {
      color: white;
    }

    @media only screen and (min-width:700px) {
      #image_formulaire {
        margin-top: 30%;
        margin-left: 40%;
      }
    }

    @media only screen and (max-width:700px) {
      #image_formulaire {
        margin-top: 0%;
        margin-left: 0%;
      }

    }

    @media only screen and (max-width:400px) {
      #image_formulaire {
        margin-top: 0%;
        margin-left: 0%;
        width: 100%;
        text-align: center;
      }


    }

    .centre {
      margin: auto;
    }
  </style>
</head>

<body id="page-top">
  <!-- Navigation-->

  <nav class="navbar navbar-expand-md  " id="mainNav" style="background-color:#2A7C46 ;">
    <div class="container-fluid">
      <div class="d-flex">
        <img width="25%" src="LOGO_NGCOMSERVICES.jpg" />
        <span class="text-white  ms-3" style="margin-top: 7%;">
          <h5> NGCom Services SAS </h5>
        </span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>


      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class=" nav-link gx-3  text-white" href="index.html"> <b class=""> Accueil </b></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <b class=> Services </b></a>
            <div class=" dropdown-menu" style="background-color:#2A7C46 ;">

              <a class="text-white dropdown-item fw-bold" href="energie_renouvelables.html">Energies Renouvelables</a>
              <a class="text-white dropdown-item fw-bold" href="reseau_telecom.html">Réseaux et Telécoms</a>
              <a class="text-white dropdown-item fw-bold" href="maintenance.html">Informatique</a>
              <a class="text-white dropdown-item fw-bold" href="controleAudit.html">Contrôle audit des<span id="controle_audit">
                  installations photovoltaïques</span></a>
              <a class="text-white dropdown-item fw-bold" href="formation.html">Formations</a>

          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="produits.html">Produits</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="references.html">Nos références</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="personnel/info.html">Infos</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" href="services.html" role="button" aria-haspopup="true" aria-expanded="false"> <b class=> Nous rejoindre </b></a>
            <div class=" dropdown-menu fw-bold" style="background-color:#2A7C46 ;">
              <a class="text-white dropdown-item fw-bold" href="stagiaire.html">
                Demande stage</a>
              <a class="text-white dropdown-item fw-bold" href="client.php">Client</a>


          </li>

        </ul>
      </div>
    </div>
  </nav>


  <div class="container">
    <div class="row">
      <h2 class="form-title text-center mt-3 ">Retrait d'attestation</h2>
      <div class="col-lg-6 col-12 centre">
        <form method="POST" class="register-form" id="register-form" action="retrait_attestation.php" enctype="multipart/form-data">
          <div class="form-group mt-3">
            <label for="nom"><i class="zmdi zmdi-account material-icons-name"></i></label>
            <input type="text" class="form-control forme" name="nom" placeholder="Nom" style="border-top: none;  border-left: none; border-right: none; border-bottom: 1px solid black; " required />
          </div>
          <div class="form-group mt-3">
            <label for="prenom"><i class="zmdi zmdi-account material-icons-name"></i></label>
            <input type="text" class="form-control forme" name="prenom" id="prenom" placeholder="Prénom" required />
          </div>
          <div class="form-group mt-3">
            <label for="Email"><i class="zmdi zmdi-account material-icons-name"></i></label>
            <input type="text" class="form-control forme" name="mail" placeholder="Email" required />
          </div>
          <div class="form-group mt-5">
            <select name="sexe" class="form-select forme" placeholder="Sexe" style="border-bottom: 1px solid black; border-top: none; border-right: none; border-left: none;" required>
              <option selected>Sexe</option>
              <option value="masculin">Masculin</option>
              <option value="feminin">Féminin</option>

            </select>
          </div>
          <div class="form-group mt-3">
            <label for="tel"><i class="zmdi zmdi-lock-outline"></i></label>
            <input type="tel" class="form-control forme" name="ecole" placeholder="Ecole et année d'étude" required />
          </div>
          <div class="form-group mt-3">
            <label for="tel"><i class="zmdi zmdi-lock-outline"></i></label>
            <input type="tel" class="form-control forme" name="filiere" placeholder="Filière" required />
          </div>

          <div class="form-group mt-3">
            <label for="debut_stage"><i class="zmdi zmdi-lock-outline"></i></label>
            <input type="text" class="form-control forme" name="debut_stage" placeholder="Date de début de stage" required />
          </div>

          <div class="form-group mt-3">
            <label for="fin_stage"><i class="zmdi zmdi-lock-outline"></i></label>
            <input type="text" class="form-control forme" name="fin_stage" placeholder="Date de fin de stage" required />
          </div>
          <br><br>

          <div class="row mb-3 offset-2 gy-2 mt-3">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 "><input type="submit" name="soumettre" value="SOUMMETTRE" style="background-color: #2A7C46; color: white; border-radius: 5px; border-color: #33475f; ">
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12"> <input type="reset" name="effacer" value="SUPPRIMER" style="color: white; background-color:#ff0000;border-radius: 5px;border-color: #ff0000;"></div>

          </div>
        </form>
      </div>
      <!-- <div class="col-lg-6 col-12 ">
        <figure><img src="inscription/images/signup-image.jpg" alt="sing up image" id="image_formulaire"></figure>
      </div> -->
    </div>
  </div>

  <div class="container-fluid" id="mainNav">


<div class="row">
  <!-- Footer Location-->
  <div class="col-lg-3 mb-5 mb-lg-0">

    <center>
      <h6 class="text-uppercase mb-4 cho">Adresse</h6>
      <p class="cho">
        Immeuble KPONDEHOU REP 1061,
        <br />
        Boulevard du Canada Rue 560 <br>
        Cadjèhoun Cotonou
      </p>
    </center>

  </div>
  <!-- Footer Social Icons-->
  <!-- Footer Social Icons-->





  <div class="col-lg-3 mb-5 mb-lg-0">
    <center>
      <h6 class="text-uppercase mb-4 text-white">Contacts</h6>
      <p class="pp"><a href="tel:+229 21 30 82 78" style="text-decoration: none; color:white"><i
            class="fa-solid fa-phone"></i> +229 21 30 82 78</a></p>
      <p class="pp"><a href="tel:+229 21 60 29 82" style="text-decoration: none; color:white"><i
            class="fa-solid fa-phone"></i> +229 21 60 29 82</a></p>
      <p class="pp text-white">Hotline: <a href="tel:+229 64 16 18 16" style="text-decoration: none; color:white"><i
            class="fa-solid fa-phone"></i>
          +229 64 16 18 16</a></p>
    </center>
  </div>
  <!-- Footer About Text-->
  <div class="col-lg-3">
    <center>
      <h6 class="text-uppercase mb-4 text-white">Email</h6>
      <p><a href="mailto:benin@ngcomservices.com" style="text-decoration: none; color:white"><i
            class="fa-solid fa-envelope"></i> benin@ngcomservices.com</a></p>
    </center>
  </div>
  <div class="col-lg-3 mb-5 mb-lg-0">

    <center>
      <h6 class="text-uppercase mb-4 text-white">Sur le web</h6>
      <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
      <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
      <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
      <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-whatsapp"></i></a>
    </center>
  </div>
</div>

</div>
<!-- Copyright Section-->
<div class="copyright py-4 text-center text-white">
<div class="container"><small>Copyright &copy; 2022 Tous droits réservés | NGCom Services SAS </small></div>
</div>



  <!-- Copyright Section-->


  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

  <script src="inscription/vendor/jquery/jquery.min.js"></script>
  <script src="inscription/js/main.js"></script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 


  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
    integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
    data-cf-beacon='{"rayId":"735b2ebeafb503fa","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.6.0","si":100}'
    crossorigin="anonymous"></script>

  <!--Affichage de l'alerte-->
 <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
  <script src="script.js"></script>


</body>

</html>