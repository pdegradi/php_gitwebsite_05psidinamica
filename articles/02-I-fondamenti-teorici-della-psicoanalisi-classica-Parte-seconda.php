<?php
define('FRAMEWORK_ENTRY', true);
require __DIR__ . '/../includes/config.php';

[
    'title'          => $article_title,
    'date'           => $article_date,
    'featured_image' => $featured_image
] = get_current_article_data($articles);

ob_start();
?>

<p>La teoria freudiana ha subito nel tempo significative trasformazioni. È utile sintetizzare i principali cambiamenti:</p>

<ul>
    <li><strong>Dalla teoria del trauma alla teoria delle pulsioni</strong>: inizialmente Freud condivideva 
    con la psichiatria dinamica francese l’idea che la causa delle psiconevrosi fosse un trauma reale 
    a carattere sessuale. Con la teoria della sessualità infantile, la causa dei sintomi diventa 
    invece la mancata risoluzione dei conflitti pulsionali — sessuali e 
    aggressivi — della prima infanzia;</li>
    <li><strong>Dal modello topico al modello strutturale</strong>: nel primo modello, rimozione 
    e resistenza erano concepite come processi consci. Nel secondo modello (modello strutturale), 
    Freud riconosce che anche le difese sono inconsce e adattive. L’<strong>Io</strong> diventa la struttura psichica 
    deputata a proteggere dall’angoscia e a contenere le difese;</li>
    <li><strong>Dalla psicopatologia alla normalità</strong>: Freud arriva a sostenere una continuità 
    tra normalità e psicopatologia. Inconscio, resistenze e difese non sono esclusivi dei 
    pazienti nevrotici, ma processi comuni a tutti gli esseri umani.</li>
</ul>


<h2>Causa dei sintomi: pulsioni sessuali derivate da conflitti non risolti nell’età infantile</h2>

<p>Lo sviluppo della pulsione sessuale procede attraverso le fasi orale, anale, fallica, 
    di latenza e genitale, ognuna caratterizzata da un conflitto da superare. 
    Questo sviluppo può essere ostacolato da arresti chiamati <strong>fissazioni</strong>, che bloccano parte della 
    libido in una fase, privando quella successiva dell’energia necessaria per essere attraversata.</p>

<img XXclass="zoomable" src="/assets/images/02/01.webp" />

<p>Le fissazioni non sono di per sé patologiche: possono influenzare il carattere di una 
    persona senza necessariamente causare una nevrosi. Ad esempio, una fissazione nella 
    fase anale — in cui il bambino impara il controllo degli sfinteri — può produrre 
    personalità eccessivamente ordinate e rigide, oppure al contrario disorganizzate e 
    disordinate, senza che questo costituisca una psicopatologia.</p>

<p>La fissazione diventa associata a una nevrosi solo quando si vive un <strong>conflitto interno</strong>.</p>

<p>Per Freud, il conflitto interno si genera perché i desideri sessuali infantili rimossi, 
    continuano a fare pressione per emergere alla coscienza — insieme al carico affettivo 
    che li accompagna (affetto incapsulato). Questa pressione viene rilevata dal sistema conscio 
    attraverso un segnale chiamato <strong>angoscia segnale</strong>, che porta a rafforzare le 
    difese, riattivando la rimozione.</p>

<p>Il problema, però, non è tanto l’esistenza di questo conflitto, quanto il suo <strong>fallimento</strong>: 
    il sistema conscio non riesce a trattenere tutto l’affetto incapsulato, che alla fine emerge 
    alla coscienza in forma camuffata — ad esempio sotto forma di sintomi nevrotici.</p>

<p>Inoltre c’è da considerare l’<strong>atemporalità dell’inconscio</strong>: per l’inconscio i 
desideri infantili non “invecchiano”. Anche da adulto, un desiderio rimasto irrisolto 
continua ad avere la stessa forza di quando è nato</p>

<img XXclass="zoomable" src="/assets/images/02/02.webp" />

<p>In sintesi il conflitto interno si sviluppa nelle seguenti fasi:</p>

<ol>
    <li>I desideri sessuali infantili perturbanti vengono rimossi;</li>
    <li>Continuano a fare pressione per emergere alla coscienza;</li>
    <li>Il sistema conscio rileva questa pressione attraverso l’angoscia segnale e rafforza le difese;</li>
    <li>La rimozione si riattiva per limitare la potenza dell’angoscia;</li>
    <li>La rimozione fallisce: il sistema conscio non riesce a trattenere tutto l’affetto incapsulato;</li>
    <li>L’affetto emerge alla coscienza in forma camuffata, dando origine ai sintomi nevrotici.</li>
