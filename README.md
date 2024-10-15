 nome repo: laravel-auth
Ciao ragazzi, creiamo con Laravel il nostro sistema di gestione del nostro Portfolio di progetti. 

Oggi iniziamo un nuovo progetto che si arricchirà nel corso delle prossime lezioni: man mano aggiungeremo funzionalità e vedremo la nostra applicazione crescere ed evolvere. 

Nel pomeriggio, rifate ciò che abbiamo visto insieme stamattina stilando tutto a vostro piacere utilizzando SASS.
Descrizione: Ripercorriamo gli steps fatti a lezione ed iniziamo un nuovo progetto usando laravel breeze ed il pacchetto Laravel 9 Preset con autenticazione.

Iniziamo con il definire il layout, modello, migrazione, controller e rotte necessarie per il sistema portfolio:
Autenticazione: si parte con l'autenticazione e la creazione di un layout per back-office
Creazione del modello Project con relativa migrazione, seeder, controller e rotte
Per la parte di back-office creiamo un resource controller Admin\\ProjectController per gestire tutte le operazioni CRUD dei progetti.
Fate le crud viste a lezione: index, show, create e store
Bonus
Implementiamo la validazione dei dati dei Progetti nelle operazioni CRUD che lo richiedono usando due form requests.


REPO PARTE 2

CRUD mancanti, ovvero edit, update e destroy. Per la destroy è richiesta obbligatoriamente la richiesta di conferma di cancellazione, scegliete voi come farla se con la confirm o con la modale di bootstrap.
Bonus: realizzate la validazione dei campi anche per l'edit
Buon lavoro

PARTE 3 
nome repo: laravel-auth
Ciao ragazzi, continuiamo a lavorare nella repo dei giorni scorsi e aggiungiamo un’immagine ai nostri progetti.
Ricordiamoci di creare il symlink con l’apposito comando artisan e di aggiungere l’attributo enctype="multipart/form-data" ai form di creazione e di modifica!