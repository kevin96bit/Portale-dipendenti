<?php
// connessione al database con l'aiuto di costanti (define())

// costante riguardante l'host 
define('HOST','localhost');
// costante riguardante l'username 
define('USERNAME','root');
// costante riguardante la password ( in questo caso è vuota)
define('PASS','');
// costante riguardante il database 
define('DATABASE','azienda_x');

// Il try funge da "if" ma non rompe il sito qualora vi siano problemi
try 
{
    // definisco un oggetto msql riprendendo i nomi delle costanti e lo innesto in una variabile per comodità
    $connessione = new mysqli(HOST,USERNAME,PASS,DATABASE);
    
}
// il catch funge da "else" 
// se c'è un errore cattura l'eccezione in una variabile chiamata proprio $e
catch (mysqli_sql_exception $e)
{
echo $e->getMessage();
}