</ol>

<h2>Rimozione come processo adattivo e inconscio</h2>

<p>Freud riconosce che la rimozione è un processo <strong>inconscio e adattivo</strong>: l’individuo non è 
    consapevole di inviare il materiale psichico nell’inconscio, né di applicare una continua 
    resistenza per tenerlo lontano dalla coscienza. Affinché questo meccanismo funzioni, 
    anche le difese devono essere inconsce.</p>

<p>La rimozione è adattiva perché, quando riesce a mantenere il contenuto psichico e l’affetto 
    ad esso associato lontani dalla coscienza senza conseguenze, l’individuo raggiunge un 
    equilibrio e il suo funzionamento rimane sano. È invece il <strong>fallimento della rimozione</strong> a 
    essere associato alla psicopatologia: quando l’affetto incapsulato riesce a fuoriuscire 
    in forma camuffata, ad esempio sotto forma di sintomi nevrotici.</p>

<h2>I meccanismi di difesa</h2>

<p>Oltre alla rimozione e alla resistenza, Freud descrive altri meccanismi di difesa:</p>

<img XXclass="zoomable" src="/assets/images/02/03.webp" />

<ul>
    <li><strong>Spostamento</strong>: trasferimento di un sentimento perturbante su un oggetto alternativo rispetto a quello originale. Ad esempio, un bambino insultato da un ragazzo più grande sfoga la propria rabbia su un bambino più piccolo;</li>
    <li><strong>Sublimazione</strong>: spostamento di un impulso perturbante verso un comportamento socialmente accettato e apprezzato. Ad esempio, un impulso aggressivo che si trasforma in successo sportivo;</li>
    <li><strong>Regressione</strong>: ritorno da un comportamento maturo a uno immaturo in momenti di stress. Ad esempio, un bambino di 6 anni che ricomincia a succhiarsi il pollice il primo giorno di scuola;</li>
    <li><strong>Proiezione</strong>: attribuzione ad altri di caratteristiche negative proprie. Ad esempio, uno studente che copia agli esami e attribuisce il successo altrui al fatto che anch’essi abbiano copiato;</li>
    <li><strong>Formazione reattiva</strong>: conversione di un impulso perturbante nel suo opposto. Ad esempio, un uomo che odia la moglie e le rivolge complimenti eccessivi per compensare i sentimenti negativi;</li>
    <li><strong>Razionalizzazione</strong>: giustificazione di un proprio comportamento con motivazioni logiche, ma che non corrispondono alla vera causa, la quale è inconsciamente troppo dolorosa o minacciosa da accettare. Ad esempio, un ragazzo escluso da una squadra sportiva che si convince di non aver mai voluto farne parte;</li>
    <li><strong>Annullamento</strong>: compiere un’azione o un rituale per cancellare mentalmente comportamenti o pensieri perturbanti. Un esempio classico sono le compulsioni nel disturbo ossessivo-compulsivo;</li>
    <li><strong>Formazione di compromesso</strong>: il contenuto rimosso riesce ad arrivare alla coscienza in forma camuffata e irriconoscibile. I sogni, per Freud, sono tutti formazioni di compromesso: momenti in cui il materiale rimosso emerge, ma in forma mascherata.</li>
</ul>

<img class="zoomable" src="/assets/images/02/04.webp" />

<h2>Dal modello topico al modello strutturale</h2>
<p>Con il tempo Freud si rese conto che:</p>

<ul>
    <li>esistono <strong>conflitti inconsci</strong> che non si spiegano semplicemente distinguendo tra conscio e inconscio;</li>
    <li>alcune difese, come la <strong>rimozione</strong>, sono esse stesse inconsce;</li>
    <li>fenomeni come la <strong>coazione a ripetere</strong> (la tendenza a ripetere esperienze dolorose) richiedevano un modello più dinamico.</li>
</ul>

<p>Così venne introdotto il <strong>modello strutturale</strong> (seconda topica intorno 1920). 
Qui l’attenzione non è più rivolta ai “luoghi” della mente, ma alle <strong>funzioni</strong> e ai 
<strong>rapporti di conflitto</strong> tra le diverse istanze psichiche.</p>

