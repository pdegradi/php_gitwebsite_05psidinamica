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

<h2>Psicoanalisi e psicologia empirica</h2>

<!--
<h3>I modelli teorici approfonditi finora</h3>
<p>Nella prima parte del corso abbiamo approfondito una serie di teorie che caratterizzano la storia della psicoanalisi: la teoria classica di Freud, la teoria kleiniana, le teorie della Scuola Inglese delle Relazioni Oggettuali, la Psicologia dell'Io (a partire dalle proposte di Anna Freud e Heinz Hartmann), la Psicologia dell'identità di Erik Erikson e la Psicologia del Sé di Heinz Kohut, e infine le teorie più moderne che considerano la mente umana come fondamentalmente sociale: la psicoanalisi interpersonale di Sullivan, il modello relazionale di Stephen Mitchell e la teoria intersoggettiva di Stolorow e Atwood.</p>
<p>Va sottolineato che questo percorso non è esaustivo: non sono state approfondite altre teorie comunque fondamentali nella storia della psicoanalisi, per esempio quelle di Jung, Adler, Ferenczi, o di autori più recenti come Kernberg, Lacan e Bowlby. La scelta è stata fatta per delineare come la teoria psicoanalitica sia cambiata dalle prime proposte di Freud fino alle teorie più condivise nella psicologia dinamica accademica contemporanea.</p>
-->

<h3>Il declino della psicoanalisi in ambito accademico</h3>
<p>La storia della psicoanalisi non è cambiata solo a livello concettuale, ma anche nel grado di accettazione in ambito accademico, clinico e sociale. Le teorie freudiane hanno influenzato enormemente la cultura del secolo scorso, e negli Stati Uniti e in Europa il pensiero psicoanalitico ha inizialmente dominato la psicologia accademica e la pratica clinica. Nonostante dopo Freud siano nate numerose scuole e teorie psicoanalitiche, la psicoanalisi contemporanea riceve oggi molto meno spazio nella psicologia accademica e nella pratica clinica rispetto alla psicoanalisi classica. Il tema ha avuto anche una risonanza sociale: nel 2007 un articolo del New York Times, accompagnato dalla vignetta della tipica poltrona di Freud che cade dalla finestra, si interrogava sul perché la teoria di Freud fosse insegnata ampiamente in diverse facoltà universitarie americane, ma sempre meno nelle facoltà di Psicologia.</p>

<h3>Integrazione delle teorie e valutazione della loro qualità</h3>
<p>Un primo elemento di riflessione è che, dopo Freud, sono nate molte proposte teoriche ricche di idee, ma ciascuna è rimasta isolata all'interno della propria scuola, con pochi tentativi di integrazione e confronto reciproco. Questo mette in discussione l'obiettivo stesso della psicologia accademica, cioè progredire verso una conoscenza sempre più precisa del funzionamento della mente. Per farlo, occorre in qualche modo valutare la qualità delle teorie proposte: quale teoria spiega meglio il funzionamento della mente e della psicopatologia? Quale ispira l'applicazione clinica più efficace?</p>

<h3>Due approcci a confronto: Stephen Mitchell e Peter Fonagy</h3>
<p>Nella psicologia dinamica sono stati seguiti due approcci diversi a questa domanda. Per Stephen Mitchell, la conoscenza in psicoanalisi progredisce attraverso il giudizio degli analisti, che testano quotidianamente, nella pratica clinica, l'efficacia e la validità delle teorie; per Mitchell la ricerca empirica non è un metodo appropriato alla psicoanalisi, perché i suoi concetti sono troppo complessi per essere semplificati in uno studio empirico.</p>
<p>A questa posizione risponde Peter Fonagy, che osserva come, se il metodo di Mitchell funzionasse, alcune teorie sarebbero state nel tempo abbandonate: è invece successo il contrario, le teorie e le scuole psicoanalitiche sono aumentate nel tempo. Per Fonagy questo dimostra che l'approccio di Mitchell non funziona, perché porta solo ad aumentare la varietà di teorie e approcci. In un articolo del 2003 pubblicato sulla rivista "World Psychiatry", Fonagy sostiene che la sovrabbondanza di teorie limita la possibilità di sistematizzare il pensiero psicoanalitico, e che questo dipende soprattutto dal metodo di raccolta dei dati usato nella disciplina.</p>

