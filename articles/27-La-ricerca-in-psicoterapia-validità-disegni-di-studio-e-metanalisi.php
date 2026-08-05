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

<h2>I tipi di ricerca in psicoterapia: esito e processo</h2>
<p>La ricerca in psicoterapia si concentra su due aspetti: la <strong>ricerca sull'esito</strong> (la psicoterapia è efficace? c'è un cambiamento, e in cosa?) e la <strong>ricerca sul processo</strong> (che cosa, durante la terapia, spiega un certo esito?).</p>

<h3>Fattori specifici e fattori aspecifici</h3>
<p>Una ricerca può valutare i <strong>fattori specifici</strong> di un orientamento (le strategie usate solo, per esempio, nell'approccio psicodinamico) oppure i <strong>fattori aspecifici</strong>, comuni a tutte le terapie (per esempio l'alleanza terapeutica). È inoltre fondamentale definire con precisione cosa si intende per "esito": due studi sullo stesso trattamento per gli attacchi di panico possono arrivare a conclusioni opposte se uno misura la riduzione della frequenza degli attacchi e l'altro la qualità di vita percepita — ridurre gli attacchi non garantisce automaticamente una vita migliore, e viceversa. Per questo è importante basare le decisioni cliniche su più ricerche, più metodi e più esiti valutati insieme.</p>

<h3>Significatività statistica e rilevanza clinica</h3>
<p>Un trattamento può mostrare una riduzione statisticamente significativa dei punteggi a un questionario sui sintomi depressivi, ma questo non basta: bisogna considerare anche la <strong>rilevanza clinica</strong> del cambiamento per quello specifico paziente. Per esempio, riuscire a mangiare meglio può essere un grande successo per un paziente e un dettaglio irrilevante per un altro, che potrebbe restare a rischio di ricadute anche a fronte di una riduzione statistica dei sintomi.</p>

<h3>La classificazione degli strumenti per la valutazione dell'esito (Lambert, 2004)</h3>
<p>Uno stesso esito può risultare diverso a seconda di come lo si misura: per questo un solo studio, con un solo metodo, non basta mai. Gli strumenti di valutazione si distinguono per il <strong>contenuto</strong> misurato (sintomi, funzionamento sociale o lavorativo, soddisfazione, qualità di vita, costi della cura...), per la <strong>dimensione temporale</strong> (a fine terapia o a distanza di mesi, per valutare la stabilità dei risultati), per la <strong>fonte</strong> (paziente, terapeuta, osservatore esterno, ciascuno con un punto di vista diverso) e per il <strong>metodo di misurazione</strong> (interviste, questionari, indici fisiologici). Più varietà di metodi e studi esistono su un tema, più la conoscenza sarà solida — anche se raramente un argomento è studiato in modo davvero esaustivo.</p>

