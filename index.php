<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portale Dipendenti</title>
  <link rel="stylesheet" href="./assets/style.css">
  <!-- bootstrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container-fluid border sfondo-main bg-primary">

  <div class="row d-flex justify-content-between colore-banner">
    <div class="col-12 border rounded text-center">
      <h1>Gestionale Dipendenti azienda "X" S.p.a.</h1>
    </div>
  </div>
<!--se la sessione nome non è verificata mi mostri il form  -->
<?php if(!isset($_SESSION["nome"])): ?>
  <div class="row  text-center mt-3">
    <div class="col-md-6 mt-4">
      <!-- Form a Sinistra                                                 utilizzo javascript in line NON FUNZIONA -->
      <form method="post" action="./verifiche/verifica-registrazione.php" onsubmit="return validatePasswordSicura()">
        <!-- Nome e Cognome -->
        <div class="row">
          <div class="col-6">
            <input type="text" class="form-control" placeholder="Nome" name="nome">
          </div>
          <div class="col-6">
            <input type="text" class="form-control" placeholder="Cognome" name="cognome">
          </div>
        </div>

        
        <div class="row mt-4">
          <div class="col-12">
            <!-- metto i caratteri in upper case grazie a javascript inline VEDI DOPO IL NAME -->
            <input type="text" class="form-control" placeholder="Codice fiscale" name="codice_fiscale" oninput="this.value = this.value.toUpperCase()">
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-12">
            <input type="email" class="form-control" placeholder="Email" name="email">
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-6">
            <h5 class="bianco">Data di nascita</h5>
            <input type="date" class="form-control" name="data_di_nascita">
          </div>
          <div class="col-6">
            <h5 class="bianco">Residenza</h5>
            <input type="text" class="form-control" placeholder="Residenza" name="residenza">
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-12">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <!-- questo span serve per javascript per la pw sicura -->
            <span id="password-sicura"></span>
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-12">
            <input type="submit" class="form-control  btn-primary" value="Registrati" name="bottone">
          </div>
        </div>
      </form>
    </div>

    <div class="col-md-6 sotto">
      <!-- Immagine a Destra -->
      <img src="./assets/images/dipendenti.png" class="img-fluid rounded" alt="dipendenti">
    </div>
  </div>
<!-- se invece è verificata non includermi il form  -->
<?php elseif(isset($_SESSION["nome"])):?>
  <!-- inserisco video -->
  <div class="container-fluid text-center mt-2" id="video-container">
    <div class="row ">
      <div class="col mx-auto mt-2">
        <div class="embed-responsive embed-responsive-16by9">
          <!-- Inserimento del video con riproduzione automatica -->
          <video class="embed-responsive-item rounded" autoplay loop muted>
            <source src="./assets/videos/istockphoto-1440745839-640_adpp_is.mp4" type="video/mp4">
            Il tuo browser non supporta il tag video.
          </video>
        </div>
      </div>
    </div>
  </div>
  <!--  -->

  <div class="container-fluid mt-2 ">
    <div class="row justify-content-center">
      <div class="col-lg-2 mt-2">
         <a href="./pages/dipendenti-tab.php"><button type="button" class="btn btn-info btn-lg text-white button">Elenco Dipendenti</button></a></a>
      </div>
       <div class="col-lg-1 mt-2">
       <a href="./pages/contatti.php"><button type="button" class="btn btn-info btn-lg text-white button">Contatti</button></a></a>

      </div>
       <div class="col-lg-1 mt-2">
       <a href="./pages/esci.php"><button type="button" class="btn btn-info btn-lg text-white button">Esci</button></a></a>

      </div>
    
    
    </div>


</div>

</div>
<script src="./assets/script/script.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
<?php endif ?>