<h3>Psicoanalisi e ricerca: la posizione di Kernberg</h3>
<p>Concorde con Fonagy è anche Otto Kernberg, che in un articolo del 2015 pubblicato sulla rivista "Psychoanalytic Inquiry" sostiene sia indispensabile sviluppare una linea di ricerca solida all'interno della psicoanalisi, per assicurarne il futuro come scienza e come professione clinica.</p>

<h3>Le scelte della psicologia accademica</h3>
<p>Un approccio moderno della psicologia accademica considera la scienza come qualcosa che deve basarsi su verifica empirica ed essere multidisciplinare. Da un lato, la psicologia dinamica è stata storicamente poco multidisciplinare, sia al proprio interno sia nei rapporti con altri ambiti come la psicologia cognitiva o la biologia. Dall'altro lato, le viene contestata anche una scarsa verifica empirica, almeno fino a un certo momento storico: a partire dalla teoria dell'attaccamento di John Bowlby e Mary Ainsworth, una parte consistente della disciplina ha però cercato di avvicinare la psicoanalisi alla psicologia empirica e accademica.</p>

<h3>La psicologia empirica e il metodo scientifico</h3>
<p>La psicologia empirica si basa sul concetto di ricerca scientifica: un tipo di ricerca che semplifica la complessità della natura isolando un fenomeno specifico per poterlo studiare con attenzione. Proprio questa semplificazione viene criticata da alcuni autori psicoanalitici, secondo cui distorce eccessivamente teorie basate su concezioni complesse del funzionamento della mente. A questa critica risponde, tra gli altri, Otto Kernberg: la semplificazione fa parte del metodo scientifico, ma va compresa in una prospettiva più ampia, perché un singolo studio non fa avanzare da solo la conoscenza (come un singolo pezzo di un puzzle), ma contribuisce insieme ad altri studi a comporre un quadro sempre più preciso.</p>

<h3>Le fasi di uno studio di ricerca</h3>
<p>Uno studio scientifico si sviluppa attraverso cinque fasi fondamentali:</p>
<ol>
<li>formulare un'ipotesi basata su una teoria;</li>
<li>definire il metodo;</li>
<li>raccogliere i dati secondo il metodo definito;</li>
<li>analizzare i dati in modo appropriato;</li>
<li>interpretare i risultati, confrontandoli con teorie provenienti da diversi ambiti di ricerca, sempre con cautela e tenendo conto anche di altri studi.</li>
</ol>

<h3>Le teorie scientifiche e il principio di falsificabilità</h3>
<p>La scienza è un <strong>processo cumulativo</strong>: la domanda di ricerca si basa su teorie già formulate, e una <strong>teoria</strong> è un'asserzione, o un insieme di asserzioni, riguardanti le relazioni tra variabili. Una teoria scientifica deve poter essere messa alla prova con una predizione precisa, verificabile come vera o falsa: secondo il <strong>principio di falsificabilità</strong> proposto da Karl Popper, una teoria scientifica deve poter essere, in linea di principio, dimostrata falsa.</p>
<p>Una teoria non può mai essere dichiarata sicuramente vera, perché è sempre possibile formulare una spiegazione che sembri prevedere ogni risultato possibile. Per esempio, chi studia la depressione a partire dal sonno può dimostrare che chi dorme male per lungo tempo sviluppa più facilmente sintomi depressivi; un altro gruppo di ricerca potrebbe dimostrare lo stesso partendo dall'ansia, un altro ancora dallo stato socio-economico: probabilmente più fattori hanno un ruolo, e ci sarà sempre la possibilità di trovare una nuova variabile che sembri prevedere il risultato. Per questo è più informativo capire quali variabili non predicono il fenomeno studiato, così da poterle escludere tra le possibili spiegazioni: non possiamo mai provare con certezza che una teoria sia vera, ma più prove supera, più possiamo darle fiducia.</p>