<h2>La ricerca clinica: la validità</h2>
<p>Lo scopo della ricerca è raggiungere conclusioni valide e condivisibili sugli effetti di un intervento. Esistono quattro tipi di validità:</p>
<ol>
<li>la <strong>validità interna</strong>: valuta se sia davvero l'intervento, e non altre cause, a spiegare le differenze tra i gruppi (per esempio, differenze di età o istruzione tra i gruppi possono minacciarla — più variabili confondenti vengono controllate, più lo studio è credibile);</li>
<li>la <strong>validità esterna</strong>: valuta se i risultati siano generalizzabili ad altre persone, ambienti e momenti (per esempio, risultati ottenuti su studenti universitari potrebbero non generalizzarsi a un campione clinico più adulto);</li>
<li>la <strong>validità di costrutto</strong>: valuta quale aspetto specifico dell'intervento sia davvero l'agente causale (una tipica minaccia è l'effetto placebo: il solo fatto di ricevere una cura, a prescindere dal suo contenuto specifico, può produrre un miglioramento);</li>
<li>la <strong>validità statistica</strong>: valuta se e come sia possibile dimostrare statisticamente una relazione tra variabili, per esempio confrontando le medie di un gruppo sperimentale e di un gruppo di controllo prima e dopo il trattamento.</li>
</ol>

<h3>L'ipotesi nulla e gli errori di decisione</h3>
<p>La ricerca statistica parte di solito da un'<strong>ipotesi nulla</strong> (H0: non ci sono differenze tra i gruppi), da confermare o rifiutare con un certo livello di probabilità (alfa), che indica il rischio di una conclusione errata: si può correttamente rifiutare l'ipotesi nulla quando è falsa, o correttamente accettarla quando è vera; oppure, per errore, accettarla quando è falsa (spesso per una <strong>bassa potenza statistica</strong>, legata a un campione troppo piccolo) o rifiutarla quando è vera. Uno studio su pochissimi pazienti può generare ipotesi interessanti, ma non basta a garantire l'efficacia di un trattamento.</p>

<h2>La ricerca clinica: sperimentale e osservazionale</h2>
<p>Per classificare un disegno di ricerca ci si può chiedere, in sequenza: i ricercatori hanno assegnato i pazienti a diverse terapie? Se no, si parla di <strong>ricerca osservazionale</strong>; se sì, di <strong>ricerca sperimentale</strong>.</p>

<h3>La ricerca osservazionale descrittiva</h3>
<p>Comprende: il <strong>resoconto di un caso singolo</strong> (poco indicativo statisticamente, ma utile per aprire nuove aree di ricerca); il <strong>resoconto di più casi</strong>; lo <strong>studio di prevalenza</strong> (la presenza di certi sintomi in una popolazione); lo <strong>studio di sorveglianza</strong> (l'andamento di sintomi nel tempo); e gli <strong>studi correlazionali ecologici</strong> (l'associazione tra un'esposizione e un esito a livello di popolazione).</p>

<h3>La ricerca osservazionale analitica</h3>
<p>Se esiste un gruppo di controllo, si parla di <strong>studio analitico</strong>, che si distingue in base alla relazione temporale tra esposizione ed esito: gli <strong>studi di coorte</strong> seguono nel tempo un gruppo esposto a un fattore (per esempio un trattamento) confrontandolo con uno non esposto, per valutarne gli effetti futuri; gli <strong>studi caso-controllo</strong> partono invece da un esito già presente (per esempio una malattia) e ricostruiscono retrospettivamente l'esposizione dei due gruppi (per esempio, chi fumava di più); gli <strong>studi trasversali</strong> misurano esposizione ed esito nello stesso momento, senza poter stabilire la direzione della relazione causale (per esempio, obesità e insonnia rilevate insieme, senza sapere quale preceda l'altra).</p>

<h2>Gli studi sperimentali</h2>
<h3>Il campionamento</h3>
<p>Negli studi sperimentali, la <strong>randomizzazione</strong> richiede sia la generazione di una sequenza di assegnazione casuale sia il suo occultamento ai ricercatori che reclutano i partecipanti (un'assegnazione sistematica, per esempio per data di nascita, non è randomizzazione vera). Tra i metodi: il <strong>campionamento casuale semplice</strong> (per esempio con un generatore di numeri casuali); il <strong>campionamento a blocchi</strong> (rispettando un rapporto predefinito, per esempio 1:1, su gruppi di una certa numerosità); e il <strong>campionamento stratificato</strong> (la popolazione viene prima divisa in strati in base a un fattore rilevante, poi randomizzata all'interno di ciascuno strato) — utile con campioni piccoli, per evitare squilibri.</p>

<h3>Lo studio "in cieco"</h3>
<p>Per ridurre le minacce alla validità, uno studio randomizzato controllato dovrebbe essere condotto "in cieco": partecipanti, ricercatori e chi analizza i dati non dovrebbero conoscere il gruppo di appartenenza. In psicoterapia partecipanti e terapeuti non possono essere ciechi al proprio gruppo, ma chi somministra e analizza le misure di esito può esserlo.</p>

<h3>Gestire la perdita dei partecipanti (dropout)</h3>
<p>È inevitabile, ed eticamente corretto, che alcuni partecipanti abbandonino lo studio. Per gestire questo problema si descrive in dettaglio il flusso dei partecipanti e si includono nelle analisi tutti quelli assegnati inizialmente in modo randomizzato (analisi <strong>intention-to-treat</strong>), stimando eventualmente i dati mancanti sulla base di quelli disponibili.</p>

<h2>Le rassegne sistematiche e le metanalisi</h2>
<p>Entrambe partono da una ricerca sistematica della letteratura e da una sua valutazione critica; la <strong>metanalisi</strong> aggiunge il riassunto statistico dei risultati numerici degli studi disponibili.</p>

<h3>La ricerca della letteratura (linee guida PRISMA)</h3>
<p>Le linee guida internazionali <strong>PRISMA</strong> specificano come condurre e documentare una ricerca sistematica: identificare tutti gli abstract nelle banche dati, eliminare i duplicati, leggere per intero solo gli articoli pertinenti, e cercare anche letteratura non pubblicata (contattando esperti, consultando atti di convegni), dato che gli studi piccoli con risultati modesti tendono a essere pubblicati meno spesso di quelli con risultati eclatanti.</p>

<h3>La metanalisi: sintesi quantitativa</h3>
<p>La metanalisi calcola una misura di effetto per ogni studio e le combina in una <strong>media ponderata</strong> (in base, tra l'altro, alla numerosità campionaria di ciascuno), rappresentata graficamente in un <strong>Forest Plot</strong>: ogni studio con la propria stima e intervallo di confidenza, più una stima riassuntiva complessiva, più credibile e stabile di quella dei singoli studi.</p>

<h3>Vantaggi e limiti della metanalisi</h3>
<p>Tra i vantaggi: riassume sistematicamente la letteratura, aumenta la potenza statistica (unendo più campioni) e la validità esterna. Tra i limiti: l'eterogeneità tra studi condotti in contesti diversi (che il metodo può comunque analizzare e stimare); il <strong>bias di pubblicazione</strong> (gli studi piccoli con risultati eclatanti si pubblicano più facilmente); e la necessità di valutare il <strong>bias di selezione</strong> di ciascuno studio incluso.</p>

<h2>La ricerca in psicoterapia dinamica</h2>
<h3>Il posto della psicoanalisi nella ricerca in psicoterapia</h3>
<p>Freud aveva una posizione di indifferenza, se non di antipatia, verso la verifica empirica: per lui l'efficacia terapeutica era già di per sé conferma della validità della teoria — un'assunzione che innesca il circolo vizioso, già visto, tra procedura e teoria (la procedura viene validata dalla coerenza con la teoria, che a sua volta viene confermata dalla procedura). Una ricerca più libera e distaccata dalla teoria di partenza, al contrario, permette di individuare cosa funziona davvero e cosa no, aprendo la strada a nuove idee: per questo si è iniziato a fare ricerca clinica anche sui trattamenti psicodinamici.</p>


<?php
$article_body = ob_get_clean();

require __DIR__ . '/../includes/layout/layout-article.php';