<img XXclass="zoomable" src="/assets/images/02/05.webp" />

<h3>Es</h3>
<p>l’Es è quasi interamente inconscio. 
    L’Es è l’istanza psichica più primitiva, opera secondo il <strong>principio di piacere</strong> ed è 
    orientata alla soddisfazione immediata delle pulsioni. È amorale e disinteressata alle regole 
    sociali: se agisse in modo incontrollato, sarebbe nociva per l’individuo e per la società, 
    impedendo relazioni funzionali — che per Freud sono alla base della salute mentale.</p>

<h3>Io</h3>
<p>l’Io è in parte conscio, in parte preconscio e in parte inconscio. L’Io opera secondo il 
    <strong>principio di realtà</strong> e media tra le richieste dell’Es, la realtà esterna e il Super-Io. 
    È il contenitore delle <strong>difese</strong>, ovvero un insieme di funzioni regolatrici che tengono 
    sotto controllo le pulsioni. Quando le difese funzionano bene:</p>

<ul>
    <li>Impediscono all’individuo di agire impulsi che potrebbero nuocere a sé stesso o alla società;</li>
    <li>Mantenendo i desideri perturbanti e il relativo affetto incapsulato ben immagazzinati nell’inconscio.</li>
</ul>

<p>Più le difese funzionano bene, migliore è la salute mentale dell’individuo.</p>

<h3>Super-IO</h3>
<p>il <strong>Super-Io</strong> possiede aspetti consci e inconsci.. Il Super-Io rappresenta le 
norme morali appresi principalmente attraverso i genitori. Si articola in due sottosistemi:</p>

<ul>
    <li><strong>Coscienza</strong>: deriva dalle punizioni genitoriali;</li>
    <li><strong>Io ideale</strong>: deriva dalle gratificazioni e dai rinforzi genitoriali.</li>
</ul>

<p>La funzione principale del Super-Io è inibire gli istinti dell’Es e spingere l’Io a 
    perseguire obiettivi morali e standard elevati.</p>

<h3>ES, IO e SuperIO Interagiscono dinamicamente</h3>

<p>Le tre istanze sono in continua interazione. Sia l’Es che il Super-Io esercitano pressione sull’Io, che deve bilanciarle entrambe attraverso il principio di realtà:</p>

<img XXclass="zoomable" src="/assets/images/02/06.webp" />

<ul>
    <li>L’<strong>Es</strong> preme sull’Io affinché soddisfi le pulsioni in modo immediato;</li>
    <li>Il <strong>Super-Io</strong> preme sull’Io affinché persegua standard elevati e principi morali.</li>
</ul>

<p>L’Io deve quindi mediare in modo realistico e adattivo tra le spinte dell’Es e le pretese del 
    Super-Io. Quanto più l’Io funziona bene, tanto più solida sarà la salute mentale dell’individuo.</p>

<h3>Modalità di pensiero</h3>
<p>Le tre istanze si differenziano anche per la modalità di pensiero:</p>

<ul>
    <li><strong>Processo primario</strong> (associato all’Es e all’inconscio): pensiero primitivo, 
    orientato alla gratificazione immediata delle pulsioni, senza considerazione delle 
    conseguenze né confronto con la realtà;</li>
    <li><strong>Processo secondario</strong> (associato all’Io): pensiero logico e strutturato, 
    che valuta attentamente la realtà, considera le conseguenze e il rapporto tra mezzi e fini.</li>
</ul>

<h3>Inconscio descrittivo e inconscio dinamico</h3>

<p>Freud distingue due forme di inconscio:</p>

<ul>
    <li><strong>Inconscio descrittivo</strong>: corrisponde al preconscio nella prima topica. 
    Contiene materiale psichico che non è attualmente presente alla coscienza ma è facilmente 
    accessibile; serve a organizzare le informazioni senza sovraccaricare la mente;</li>
    <li><strong>Inconscio dinamico</strong>: è sede dei desideri sessuali e aggressivi che 
    premono per essere scaricati e accedere alla coscienza, contrastati dalle difese 
    dell’Io. I contenuti dell’inconscio dinamico rimangono immutati nel tempo 
    (atemporalità dell’inconscio), conservando la loro forma originaria anche una 
    volta portati alla coscienza.</li>
</ul>

<h2>Lo sviluppo psicosessuale: dal narcisismo alle relazioni oggettuali</h2>