<h3>La ricerca procede lentamente</h3>
<p>Una battuta tratta da "Vita di Galileo" di Bertolt Brecht ("rimetteremo tutto in discussione... non procederemo con gli stivali delle sette leghe, ma a passo di lumaca") rende bene l'idea che la ricerca avanza lentamente: un singolo studio non fa progredire di molto la conoscenza su un fenomeno, ma è l'insieme di più studi, condotti con metodi diversi, a costruire una conoscenza più solida. Un esempio pratico viene dalla pediatria: per anni si consigliava di far dormire i neonati a pancia in giù, perché aiutava con le coliche; oggi si raccomanda la posizione opposta, a pancia in su, perché nuovi studi hanno mostrato che dormire a pancia in giù aumenta il rischio di sindrome della morte improvvisa del neonato. Le indicazioni cliniche cambiano quindi con l'avanzare della ricerca empirica.</p>

<h3>Formulare un'ipotesi e la definizione operazionale</h3>
<p>Le ipotesi scientifiche servono a spiegare, prevedere ed esplorare relazioni specifiche tra variabili: si basano sulle teorie, ma, a differenza di esse, sono predizioni specifiche. Per formulare un'ipotesi occorre passare da una <strong>definizione teorica astratta</strong> di un concetto a una <strong>definizione operazionale</strong>, cioè una definizione basata sulle operazioni concrete usate nell'esperimento: l'ipotesi è ciò che collega la teoria al metodo di ricerca.</p>
<p>Per esempio, se volessimo valutare se in una scuola elementare i bambini maschi sono più aggressivi delle femmine, la definizione teorica astratta di "aggressività" non basta: dovremmo stabilire operativamente, per esempio, che per comportamento aggressivo si intende la frequenza delle spinte verso i compagni, in modo da poterlo osservare e misurare con precisione.</p>

<h3>Definire il metodo: i tre tipi di ricerca</h3>
<p>Dopo aver definito teoria, ipotesi e definizione operazionale, occorre scegliere il metodo. Si distinguono tre tipi di ricerca empirica, che possiamo illustrare riprendendo l'esempio dei comportamenti aggressivi a scuola:</p>
<ul>
<li><strong>ricerca osservazionale</strong>: uno o più osservatori registrano variabili come età, genere e numero di spinte di ciascun bambino, senza cercare di influenzare il comportamento. Usare più osservatori permette di calcolare un <strong>indice di accordo</strong>, che garantisce maggiore oggettività;</li>
<li><strong>ricerca correlazionale</strong>: si registrano sistematicamente due comportamenti, per esempio le spinte ai compagni e la visione di programmi violenti in televisione, e si mettono in relazione tra loro. Se i due fenomeni risultano associati, non possiamo però sapere se sia la violenza in televisione a causare i comportamenti aggressivi, o se i bambini più aggressivi siano semplicemente più attratti da quei programmi;</li>
<li><strong>ricerca sperimentale</strong>: per stabilire un rapporto di causa-effetto, i ricercatori dividono un gruppo di bambini casualmente in due gruppi il più possibile simili per età, genere, condizione socio-economica e comportamento pregresso: un gruppo (sperimentale) viene esposto a programmi violenti, l'altro (di controllo) a programmi neutri. La variabile manipolata dal ricercatore (l'esposizione ai programmi violenti) si chiama <strong>variabile indipendente</strong>, mentre quella osservata e misurata (le spinte ai compagni) si chiama <strong>variabile dipendente</strong>.</li>
</ul>
<p>L'<strong>assegnazione casuale</strong> dei partecipanti ai due gruppi può essere semplice o stratificata (per esempio per età e sesso), fatta manualmente o tramite software; quanto più il campione è ampio, tanto più si riducono le differenze individuali tra i due gruppi.</p>

<h3>La validità di una ricerca</h3>
<p>Con il termine <strong>validità</strong> si indica l'esattezza delle conclusioni dei ricercatori: possiamo essere sicuri che il risultato osservato dipenda davvero dalla relazione tra la variabile indipendente e quella dipendente? Per esempio, in uno studio sulla relazione tra sonno e depressione, se non teniamo conto di altre variabili correlate (come l'ansia), non possiamo essere certi che sia proprio la qualità del sonno a spiegare l'insorgenza della depressione, e non per esempio i livelli di ansia dei partecipanti.</p>

