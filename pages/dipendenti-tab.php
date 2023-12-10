<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- html2pdf -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Dipendenti</title>
</head>
<body>
   
<?php
include_once "../connection/db-connection.php";

// Verifica se c'è un parametro 'order' nell'URL. Se presente, il valore di questo parametro verrà assegnato a $order; 
$order = isset($_GET['order']) ? $_GET['order'] : '';
?>

<div class="container-fluid">
    <table class="table" id="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Cognome</th>
                <th scope="col">Codice Fiscale</th>
                <th scope="col">Email</th>
                <th scope="col">Data di nascita</th>
                <th scope="col">Residenza</th>
            </tr>
        </thead>
        <tbody>
            <?php
            try {
                // Creo una stringa SQL che prende di riferimento tutti i dati della tabella 
                $query = "SELECT * FROM elenco_dipendenti";
                
                // Se la variabile $order è impostata, applico il comando SQL per ordinare i risultati ascendenti ('ASC') o discendenti ('DESC') 
                if ($order) {
                    $query .= " ORDER BY nome " . ($order == 'asc' ? 'ASC' : 'DESC');
                }

                // Esegui la query
                $select = $connessione->query($query);

                if ($select && $select->num_rows > 0) {
                    while ($data = $select->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $data["id"] . "</td>";
                        echo "<td>" . ucwords($data["nome"]) . "</td>";
                        echo "<td>" . ucwords($data["cognome"]) . "</td>";
                        echo "<td>" . $data["codice_fiscale"] . "</td>";
                        echo "<td>" . $data["email"] . "</td>";
                        echo "<td>" . date("d-m-Y", strtotime($data["data_di_nascita"])) . "</td>";
                        echo "<td>" . strtoupper($data["residenza"]) . "</td>";
                        echo "</tr>";
                    }
                }
            } catch (mysqli_sql_exception $e) {
                echo $e->getMessage();
            }
            ?>
        </tbody>
    </table>

    <div class="row">
        <div class="col-3">
            <!-- È IMPORTANTE LA RICHIESTA GET NEL FORM PER POI INSERIRLA NEL CODICE PHP -->
            <form method="get">
                <div class="row">
                    <div class="col">
                        <select class="form-select" aria-label="Default select example" name="order">
                            <option value="" selected>Ordina per</option>
                            <option value="asc">Nome Crescente</option>
                            <option value="desc">Nome Discendente</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="submit" value="Ordina" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Pulsante per scaricare la tabella in PDF -->
    <div class="row mt-3">
        <div class="col text-center">
            <button type="button" class="btn btn-success btn-lg" onclick="downloadPDF()">Scarica PDF</button>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col text-center">
            <a href="../index.php"><button type="button" class="btn btn-primary btn-lg">Torna Indietro</button></a>
        </div>
    </div>
</div>

<script>
function downloadPDF() {
    let element = document.getElementById('table'); // ID della tabella
    html2pdf(element);
}
</script>

</body>
</html>