<p>Nella prima infanzia la libido è interamente investita su sé stessi (<strong>libido narcisistica</strong>). 
    Lo scopo dello sviluppo è spostare progressivamente questa libido verso gli altri, 
    trasformandola in <strong>libido oggettuale</strong> (in psicologia dinamica “oggetto” indica l’”altro”).</p>


<img XXclass="zoomable" src="/assets/images/02/07.webp" />

<p>Questo spostamento avviene per necessità: fin da subito il bambino scopre di non poter soddisfare 
    le proprie pulsioni da solo.</p>

<p>L’intero sviluppo psicosessuale tende a questo spostamento: dalla libido narcisistica alla 
    libido oggettuale, ovvero alla socializzazione. Entrare in relazione con gli altri non è 
    dunque un bisogno primario, ma qualcosa che l’individuo impara a fare per necessità.</p>

<p>Freud descrive questo processo attraverso l’esempio del neonato: già attaccato al seno, 
    quando avverte lo stimolo della fame tenta di ripetere l’esperienza piacevole attraverso 
    quella che Freud chiama “<strong>allucinazione del seno</strong>”, ovvero una fantasia interiore. 
    Rendendosi conto che la fantasia non elimina lo stimolo, impara a ricorrere alla 
    madre — all’oggetto esterno — comunicando il proprio bisogno. È così che il principio di 
    realtà entra in azione fin dai primi giorni di vita, portando il bambino a trovare un 
    equilibrio tra il principio di piacere e il principio di realtà.</p>

<h2>I dubbi sull’esclusività della pulsione sessuale</h2>

<p>Non tutti i comportamenti dei pazienti nevrotici erano spiegabili attraverso la pulsione sessuale. 
    In particolare, Freud osservò comportamenti ripetitivi che sembravano portare l’individuo 
    a rivivere sempre situazioni negative: la cosiddetta <strong>coazione a ripetere</strong>. 
    Questo lo portò a ipotizzare l’esistenza di <strong>pulsioni aggressive</strong> 
    (o <strong>pulsioni di morte</strong>), anch’esse innate e primarie, con un peso uguale a 
    quello delle pulsioni sessuali nello sviluppo della personalità e della psicopatologia.</p>

<img XXclass="zoomable" src="/assets/images/02/08.webp" />

<p>Nel 1920 Freud formulò la <strong>teoria del dualismo pulsionale</strong>. 
    Giunse a credere che ciò che viene rimosso non siano solo desideri sessuali, ma anche una 
    potente distruttività derivante dalla pulsione di morte.</p>

<h2>La visione dell’uomo e della società</h2>

<p>Per Freud, la natura umana è fondamentalmente distruttiva. Solo attraverso le difese — in 
    particolare la rimozione — e attraverso l’azione dell’Io e del principio di realtà, 
    l’essere umano riesce a tenere sotto controllo i propri istinti primitivi e a vivere 
    in società. Le difese sono quindi adattive e a servizio della convivenza sociale.</p>

<p>Se l’individuo fosse governato esclusivamente dall’Es e dal principio di piacere, 
    la vita sociale sarebbe impossibile.</p>

<p>Freud infine arriva a considerare l’<strong>inconscio</strong> una parte fondamentale 
della mente di tutte le persone, non solo di chi soffre di disturbi psicologici.</p>

<p>Freud approda infine a una concezione dell’inconscio come fondamento della mente 
    umana, non più come esclusivo appannaggio della patologia.</p>

<p>Secondo Freud, i meccanismi presenti nelle <strong>nevrosi</strong> esistono anche nelle persone 
sane, ma in forma molto più lieve. Ad esempio, <strong>lapsus, dimenticanze, atti mancati e sogni</strong> 
sono manifestazioni normali attraverso cui desideri o pensieri inconsci riescono ad 
affiorare alla coscienza, anche se in modo mascherato. Freud li chiama <strong>formazioni di 
compromesso</strong>, perché rappresentano un compromesso tra ciò che l’inconscio vuole esprimere e 
ciò che la coscienza cerca di reprimere.</p>

<p>Questa idea è coerente con il <strong>determinismo psichico</strong>: secondo Freud, nella vita mentale 
    <strong>nulla accade per caso</strong>. Ogni pensiero, emozione o comportamento ha una causa, anche 
    se non ne siamo consapevoli.</p>

<?php
$article_body = ob_get_clean();

require __DIR__ . '/../includes/layout/layout-article.php';