<h3>Validità interna e validità esterna</h3>
<p>Si parla di <strong>validità interna</strong> quando ci sono ragioni valide per ritenere che esista realmente un rapporto di causa-effetto tra la variabile indipendente e quella dipendente, e non che la relazione osservata dipenda da una terza variabile non controllata. Nella ricerca sugli esseri umani non è mai possibile controllare tutte le variabili che potrebbero spiegare un fenomeno, ma un buon modo per avvicinarsi a una buona validità interna è reclutare un campione ampio e valutare più caratteristiche possibili dei due gruppi, in modo che risultino il più possibile simili tranne che per la variabile studiata.</p>
<p>Si parla invece di <strong>validità esterna</strong> quando i risultati di una ricerca sono applicabili anche ad altre situazioni, luoghi o popolazioni: per esempio, un effetto osservato in una popolazione clinica potrebbe non essere generalizzabile ad altre età o ad altri contesti.</p>

<h3>Psicoanalisi e ricerca empirica: conclusioni</h3>
<p>Nella psicologia la ricerca empirica non può sempre essere condotta con facilità, e i criteri di validità restano spesso un problema da affrontare e discutere nell'interpretazione dei risultati. Ciò nonostante, la verifica empirica delle ipotesi teoriche è considerata sempre più indispensabile in ambito accademico e clinico: questo significa che le università scelgono quali teorie insegnare anche in base alla loro verificabilità empirica, e che uno stato può decidere di finanziare solo le psicoterapie basate su prove di efficacia. È in questo senso che va compresa l'affermazione di Otto Kernberg: la psicoanalisi ha bisogno di una linea di ricerca solida per sopravvivere come scienza e come pratica clinica. Si tratta, in fondo, anche di una questione politica, sociale ed economica.</p>

<div class="summary-block">
<h2>Psicoanalisi e psicologia empirica (riassunto)</h2>

<p>Dopo Freud la psicoanalisi si è divisa in molte scuole diverse, rimaste isolate tra loro e poco confrontate. Questo ha contribuito al calo di importanza della psicoanalisi nella psicologia accademica rispetto al passato, e ha aperto la domanda su come stabilire quale teoria sia più valida.</p>

<p>Su questo punto si confrontano due posizioni. Per <strong>Stephen Mitchell</strong> la conoscenza psicoanalitica si costruisce nel lavoro clinico quotidiano, attraverso il giudizio degli analisti; la ricerca empirica, per lui, è un metodo poco adatto alla complessità della psicoanalisi. <strong>Peter Fonagy</strong> ribatte che questo approccio non ha selezionato le teorie migliori, ma le ha solo moltiplicate nel tempo: per sistematizzare il pensiero psicoanalitico serve invece un metodo di ricerca più rigoroso. <strong>Otto Kernberg</strong> è sulla stessa posizione di Fonagy: senza una linea di ricerca solida, la psicoanalisi rischia di non sopravvivere come scienza e come pratica clinica.</p>

<p>La ricerca scientifica studia un fenomeno isolandolo dal resto, per poterlo osservare con precisione: una semplificazione che alcuni psicoanalisti considerano incompatibile con la complessità della mente. Kernberg risponde che ogni singolo studio è solo un tassello che, insieme a molti altri, costruisce gradualmente un quadro più completo. La psicologia accademica moderna richiede inoltre verifica empirica e multidisciplinarità, due caratteristiche che la psicoanalisi ha storicamente sviluppato poco: la situazione cambia a partire dalla teoria dell'attaccamento di Bowlby e Ainsworth, con cui la disciplina comincia ad avvicinarsi alla ricerca empirica.</p>

<p>Uno studio scientifico segue sempre cinque fasi:</p>

<ol>
    <li>formulare un'<strong>ipotesi</strong> basata su una teoria;</li>
    <li>definire il metodo;</li>
    <li>raccogliere i dati;</li>
    <li>analizzare i dati;</li>
    <li>interpretare i risultati, confrontandoli con altri studi.</li>
</ol>

