<?php
session_start();

// richiamo la pagina di connessione al database al fine di poterne utilizzare le variabili e metodi
require_once "../connection/db-connection.php";

if (isset($_POST["bottone"])) 
{
    // Data di nascita
    $data_di_nascita = $_POST["data_di_nascita"];
    $data_di_nascita_timestamp = strtotime($data_di_nascita);
    $eta = date("Y") - date("Y", $data_di_nascita_timestamp);

    // Verifica se l'età è inferiore a 18 anni
    if ($eta < 18) {
        echo "Devi avere almeno 18 anni per registrarti.";
        exit; // Esce se l'età è inferiore a 18 anni
    }
    
    
    $nome_utente = $_POST["nome"];
    $cognome_utente = $_POST["cognome"];
    $codice_fiscale = $_POST["codice_fiscale"];
    $email = $_POST["email"];
    $data_di_nascita = $_POST["data_di_nascita"];
    $residenza = $_POST["residenza"];
    $password = $_POST["password"];

    $_SESSION["nome"] = $nome_utente;
    $_SESSION["cognome"] = $cognome_utente;
    $_SESSION["codice_fiscale"] = $codice_fiscale;
    $_SESSION["email"] = $email;
    $_SESSION["data_di_nascita"] = $data_di_nascita;
    $_SESSION["residenza"] = $residenza;
    $_SESSION["password"] = $password;

    // se tutte le sessioni create sono verificate  
    if (
        isset($_SESSION["nome"]) &&
        isset($_SESSION["cognome"]) &&
        isset($_SESSION["codice_fiscale"]) &&
        isset($_SESSION["email"]) &&
        isset($_SESSION["data_di_nascita"]) &&
        isset($_SESSION["residenza"]) &&
        isset($_SESSION["password"])
    ) {
        try {
            // preparo la query dando il comando di inserire nella tabella clienti (specificando le colonne esistenti)
            $inserimento = $connessione->prepare("INSERT INTO elenco_dipendenti(nome,cognome,codice_fiscale,email,data_di_nascita,residenza,password) VALUES(?,?,?,?,?,?,?)");
            // cito tutti i name del posto della verifica dei clienti
            $inserimento->bind_param('sssssss',
                $_POST["nome"],
                $_POST["cognome"],
                $_POST["codice_fiscale"],
                $_POST["email"],
                $_POST["data_di_nascita"],
                $_POST["residenza"],
                $_POST["password"]);

            if ($inserimento->execute()) {
                echo "dati inseriti correttamente";

                // Inserimento avvenuto con successo, ora puoi salvare le sessioni
                $_SESSION["nome"] = $_POST["nome"];
                $_SESSION["cognome"] = $_POST["cognome"];
                $_SESSION["codice_fiscale"] = $_POST["codice_fiscale"];
                $_SESSION["email"] = $_POST["email"];
                $_SESSION["data_di_nascita"] = $_POST["data_di_nascita"];
                $_SESSION["residenza"] = $_POST["residenza"];
                $_SESSION["password"] = $_POST["password"];

                // mandami nella pagina di benvenuto
                header("Location: ../pages/benvenuto.php");
                exit; //termina
            }
        } catch (mysqli_sql_exception $e) {
            // Gestisco l'eccezione 
            echo "Errore" . $e->getMessage();
            echo "Errore SQL: " . $inserimento->error;
        }
    }
}
?>
