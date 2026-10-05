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

<h2>Mary Ainsworth e le prime ricerche sull'attaccamento</h2>
<p>Di seguito i punti principali della teoria di <strong>John Bowlby</strong></p>
<ul>
    <li>la motivazione primaria degli esseri umani è la ricerca di contatto e di attaccamento con una figura di allevamento principale</li>
    <li>questa motivazione è innata, specie-specifica, e si manifesta in comportamenti universali</li>
    <li>gli istinti sono pre-adattati all'ambiente umano, in contrasto con la teoria classica di Freud</li>
    <li>le ipotesi teoriche vanno sempre valutate su base empirica</li>
</ul>

<p>La teoria dell'attaccamento si considera il frutto del lavoro congiunto tra <strong>Mary Ainsworth</strong> (1913-1999) e Bowlby.</p>

<img XXclass="zoomable" src="/assets/images/Ainsworth.webp" />

<p>Grazie ai suoi studi, la teoria dell'attaccamento ha acquisito un ruolo fondamentale non solo in psicologia dinamica,
ma in molte altre aree della psicologia.</p>


<h3>La deprivazione materna</h3>
<p>Per <strong>deprivazione materna</strong> si intende "l'interazione carente tra il bambino e la figura materna" (figura di
allevamento principale). La deprivazione materna era stata studiata in tre situazioni distinte:</p>
<ul>
<li><strong>carenza</strong>: insufficienza delle interazioni, quando la madre per qualunque motivo non è presente;</li>
<li><strong>distorsione</strong>: distorsione qualitativa delle interazioni, indipendentemente dal loro numero (per esempio nel
caso di madri con depressione severa, dove l'interazione non è scarsa ma è alterata nella qualità);</li>
<li><strong>discontinuità</strong>: discontinuità relazionale dovuta alla separazione, quando un legame di attaccamento già
formato viene interrotto.</li>
</ul>



<h3>I tre metodi di ricerca sulla deprivazione materna</h3>
<p>Nel 1954, <strong>Ainsworth</strong> e <strong>Bowlby</strong> esaminarono insieme la letteratura empirica sugli effetti della
deprivazione materna, distinguendo 3 tre metodi di ricerca sulla deprivazione materna</p>
<ul>
    <li><strong>studio retrospettivo dei casi</strong>: si studia un gruppo di pazienti con la stessa sindrome. Il loro passato viene
    analizzato per identificare i fattori associati e formulare ipotesi di causa-effetto</li>
    <li><strong>follow-up retrospettivo</strong>: segue la logica opposta. Si osserva un gruppo di bambini che ha vissuto la stessa
    esperienza precoce (per esempio una separazione dalla madre) e li si segue nel tempo, per vedere se sviluppano un 
    determinato disturbo. Questo metodo ha però dei limiti. Richiede tempi molto lunghi, ed è difficile controllare l'omogeneità 
    del campione</li>
    <li><strong>osservazione diretta</strong>: consiste nell'osservare i bambini nel corso stesso dell'esperienza deprivante (per esempio
    in istituti o ospedali), permettendo di studiarne la risposta iniziale e l'adattamento</li>
</ul>



<h3>Le fasi di risposta alla separazione</h3>
<p>Usando l'osservazione diretta <strong>Robertson</strong> e collaboratori osservarono con questo metodo bambini tra 1 e 4 anni
separati dalla madre in istituti,
concentrandosi sulle conseguenze della rottura di relazioni già consolidate.</p>
<p>Robertson osservò che la separazione dalla madre procedeva attraverso tre fasi tipiche:</p>
<ul>
    <li>una <strong>fase di protesta</strong>, in cui il bambino piange e manifesta una profonda angoscia, cercando di ritrovare la
madre</li>
    <li>una <strong>fase di disperazione</strong>, in cui il bambino, sempre più sfiduciato, rinuncia progressivamente a cercarla</li>
    <li>una <strong>fase di distacco</strong>, in cui appare più tranquillo e accetta le cure delle figure sostitutive</li>
</ul>


<h3>Le conclusioni della rassegna del 1954</h3>
<p>Bowlby e Ainsworth conclusero che la deprivazione materna nella prima e seconda infanzia ha conseguenze dannose per lo sviluppo del
bambino, ma con effetti molto variabili per tipo, durata e gravità. Il motivo di questa variabilità non era ancora chiaro. Mancavano
studi longitudinali, cioè ricerche capaci di seguire i bambini nel tempo per individuare quali variabili fossero davvero in gioco.
Servivano quindi nuovi studi, come quello che Ainsworth avrebbe condotto sui Ganda.</p>



<h3>Lo studio sui Ganda in Uganda (1963)</h3>
<img class="zoomable" src="/assets/images/12/Screenshot 2026-10-05 183432.webp" />
<p>Le prime ricerche sul campo di Ainsworth furono condotte in Uganda. L'obiettivo era osservare il tipo di attaccamento 
madre-bambino nella popolazione locale e le risposte dei bambini alla separazione dalla madre, in uno studio di circa 7 mesi.</p>

<p>Il campione era composto da 28 bambini appartenenti a famiglie di religioni diverse e situazioni coniugali diverse: 
un campione volutamente vario. Per 7 mesi furono condotte visite sistematiche di circa due ore, durante le quali la 
ricercatrice intervistava le madri e osservava il comportamento dei bambini con una scheda strutturata.</p>
<img class="zoomable" src="/assets/images/12/Screenshot 2026-10-05 183736.webp" />

<?php /*
<p>Ainsworth definì l'<strong>attaccamento</strong> come la capacità del bambino di distinguere la madre dalle altre persone, e di
risponderle in modo differenziato.
una definizione che lo studio le permise poi di tradurre in comportamenti osservabili, come modelli di attaccamento. 
Tra questi: il <strong>pianto differenziato</strong> (solo all'uscita della madre, non di altri adulti), il <strong>sorriso
differenziato</strong>, la <strong>vocalizzazione differenziata</strong> e l'<strong>orientamento visuomotorio</strong> verso la
madre; inoltre il seguirla, l'arrampicarsi su di lei, il nascondere il viso nel suo grembo, l'esplorare l'ambiente allontanandosi
solo per brevi distanze per poi tornare da lei, l'aggrapparsi, l'accoglierla alzando le braccia o battendo le mani.</p>
<p>Proprio dall'osservazione di questo andare e tornare durante l'esplorazione, Ainsworth individuò il contributo centrale della sua
ricerca alla teoria dell'attaccamento: il concetto di <strong>base sicura</strong>. Ciò che definisce una relazione di attaccamento
è la capacità del bambino di esplorare l'ambiente facendo ritorno dalla madre quando si allontana troppo, usandola come un porto
sicuro a cui tornare sempre.</p>
*/ ?>
<p>Ainsworth definì l'<strong>attaccamento</strong> come la capacità del bambino di distinguere la madre dalle altre 
persone e di risponderle in modo diverso rispetto a chiunque altro.</p>
<p>A livello pratico nello studio Ainsworth osservò i seguenti comportamenti osservabili, che funzionano come modelli 
di attaccamento:</p>
<ul>
<li>il <strong>pianto differenziato</strong> (il bambino piange solo quando esce la madre, non altri adulti);</li>
<li>il <strong>sorriso differenziato</strong> e la <strong>vocalizzazione differenziata</strong> verso la madre;</li>
<li>l'<strong>orientamento visuomotorio</strong> verso la madre;</li>
<li>il seguirla, l'arrampicarsi su di lei, il nascondere il viso nel suo grembo;</li>
<li>l'esplorare l'ambiente allontanandosi solo per brevi distanze, per poi tornare ogni volta da lei;</li>
<li>l'aggrapparsi a lei, l'accoglierla alzando le braccia o battendo le mani.</li>
</ul>

<p>Proprio dall'osservazione di questo andare e tornare durante l'esplorazione nasce il concetto di <strong>base sicura</strong>. 
Ciò che definisce una relazione di attaccamento, per Ainsworth, è la capacità del bambino di esplorare l'ambiente sapendo di poter
tornare dalla
madre quando si allontana troppo — usandola come un porto sicuro a cui fare sempre ritorno.</p>


<p>Le osservazioni di Ainsworth mostrarono:</p>
<ul>
    <li>nel <strong>primo trimestre</strong> i primi comportamenti di attaccamento compaiono tra le 8 e le
12 settimane</li>
    <li>nel <strong>secondo trimestre</strong> il bambino mostra una preferenza per la madre attraverso sorriso e vocalizzazione
differenziati</li>
    <li>nel <strong>terzo trimestre</strong>, dai 6 mesi, inizia a seguirla quando esce dalla stanza</li>
    <li>nel <strong>quarto trimestre</strong> piange meno all'uscita della madre, mostrando i primi segni di fiducia nel 
    poterla usare come base sicura, mentre compare tipicamente la paura degli estranei</li>
</ul>

<p>Proprio in questo periodo, quando compare la paura degli estranei, Bowlby e Ainsworth chiarivano un punto importante:
<strong>principale non significa unica</strong>. Anche se esiste una figura di allevamento principale, il bambino comincia
comunque a sviluppare legami di attaccamento anche con altre persone di riferimento.</p>

<p>Nello studio sui Ganda, Ainsworth classificò</p>
<ul>
    <li>16 bambini con <strong>attaccamento sicuro</strong> (pianto meno frequente)</li>
    <li>7 con <strong>attaccamento insicuro</strong> (pianto frequente, comportamento capriccioso, scarso uso della madre come base
sicura)</li>
    <li>5 come <strong>non attaccati</strong>, privi di un modello di attaccamento riconoscibile</li>
</ul>    
<p>Contrariamente all'idea diffusa all'epoca che il bambino andasse lasciato piangere per non viziarlo, Ainsworth osservò che una
risposta materna pronta e adeguata era associata a un bambino che piange meno e sviluppa più facilmente un attaccamento sicuro.</p>

<p>I fattori associati a un attaccamento sicuro risultarono essere:</p>
<ul>
    <li>la qualità e quantità delle cure materne</li>
    <li>il <strong>calore materno</strong> (il fattore più fortemente presente in tutti e 16 i bambini con attaccamento sicuro)</li>
    <li>la quantità totale di cure (le assenze della madre, se ben compensate, non erano di per sé un problema)</li>
    <li>la capacità e motivazione della madre a fornire informazioni sul proprio bambino</li>
    <li>l'atteggiamento positivo della madre verso l'allattamento al seno</li>
</ul>    
<p>Non risultarono invece associati alla sicurezza dell'attaccamento né la presenza di più caregiver, né la modalità di allattamento
(al seno o con il biberon).</p>



<h3>La Strange Situation</h3>
<p>Tornata dall'Uganda, Ainsworth mise a punto una procedura di laboratorio in grado di valutare lo stile di attaccamento del bambino:
la <strong>Strange Situation</strong>.</p>
<img class="zoomable" src="/assets/images/12/Screenshot 2026-10-05 184619.webp" />
<p>La procedura prevede due stanze (una per l'esperimento, una per l'osservazione) e quattro osservatori con compiti diversi:</p>
<ul>
    <li>uno registra un resoconto narrato su audio</li>
    <li>un altro trascrive quanto osservato</li>
    <li>un terzo prende appunti solo sul comportamento degli adulti (madre ed estranea)</li>
    <li>un quarto cronometra gli episodi e dà alle attrici le istruzioni su quando entrare e uscire</li>
</ul>    

<p>La Strange Situation si articola in otto episodi: </p>
<ol>
    <li>lo sperimentatore introduce la madre e il bambino nella stanza, poi esce</li>
    <li>la madre resta sola con il bambino per 3 minuti, cercando di non attirarne l'attenzione</li>
    <li>entra l'estranea, che resta con madre e bambino per altri 3 minuti</li>
    <li>la madre esce e il bambino resta solo con l'estranea</li>
    <li>la madre rientra e l'estranea esce</li>
    <li>la madre esce e il bambino resta completamente solo </li>
    <li>l'estranea rientra</li>
    <li>la madre rientra e si ricongiunge con il bambino</li>
</ol>
<p>Le variabili osservate comprendono il comportamento esplorativo, l'orientamento visivo, il pianto, la risposta all'uscita e al
ritorno della madre, la risposta all'ingresso dell'estranea e la risposta a essere presi in braccio o adagiati a terra.</p>

<p>I bambini furono classificati in tre gruppi</p>
<ul>
    <li>il <strong>Gruppo A</strong> (4 bambini) poco turbato dalla separazione; </li>
    <li>il <strong>Gruppo B</strong> (6 bambini) con una chiara ansia da separazione ma un comportamento relativamente adattivo; </li>
    <li>il <strong>Gruppo C</strong> (4 bambini) con ansia da separazione e comportamento disadattivo. </li>
</ul>
<p>In generale, i bambini esploravano l'ambiente con più tranquillità e curiosità in presenza della madre, mentre la 
curiosità diminuiva in presenza dell'estranea o in sua assenza. 
Le separazioni erano associate a una minore esplorazione, e l'ansia cresceva con l'accumularsi degli episodi stressanti, 
portando a un maggior bisogno di contatto fisico al ritorno della madre.</p>



<h3>I fattori che promuovono un attaccamento sicuro</h3>
<p>Dallo studio della Strange Situation, Ainsworth individuò come fattori predittivi di un attaccamento sicuro:</p>
<ul>
    <li>un contatto fisico frequente e prolungato, soprattutto nei primi 6 mesi</li>
    <li>la sensibilità della madre ai segnali del bambino</li>
    <li>un ambiente regolato, in cui il bambino possa percepire un senso di efficacia e prevedibilità delle proprie azioni</li>
    <li>la libertà di esplorare e imparare</li>
    <li>il piacere reciproco che madre e bambino ricavano dai loro scambi</li>
</ul>
<p>La funzione più importante dell'attaccamento resta la capacità del bambino di usare la figura di allevamento come base sicura per
esplorare il mondo.</p>

<p>Bowlby e Ainsworth ritenevano che la diffusione delle responsabilità di cura tra più adulti non fosse del tutto auspicabile:
la figura materna principale può ricevere aiuto, ma deve restare unica e avere un ruolo prevalente rispetto alle altre figure di cura.</p>

<p>Non è detto che la figura materna principale debba essere la madre
biologica, e non è detto che l'impegno della madre nel lavoro o nella carriera sia dannoso per lo sviluppo del bambino.</p>



<?php
$article_body = ob_get_clean();

require __DIR__ . '/../includes/layout/layout-article.php';