<p>La scienza è un <strong>processo cumulativo</strong>: ogni nuova ricerca si costruisce su teorie già esistenti. Una <strong>teoria</strong> è un insieme di affermazioni sulle relazioni tra variabili (i fattori osservati, che possono cambiare ed essere misurati). Per essere scientifica, una teoria deve rispettare il <strong>principio di falsificabilità</strong> di Karl Popper: deve cioè poter essere, almeno in linea di principio, dimostrata falsa. Nessuna teoria può quindi essere dichiarata vera con assoluta certezza: più supera tentativi di smentita, più diventa credibile.</p>

<p>Un'<strong>ipotesi</strong> è una predizione specifica che nasce da una teoria e la collega al metodo di ricerca. Per formularla occorre trasformare una <strong>definizione teorica astratta</strong> di un concetto (l'idea generale) in una <strong>definizione operazionale</strong> (il modo concreto in cui quel concetto viene osservato e misurato nello studio).</p>

<p>Esistono tre tipi di ricerca empirica:</p>

<ul>
    <li><strong>ricerca osservazionale</strong>: si osserva e registra il comportamento senza intervenire; usando più osservatori si calcola l'<strong>indice di accordo</strong> (quanto le loro osservazioni coincidono), utile per garantire oggettività;</li>
    <li><strong>ricerca correlazionale</strong>: si mettono in relazione due variabili osservate, senza però poter stabilire un rapporto di causa-effetto tra loro;</li>
    <li><strong>ricerca sperimentale</strong>: i partecipanti vengono divisi con <strong>assegnazione casuale</strong> (scelta a caso, per ridurre le differenze tra i gruppi) in un gruppo sperimentale e uno di controllo; si manipola una <strong>variabile indipendente</strong> (la causa) per osservarne l'effetto su una <strong>variabile dipendente</strong> (l'effetto misurato).</li>
</ul>

<p>La <strong>validità</strong> indica quanto ci si può fidare delle conclusioni di uno studio. La <strong>validità interna</strong> riguarda la certezza che il risultato dipenda davvero dalla variabile indipendente studiata, e non da altri fattori non controllati. La <strong>validità esterna</strong> riguarda invece la possibilità di generalizzare i risultati ad altre situazioni, popolazioni o contesti diversi da quello studiato.</p>

<p>In conclusione, la verifica empirica è oggi sempre più richiesta alla psicoanalisi: sia in ambito accademico, per decidere quali teorie insegnare, sia in ambito clinico, per decidere quali terapie finanziare. È quindi, oltre che una questione scientifica, anche una questione economica e politica.</p>
</div>

<h2>La teoria dell'attaccamento</h2>
<p>Agli inizi degli anni '40 la società psicoanalitica britannica era divisa in tre gruppi teorici: 
    il gruppo di Anna Freud e degli psicologi dell'Io, il gruppo di Melanie Klein e degli esponenti della teoria kleiniana, e, 
    a metà tra i due, gli indipendenti della Scuola Inglese delle Relazioni Oggettuali. È in questo terzo gruppo che si colloca <strong>John Bowlby</strong>.</p>

<p>Bowlby ha proposto una teoria del funzionamento psichico basata sulla motivazione primaria di stabilire un legame profondo, 
    di attaccamento, con la madre.</p>
    
<p>La teoria di Bowlby sull'attaccamento è stata accolta con molte critiche e poco entusiasmo dalla società psicoanalitica britannica. 
    Anna Freud e Melanie Klein ritenevano che la teoria di Bowlby non potesse essere considerata psicoanalitica.</p>

<p>Va comunque sottolineato che nessun altro autore psicoanalitico ha avuto un'influenza pari a quella di Bowlby nel mettere in 
    relazione la psicoanalisi con altre discipline, come la psicologia empirica e la biologia.</p>

<p>La comunità psicoanalitica dell'epoca muoveva a Bowlby due critiche fondamentali:</p>
<ol>
<li>Bowlby dava <strong>poco</strong> peso alle differenze individuali e costituzionali, 
    mettendo invece in primo piano gli aspetti evolutivi comuni a tutti gli esseri umani e 
    l'importanza del primo ambiente e delle prime relazioni socio-emotive;</li>
<li>la teoria dell'attaccamento semplificherebbe in modo eccessivo la complessità del funzionamento psichico</li>
</ol>


<?php
$article_body = ob_get_clean();

require __DIR__ . '/../includes/layout/layout-article.php';
