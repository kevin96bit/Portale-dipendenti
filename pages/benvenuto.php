
<?php
session_start();

//se perdo la sessione e non riesco più a trovare il nome 
if(isset($_SESSION["nome"])): // i due punti sono come un if = se 
// {
?>
<h1>Benvenuto <?php echo $_SESSION["nome"]?></h1>
<br>
<button><a href="../index.php">Ritorna alla Homepage</a></button>

<!-- altrimenti -->
<?php else: ?> 
    <h1>Non hai i permessi per accedere a questa area</h1>
    <button> <a href="../index.php">Registrati ora</a> </button>
    <?php endif ?>
