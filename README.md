# Portale-dipendenti
Ho creato un finto gestionale dipendenti con l'utilizzo di Html, Css, Bootstrap, Php, MySQL . 
In questo progetto non ho voluto dare importanza alla grafica quanto al lato back-end.
Al suo interno Vi sono : 

- Verifiche per quanto riguarda la data di nascita nel form principale ( almeno anni 18 )
- Manipolazione semplice di struttura html gestita con le verifiche di sessione utente ( if(isset($_SESSION[*]:)
- Verifiche di sessione 
- Connessione a Mysql riguardo al database contenente la tabella con "piccoli" escape di controllo
- Manipolazione DOM riguardo alla pagina Contatti.php ( in base alla selezione compare un div precedentemente nascosto, semplice e diretto )
- Scelta di ordinamento " Dipendenti " in modo ascendente / discendente ( NO AJAX )
- Tasto per un semplice download della tabella in formato PDF ( ho utilizzato html2pdf )
- Tasto per uscire ( distrugge semplicemente la sessione )
- Tabella che stampa grazie ad un ciclo while

DA RICONTROLLARE :
- Tentativo ( da ricontrollare ) di poter mandare un messaggio con allegata la propria mail ( mi sono appoggiato a mailtrap ma mi sfugge qualcosa )
 
