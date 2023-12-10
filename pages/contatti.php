<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- importante il doppio punto (..) in questo tipo di path -->
    <link rel="stylesheet" href="../assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Form</title>
</head>
<body>

<div class="container-fluid sfondo-contatti bg-primary">

<!-- form di invio dati in una pagina chiamata processa form -->
<form action="../processi/processa_form.php" method="post">
        <div class="row text-left justify-content-center mt-2">
            <div class="col-5">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-white">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="Inserisci qui la tua email" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label text-white">Descrivici brevemente il problema</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="descrizioneProblema" rows="3" required></textarea>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-2">
                <input type="submit" class="form-control btn-info" value="Invia" name="bottone">
            </div>
        </div>
        


</form>

    <div class="row mt-4">
        <div class="col text-center">
            <h1 class="text-white">Prova a vedere se il tuo dubbio è già stato <span class="text-info">visto</span> in precedenza : </h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-4">
            <select class="form-select text-center" id="select-domande" aria-label="Default select example" onchange="showAnswer()">
                <option selected disabled>Domande</option>
                <option value="problemi-cedolino">Problemi visualizzazione cedolino</option>
                <option value="problemi-aggiornamento-pagina">Problemi aggiornamento pagina</option>
                <option value="tempi-di-risposta-email">Tempi di risposta email</option>
            </select>
        </div>
    </div>

    <div class="row justify-content-center mt-3" id="rispostaContainer" style="display:none;">
        <div class="col text-center">
            <!-- problemi cedolino -->
            <div id="problemi-cedolino" class="risposta" style="display:none;">
                <h3 class="text-white">"Per risolvere i problemi di visualizzazione del cedolino, aggiorna la pagina, verifica la connessione internet e prova un browser diverso. Se il problema persiste, contatta il supporto tecnico fornendo dettagli specifici sul dispositivo e browser utilizzati."</h3>
            </div>
            <!-- problemi pagina -->
            <div id="problemi-aggiornamento-pagina" class="risposta" style="display:none;">
                <h3 class="text-white">"Per risolvere i problemi di aggiornamento della pagina, assicurati di avere una connessione internet stabile, svuota la cache del browser e riavvia il dispositivo. Se il problema persiste, prova con un browser diverso o contatta il nostro supporto tecnico fornendo informazioni dettagliate sul dispositivo e sul browser utilizzati."</h3>
            </div>
            <!-- problemi tempi di risposta -->
            <div id="tempi-di-risposta-email" class="risposta" style="display:none;">
                <h3 class="text-white">
"Per garantire tempi di risposta più rapidi alle tue email, assicurati di inviare richieste chiare e concise. Controlla la tua connessione internet e verifica che l'indirizzo email fornito sia corretto. Se il problema persiste, controlla la cartella dello spam e aggiungi il nostro indirizzo email ai contatti sicuri. Inoltre, considera l'utilizzo di un indirizzo email alternativo per una comunicazione più efficiente."</h3>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col text-center">
            <a href="../index.php"><button type="button" class="btn btn-success btn-lg">Torna Indietro</button></a>
        </div>
    </div>
</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script src="../assets/script/script.js"></script>

</body>
</html>
