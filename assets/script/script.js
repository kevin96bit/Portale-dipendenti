function controllo_eta_Form() 
{
    // grazie al value ottengo la data di nascita
    var dataNascitaInput = document.getElementById('data_di_nascita').value;

    // Calcolo la data attuale grazie all'oggetto new date()  
    var oggi = new Date();

    // Calcolo la data di nascita passandogli come argomento la data inserita dal cliente ( grazie al value=valore )
    var dataNascita = new Date(dataNascitaInput);

    // differenza tra l'anno corrente e l'anno di nascita, ottenendo così l'età.
    var eta = oggi.getFullYear() - dataNascita.getFullYear();

    // Verifico con un semplice if  se l'età è minore di 18 anni e compio delle azioni in base a ciò con dei return
    if (eta < 18) {
      alert('Devi avere almeno 18 anni per registrarti.');
      return false; // sè è minore di 18 anni ritorna falso ed esce l'alert
    }

    return true; // se è maggiore di 18 anni ritorna true e non accade niente
}

// NON FUNZIONA
// ------------------------------

// password con almeno un carattere maiuscolo e un carattere speciale e un numero 
function validatePasswordSicura() {
    // collego l'input e il suo valore messo dal cliente citandolo e mettendo ".value"
    let password = document.getElementById("password").value;
    let passwordSicura = document.getElementById("password-sicura");

    // Verifica la presenza di almeno un carattere maiuscolo, uno speciale e un numero
    let uppercaseRegex = /[A-Z]/;
    let specialCharRegex = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/;
    let numberRegex = /\d/;

    let isUppercasePresent = uppercaseRegex.test(password);
    let isSpecialCharPresent = specialCharRegex.test(password);
    let isNumberPresent = numberRegex.test(password);

    if (!isUppercasePresent || !isSpecialCharPresent || !isNumberPresent) {
      passwordSicura.innerText = "La password deve contenere almeno un carattere maiuscolo, uno speciale e un numero.";
    } else {
      passwordSicura.innerText = "";
    }
  }

  function validatePassword() {
    
    // Restituisci true solo se la password è valida
    return true;
  }
// -------------------------------------------------------
  // risposte dinamiche pagina contatti.php


    function showAnswer() {
        // Nascondo i div delle risposte con un for each concatenato
        document.querySelectorAll('.risposta').forEach(function (div) { // itero ogni elemento in un parametro che ho chiamato "div" ( a caso )
            div.style.display = 'none'; //
        });

        // Ottengo il valore citando l'id del select seguito da .value
        let selectedValue = document.getElementById('select-domande').value;

        // mostro il div cambiando da none a block
        document.getElementById(selectedValue).style.display = 'block';

        // mostro il container delle risposte 
        document.getElementById('rispostaContainer').style.display = 'block';
    }

    // applica una funzione di call-back, in poche parole è una sorta di istruzione 
    // che dici al programma di eseguire quando si verifica un certo evento o condizione.



