<?php

// Avvia la sessione
session_start();

// Distruggi la sessione
session_destroy();

// Reindirizza l'utente alla index
header("Location: ../index.php");
exit;

?>