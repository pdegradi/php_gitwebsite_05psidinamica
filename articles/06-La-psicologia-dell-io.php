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

<h2>Caratteristiche</h2>

<ul>
    <li>Come la teoria kleiniana, anche la Psicologia dell’Io non mette in discussione la teoria pulsionale 
        di Freud (le pulsioni sessuali e aggressive come motore del funzionamento psichico): 
        resta il punto di partenza teorico.</li>
    <li>Il fulcro dell’interesse si sposta sull’Io. A differenza di Freud, gli autori di questo orientamento 
        riconoscono alle funzioni cognitive dell’Io (pensiero, percezione, memoria) 
        un’autonomia propria, non dipendente solo dalla soddisfazione delle pulsioni.</li>
    <li>In netto contrasto con Melanie Klein: per la Psicologia dell’Io, l’Io e il 
        Super-Io (l’istanza che interiorizza norme e valori) sono strutture stabili e razionali, 
        che si formano nel corso dello sviluppo e sono capaci di un pensiero complesso e logico.</li>
    <li>È un orientamento con una forte sensibilità scientifica: introduce infatti l’osservazione 
        diretta del comportamento infantile come strumento per verificare le ipotesi psicoanalitiche, 
        avvicinando così la psicoanalisi alla psicologia empirica.</li>
    <li>L’ambiente, in particolare le cure genitoriali, ha un ruolo centrale nello sviluppo 
        psichico — su questo punto la posizione è simile a quella della Scuola Inglese delle 
        Relazioni Oggettuali. La differenza sostanziale è che la Psicologia dell’Io mantiene centrale 
        la teoria pulsionale e il principio di piacere, mentre la Scuola Inglese la rifiuta.</li>
    <li>I fallimenti evolutivi che determinano psicopatologia o salute mentale in età adulta 
        vengono collocati nella fase pre-edipica, in particolare in carenze affettive materne 
        nella prima infanzia. Questo è un punto condiviso con gran parte delle teorie 
        psicoanalitiche successive a Freud: per Freud il momento cruciale era la risoluzione del 
        complesso Edipico (attraverso cui si formano Io, Super-Io e difese); per gli autori 
        post-freudiani, invece, sono i primissimi anni di vita ad avere il peso maggiore.</li>
</ul>

<p>Nota: la suddivisione degli autori in “scuole” ben distinte è in realtà un’approssimazione 
    utile a scopo didattico, ma i confini tra gli orientamenti non sono sempre netti.*</p>

<h2>Anna Freud</h2>

<p>La Psicologia dell’Io nasce con Anna Freud (1895-1982), figlia di Sigmund Freud. 
    Prosegue il lavoro paterno, concentrandosi in particolare sui meccanismi di difesa, 
    e vi aggiunge un elemento nuovo: l’osservazione diretta del comportamento infantile 
    come metodo per verificare i principi psicoanalitici.</p>

<h2>I meccanismi di difesa e l’importanza dell’IO</h2>

<p>Freud era partito dal modello topico della mente (conscio, preconscio, inconscio) 
    per arrivare poi al modello strutturale, composto da tre istanze che agiscono soprattutto 
    a livello inconscio: Es, Io e Super-Io. Su questa base, Anna Freud si chiede quale 
    sia davvero l’obiettivo della cura.</p>

<p>Per la parte inconscia dell’Es (i ricordi infantili carichi emotivamente che spingono 
    verso la coscienza) è chiaro che la terapia porta beneficio, facendoli emergere. 
    Meno chiaro è il beneficio di portare alla coscienza anche i contenuti inconsci 
    dell’Io e del Super-Io.</p>

<p>Esempio: una persona ha trasformato, tramite la sublimazione (un meccanismo di difesa che 
    converte un impulso in un’attività socialmente accettata), una forte aggressività in 
    abilità sportive che le procurano stima sociale. Scoprire in terapia che quelle doti 
    dipendono dall’aggressività potrebbe danneggiarla, invece di aiutarla.</p>

<p>Per questo Anna Freud sostiene che la cura non deve limitarsi a rendere consci i contenuti 
    rimossi dell’Es, ma deve anche rafforzare l’Io e le sue difese. Anche Freud aveva già 
    valorizzato l’Io come istanza che protegge dall’angoscia; Anna Freud amplia questo 
    lavoro sull’Io e le difese.</p>

<p>L’Io lavora costantemente per trovare un compromesso tra:</p>

<ul>
    <li>le spinte dell’Es, che cercano di scaricare l’eccitamento legato ai ricordi rimossi;</li>
    <li>le richieste del Super-Io, che modula e controlla le pulsioni sessuali e aggressive 
        legate a quei ricordi.</li>
</ul>

<p>Le difese servono quindi a due scopi: contenere le pressioni pulsionali dell’Es e ridurre 
    l’angoscia (l’affetto doloroso) che le accompagna. Per questo hanno un valore adattivo, 
    non solo repressivo. La terapia, di conseguenza, non deve solo portare alla coscienza i 
    desideri sessuali e aggressivi infantili indebolendo le difese, ma deve anche rafforzarle 
    e renderle più efficaci: i ricordi legati alla prima infanzia sono spesso dolorosi, 
    mentre contenerli, trasformarli e sublimarli sono operazioni evolute e adattive. 
    Per Anna Freud, il terapeuta deve dare pari attenzione a Es, Io e Super-Io.</p>

<h2>Metodo L’osservazione diretta</h2>

<p>Le ipotesi di Freud sullo sviluppo psicosessuale nascevano dai ricordi infantili di pazienti 
    adulti, ricostruiti in seduta attraverso le libere associazioni. Anna Freud aggiunge un 
    metodo complementare: l’osservazione diretta del comportamento dei bambini, utile a 
    verificare e ampliare le ipotesi psicoanalitiche.</p>

<p>Anna Freud stessa sosteneva che, riguardo alla possibilità che un’indagine diretta e 
    “superficiale” della psiche potesse davvero cogliere la struttura e il funzionamento 
    della personalità, la risposta — specialmente per la comprensione dello sviluppo 
    infantile — fosse diventata sempre più positiva nel tempo.</p>

<p>Questo tocca un tema ancora oggi dibattuto in psicoanalisi: se la disciplina debba avvicinarsi 
    o meno alla psicologia empirica. Alcuni autori ritengono che la complessità dei temi 
    psicoanalitici sia troppo elevata per un metodo empirico, che tende a semplificare e 
    a limitarsi a ciò che è osservabile. Anna Freud si schiera invece a favore: per lei 
    l’osservazione del comportamento infantile può effettivamente validare le ipotesi 
    psicoanalitiche sullo sviluppo psicosessuale e infantile in generale.</p>

<h2>Funzionalità delle difese: prospettiva evolutiva</h2>

<p>Attraverso l’osservazione diretta dei bambini, Anna Freud notò che alcuni meccanismi di 
    difesa dell’Io — che per Sigmund Freud comparivano solo in fasi evolutive più tarde — 
    sono in realtà presenti già molto precocemente e hanno una funzione adattiva fin dall’inizio.</p>

<p>Va ricordato che per Freud la natura umana è in conflitto con l’ambiente sociale in cui 
    l’individuo nasce: il compito dello sviluppo infantile è trasformare le pulsioni “animali” 
    del bambino in un adulto civile, adattato alla società.</p>

<p>I compiti regolatori dell’Io permettono lo sviluppo di capacità cognitive complesse 
    (il cosiddetto processo secondario, cioè il pensiero logico e razionale, distinto dal 
    processo primario che è invece il pensiero pulsionale e irrazionale tipico dell’inconscio). 
    Difese funzionali e forti danno quindi una personalità ben definita — costituiscono il 
    carattere — e favoriscono anche lo sviluppo di intelligenza, memoria e attenzione.</p>

<p>Le difese si possono descrivere come modalità di pensiero che nascono durante lo sviluppo per 
    contenere l’angoscia (che deriva sia dalle pulsioni interne sia da situazioni esterne reali) 
    e che restano poi, in età adulta, come parte stabile del carattere.</p>

<p>Anna Freud propose una classificazione delle difese e indicò i criteri per valutarne la funzionalità:</p>

<ul>
    <li>il livello di intensità e generalizzazione della difesa rispetto all’attività e al piacere;</li>
    <li>l’adeguatezza della difesa rispetto all’età del soggetto;</li>
    <li>l’ampiezza e la flessibilità delle risorse difensive disponibili;</li>
    <li>l’efficacia della difesa nel controllare l’angoscia e mantenere l’equilibrio del funzionamento psichico;</li>
    <li>il grado in cui l’attività difensiva interferisce con le altre acquisizioni dell’Io.</li>
</ul>

<p>In sintesi, una difesa è funzionale quando è adeguata alla situazione e all’età del soggetto, 
    ed è usata in modo flessibile.</p>

<h2>L’ambiente e l’educazione psicoanalitica</h2>

<p>Per Anna Freud la qualità delle cure genitoriali è centrale per lo sviluppo psichico del bambino: 
    l’ambiente esterno assume un ruolo sempre più importante. I genitori devono svolgere le funzioni 
    dell’Io al posto del bambino, finché questo non le avrà interiorizzate.</p>

<p>Per l’autrice, la psicoanalisi deve avere anche una funzione pedagogica: grazie all’osservazione 
    diretta del bambino e ai progressi della teoria psicoanalitica, deve poter guidare i genitori 
    nell’educazione dei figli.</p>

<p>Anna Freud osservava che la psicoanalisi classica, sottolineando l’importanza delle pulsioni 
    sessuali e aggressive, aveva reso i genitori meno severi; questo però rischiava di ridurre 
    le frustrazioni necessarie a far nascere difese stabili e forti. I genitori devono quindi:</p>

<ul>
    <li>riconoscere e accettare i normali bisogni sessuali e aggressivi del bambino, senza condannarli 
        (per esempio: sapere che il bambino attraversa una fase anale, e non essere troppo rigidi nel 
        togliere il pannolino);</li>
    <li>ma allo stesso tempo introdurre un certo livello di frustrazione di questi bisogni, che è 
        necessario per favorire lo sviluppo di difese forti e funzionali.</li>
</ul>

<p>L’obiettivo è quindi un equilibrio tra l’accettazione dei bisogni pulsionali del bambino e 
    una giusta dose di frustrazione di questi bisogni.</p>

<h2>La disputa tra Anna freud e Melanie Klein</h2>

<p>Anna Freud propone un intervento clinico con i bambini molto diverso da quello di Melanie Klein. 
    Entrambe volevano validare le ipotesi psicoanalitiche di Freud sull’infanzia, ma Klein lo faceva 
    attraverso la terapia diretta con i bambini, sostenendo che:</p>

<ul>
    <li>la terapia con i bambini fosse possibile, basata sull’interpretazione del transfert negativo 
        (cioè i sentimenti ostili che il paziente proietta sul terapeuta), come con gli adulti;</li>
    <li>il bambino fosse in grado di comprendere questa interpretazione;</li>
    <li>ciò che va interpretato nel bambino è il gioco, mentre nell’adulto sono le libere associazioni 
        e i sogni.</li>
</ul>

<p>Anna Freud era fortemente contraria e sosteneva che:</p>

<ul>
    <li>la terapia diretta con i bambini non fosse possibile, perché il loro Io è ancora troppo 
        debole per comprendere le dinamiche del conflitto pulsionale e il transfert negativo 
        (in questa fase è il genitore a sostituire l’Io del bambino, finché questo non sviluppa 
        un Io forte, stabile e razionale);</li>
    <li>ai bambini — e soprattutto ai loro genitori — si potesse offrire un intervento 
        pedagogico, non terapeutico;</li>
    <li>il gioco non fosse equivalente alle libere associazioni degli adulti.</li>
</ul>

<p>La differenza di fondo tra le due autrici riguarda la concezione dell’Io e del Super-Io:</p>

<ul>
    <li>per Melanie Klein, Io e Super-Io non sono strutture ben definite né nel bambino né nell’adulto: 
        restano strutture primitive e fluide, che oscillano tra la posizione schizoparanoide e 
        quella depressiva. La mente del bambino, quindi, non è così diversa da quella dell’adulto, 
        ed è per questo che si può intervenire clinicamente anche con i bambini;</li>
    <li>per Anna Freud, invece, Io e Super-Io diventano progressivamente strutture stabili, 
        solide e razionali nel corso dello sviluppo. Per questo motivo il trattamento dell’adulto 
        (Io ben definito) e quello del bambino (Io ancora debole) devono essere profondamente 
        diversi.</li>
</ul>

<h2>British Psycoanalytic (scuola britannica di psicoanalisi) agli inizi degli anni 40</h2>

<p>Da questa disputa nascono due orientamenti principali all’interno della Società 
    Britannica di Psicoanalisi:</p>

<ol>
<li>le teorie ispirate ad Anna Freud (gli “psicologi dell’Io”);</li>
<li>le teorie ispirate a Melanie Klein (gli esponenti della teoria kleiniana).</li>
</ol>

<p>Tra questi due orientamenti si forma un terzo gruppo intermedio, che darà origine alla Scuola 
    Inglese delle Relazioni Oggettuali. Questa è la situazione della psicoanalisi britannica negli anni ’40.</p>

<h2>Heinz Hartmann</h2>

<p>Heinz Hartmann (1894-1970) è considerato il padre della Psicologia dell’Io. Il suo interesse 
    principale è lo sviluppo “normale”, cioè capire come il bambino diventa adulto, dando grande 
    rilievo all’influenza formativa dell’ambiente sulla personalità. In questo è simile ad Anna 
    Freud, ma si differenzia dalla Scuola Inglese delle Relazioni Oggettuali: per gli psicologi 
    dell’Io, infatti, la teoria delle pulsioni resta comunque alla base del funzionamento psichico.</p>

<h2>La sfera dell’io libera dai conflitti</h2>

<p>Per Freud, l’Io si sviluppa attraverso il principio di realtà, cioè a causa delle frustrazioni 
    imposte dall’Es (l’istanza pulsionale inconscia). Hartmann amplia questa visione: lo sviluppo 
    dell’Io non deriva solo dal conflitto con le pulsioni e il Super-Io. Alcune funzioni dell’Io — 
    dette apparati di autonomia primaria, come memoria, linguaggio e percezione — sono presenti 
    fin dalla nascita e si sviluppano in modo autonomo, non per effetto delle frustrazioni.</p>

<p>Lo sviluppo dell’Io è quindi determinato da:</p>

<ul>
    <li>la maturazione del sistema nervoso centrale (SNC);</li>
    <li>le prime relazioni oggettuali positive, che permettono un equilibrio tra gratificazione 
        e frustrazione;</li>
    <li>l’acquisizione del linguaggio, che facilita lo sviluppo del pensiero;</li>
    <li>la graduale capacità di valutare la realtà (esame di realtà);</li>
    <li>la capacità di rimandare la scarica delle pulsioni.</li>
</ul>

<h2>Dal principio di realtà all’importanza dell’ambiente</h2>

<p>Per Freud, alla nascita la libido (l’energia pulsionale) è rivolta verso l’Io stesso. Il bambino, 
    associando la fame all’allattamento, prova inizialmente a soddisfare il bisogno “allucinando” 
    il seno; scoprendo che questo non basta a placare la fame, sperimenta una prima frustrazione 
    da cui nasce il principio di realtà. Questo si rafforza con lo sviluppo, dà forma a Io e Super-Io, 
    e orienta la libido verso l’esterno (libido oggettuale, cioè rivolta verso altre persone/oggetti).</p>

<p>Per Hartmann, invece, le potenzialità dell’Io (linguaggio, pensiero, percezione, comprensione 
    dell’oggetto) sono già presenti alla nascita e si sviluppano da sole, purché l’ambiente sia 
    “mediamente prevedibile” (cioè sufficientemente stabile e normale). Alla nascita, Es, Io e 
    Super-Io non sono ancora distinti tra loro: la psiche è immatura e indifferenziata.</p>

<h2>L’adattamento</h2>

<p>Hartmann introduce un cambiamento importante rispetto a Freud: l’essere umano è progettato 
    per adattarsi bene all’ambiente. Contesta quindi l’idea freudiana secondo cui nasciamo in 
    conflitto con l’ambiente e impariamo ad adattarci solo attraverso lo sviluppo.</p>

<p>I processi di adattamento nascono dal nucleo innato dell’Io, cioè dalla sfera dell’Io libera 
    da conflitti. Questi processi permettono all’Io di sviluppare difese sia contro il mondo 
    esterno sia contro le richieste pulsionali interne. Introducendo il concetto di apparati di 
    autonomia primaria, Hartmann sposta l’interesse della psicoanalisi dalla psicopatologia alla 
    psicologia evolutiva: interessa più capire come si sviluppa una persona che come nasce un 
    disturbo mentale.</p>

<h2>Autonomia primaria e autonomia secondaria</h2>

<p>In un ambiente mediamente prevedibile — quindi con un ruolo centrale delle cure genitoriali — 
    gli apparati di autonomia primaria si sviluppano geneticamente e in modo autonomo. 
    Questo sviluppo però può essere limitato o bloccato da un conflitto: per esempio, il 
    linguaggio si sviluppa geneticamente, ma un conflitto può manifestarsi come balbuzie.</p>

<p>In sintesi, la Psicologia dell’Io sposta l’attenzione della psicoanalisi dalle pure pulsioni 
    all’importanza dell’ambiente e delle relazioni oggettuali, e rifiuta l’idea di un essere 
    umano poco adattato all’ambiente. Tuttavia, a differenza della Scuola Inglese delle Relazioni 
    Oggettuali, mantiene come base la teoria pulsionale di Freud.</p>

<h2>Il metodo</h2>

<p>Per Hartmann, la psicoanalisi doveva fondarsi su dati scientifici: le ipotesi non confermate 
    dai dati sperimentali, ottenuti tramite l’osservazione diretta, andavano scartate. 
    Gli psicologi dell’Io sostengono quindi che la psicoanalisi debba avvicinarsi il più possibile 
    alla psicologia empirica, rifiutando le ipotesi teoriche non confermate dai dati.</p>

<h2>René Spitz</h2>

<p>Un altro autore vicino alla psicologia empirica è René Spitz (1887-1974). Attraverso 
    l’osservazione diretta di bambini abbandonati alla nascita e cresciuti in orfanotrofio, 
    condusse uno studio molto noto: notò che i bambini che ricevevano solo cure fisiche 
    (cibo, igiene), ma nessun legame emotivo stabile con una persona di riferimento, non 
    solo non si sviluppavano normalmente e mostravano gravi difficoltà di adattamento, ma 
    in molti casi morivano nel giro di pochi anni. Da questo Spitz concluse che il potenziale 
    psicologico innato non può realizzarsi senza legami emotivi con un’altra persona.</p>

<h2>La fusione psicologica</h2>

<p>Spitz introduce il concetto di fusione psicologica: alla nascita il neonato non riesce a 
    interpretare da solo la grande quantità di stimoli che riceve. 
    La “madre sufficientemente buona” (concetto di Winnicott: una madre non perfetta, ma capace 
    di rispondere in modo adeguato ai bisogni del bambino) svolge, nel primo anno di vita, 
    la funzione di “Io ausiliario”: comprende empaticamente i bisogni del bambino e regola 
    la sua esperienza, calmandolo e aiutandolo a organizzare gli stimoli (funzione di madre-ambiente). 
    Attraverso questa relazione a due (diadica), il bambino sviluppa progressivamente la 
    capacità dell’Io di gestire e regolare da solo la propria esperienza.</p>

<h2>Oggetto libidico</h2>

<p>Perché la teoria di Spitz è collocata nella Psicologia dell’Io, mentre quella di Winnicott 
    nella Scuola delle Relazioni Oggettuali? Perché Spitz mantiene l’idea freudiana secondo cui 
    la libido è orientata al piacere, ma aggiunge che l’Io deve sviluppare alcune capacità specifiche 
    per costruire legami emotivi con le altre persone. Queste capacità permettono lo sviluppo 
    della cura per l’altro e di relazioni profonde e soddisfacenti.</p>

<p>Avere un oggetto libidico (cioè una persona verso cui è diretto un attaccamento stabile e selettivo) 
    è una conquista evolutiva, non qualcosa con cui nasciamo già dotati. Rappresenta una capacità 
    psicologica complessa: quella di mantenere un attaccamento personale e selettivo anche quando 
    la persona non è fisicamente presente. Come mostrato dallo studio di Spitz sui bambini in 
    orfanotrofio, l’assenza di un oggetto libidico può avere conseguenze gravissime, fino alla morte.</p>

<h2>Indicatori e organizzatori psichici</h2>

<p>Spitz propone una teoria dello sviluppo basata su due concetti: gli indicatori e gli organizzatori psichici.</p>

<p>Gli <strong>indicatori</strong> sono cambiamenti osservabili nel comportamento del bambino 
che segnalano una crescita della complessità psicologica. Questi cambiamenti si sviluppano 
attraverso la relazione con l’ambiente, in particolare con la madre.</p>

<p>Gli <strong>organizzatori psichici</strong> sono invece i punti di svolta evolutivi che 
questi indicatori segnalano: momenti in cui la psiche del bambino si riorganizza a un 
livello di maggiore complessità. I tre principali indicatori e i relativi organizzatori 
psichici individuati da Spitz sono:</p>

<ul>
    <li><strong>Il sorriso</strong> (circa 3 mesi): indica la comparsa della risposta sociale, 
    cioè la capacità del bambino di rispondere in modo specifico alla presenza di un’altra persona;</li>
    <li><strong>L’angoscia dell’estraneo</strong> (circa 8 mesi): indica la capacità di 
    organizzare tracce mnestiche (ricordi) e quindi di provare angoscia per l’assenza della madre. 
    Questa fase segna l’inizio di un vero legame affettivo di attaccamento, perché l’oggetto 
    amato (la madre) viene ormai distinto da tutti gli altri;</li>
    <li><strong>La padronanza del “no”</strong> (circa 15 mesi): segna le prime fasi della 
    formazione evolutiva del Super-Io, insieme alle prime capacità di giudizio e di concettualizzazione 
    (cioè la capacità di formarsi idee e concetti astratti).</li>
</ul>

<p>In sintesi: più il bambino procede attraverso questi organizzatori psichici, più riesce a formare 
    legami emotivi complessi, e più lo sviluppo psichico può procedere verso una maturazione sana.</p>

<h2>Margaret Mahler</h2>

<p>Margaret Mahler (1897-1985), come Winnicott, riteneva che il tema centrale della vita fosse 
    la costruzione del significato della propria identità. Il suo lavoro si basa sull’osservazione 
    di bambini psicotici (con disturbi molto gravi) tra i 6 mesi e i 3 anni: per l’autrice, 
    la patologia di questi bambini nasceva da una confusione profonda sulla propria identità 
    (un disturbo nella formazione del Sé).</p>

<p>Nei primi anni di vita la madre funziona come uno “specchio” per il bambino, che inizialmente 
    non distingue ancora il Sé dall’altro. Questa funzione di rispecchiamento è cruciale: se 
    la madre è imprevedibile, instabile, ansiosa o ostile, il bambino tende a interpretare 
    questi atteggiamenti come proprie caratteristiche di personalità (per esempio: se la 
    madre è ansiosa, il bambino tenderà a percepire se stesso come ansioso), compromettendo 
    lo sviluppo di un’identità autonoma e stabile.</p>

<h2>Lo sviluppo: Il processo di separazione e individuazione</h2>

<p>Per Mahler, lo sviluppo procede attraverso un processo di separazione e individuazione, in queste fasi:</p>

<ul>
    <li>nei primissimi mesi di vita, il bambino attraversa uno stadio di narcisismo primario assoluto: 
        non è consapevole delle cure materne, è completamente immerso in sé stesso (prevale il sonno 
        sulla veglia, e le pulsioni sono rivolte verso l’interno);</li>
    <li>dalla fine del secondo mese, compare una prima vaga consapevolezza dell’oggetto che soddisfa 
        i bisogni: è la fase della simbiosi normale;</li>
    <li>segue la fase più importante per la salute mentale, quella della separazione e individuazione 
        (circa dai 4 mesi ai 3 anni), articolata in momenti successivi:
        <ul>
        <li>tra i 4 e gli 8 mesi, il bambino inizia a distinguere il Sé dal non-Sé;</li>
        <li>tra gli 8 e i 14 mesi, imparando a camminare, comincia ad allontanarsi attivamente 
            dalla madre per esplorare;</li>
        <li>tra i 14 e i 24 mesi, il bambino cerca di riavvicinarsi alla madre: è una fase delicata, 
            perché se la madre scoraggia o frustra questo bisogno di riavvicinamento, il bambino può 
            vivere una frustrazione troppo intensa da gestire, con effetti negativi sullo sviluppo psichico;</li>
        <li>verso i 3 anni, il bambino raggiunge un’identità definita e relativamente stabile, 
            ottenendo un grado di costanza dell’oggetto (cioè la capacità di mantenere un’immagine 
            stabile e positiva della persona di riferimento, anche quando questa è assente o 
            in momenti di frustrazione).</li>
        </ul>
    </li>
</ul>

<h2>Edith Jacobson</h2>

<p>Un’altra autrice riconducibile alla Psicologia dell’Io è Edith Jacobson (1897-1978). 
    Il suo lavoro parte dalla teoria pulsionale di Freud, ma la rielabora inserendo anche 
    il ruolo dell’ambiente: nasce così un modello in cui natura (pulsioni) e ambiente 
    interagiscono tra loro.</p>

<p>Per Jacobson, libido e aggressività sono presenti alla nascita solo come potenzialità, 
    in una matrice indifferenziata — un concetto simile alla “psiche immatura indifferenziata” 
    già proposta da Hartmann. L’equilibrio tra libido e aggressività nella personalità di 
    ciascun individuo viene modellato dalle prime esperienze di vita: in condizioni normali, 
    la libido (alimentata dalle esperienze positive) prevale sull’aggressività (potenziata 
    invece dalle esperienze negative).</p>

<p>La stabilità emotiva delle prime relazioni determina quindi la base pulsionale della 
    persona. Poiché il neonato non è ancora in grado di distinguere sé stesso dagli altri, 
    la qualità delle prime esperienze influenzerà l’idea generale che l’individuo 
    svilupperà di sé e degli altri.</p>

<h2>Natura e cultura</h2>

<p>Per Jacobson, la natura umana nasce dall’incontro tra le pulsioni (in continuo sviluppo) 
    e le cure genitoriali offerte dall’ambiente esterno. In questo modo la teoria si sposta 
    da un modello puramente psicobiologico (come quello di Freud, centrato sulle pulsioni) 
    verso un modello più psicosociale (che include il peso delle relazioni e dell’ambiente).</p>

<p>Va comunque ricordato che, come per tutti gli psicologi dell’Io, anche per Jacobson 
    l’energia che alimenta le funzioni dell’Io resta quella pulsionale: libido e aggressività.</p>

<hr />

<h2>La psicologia dell’IO: Hartman, Spitz, Mahler (Approfondimento)</h2>

<h3>Hartmann: il confronto con Freud e con Darwin</h3>

<p>Per Freud, il bambino nasce completamente assorto in sé stesso, senza alcun orientamento 
    verso la realtà esterna. Solo quando scopre che i morsi della fame non si placano 
    “allucinando” il seno materno, il bambino si scontra con quello che Freud chiama 
    il <strong>muro della realtà</strong>: da questo scontro nascerebbero l’azione finalizzata 
    e il pensiero razionale (processo secondario).</p>

<p>Hartmann mette in discussione questa visione, pur partendo — come Freud — dalla teoria 
    evoluzionista di Darwin, ma interpretandola diversamente:</p>

<ul>
    <li>Freud sottolineava che, essendo l’uomo evoluto da altre specie animali, non fosse una 
        creatura del tutto diversa dagli animali (da qui il peso dato alle pulsioni, comuni 
        all’uomo e agli animali);</li>
    <li>Hartmann, invece, si concentra sul fatto che gli animali sono biologicamente progettati 
        per adattarsi bene all’ambiente in cui vivono, secondo il principio della sopravvivenza 
        del più adatto.</li>
</ul>

<p>Da qui il cambiamento proposto da Hartmann: l’essere umano nasce già predisposto ad adattarsi 
    al proprio ambiente, non solo a livello fisico ma anche psicologico. Il bambino arriverebbe 
    al mondo con le potenzialità dell’Io già presenti, pronte a svilupparsi non appena l’ambiente 
    offre condizioni “mediamente prevedibili” (cioè sufficientemente stabili e normali).</p>

<p>(Il resto della teoria di Hartmann — apparati di autonomia primaria, sfera dell’Io libera 
    da conflitti, ruolo delle cure genitoriali, il metodo scientifico — è già stato 
    trattato nel paragrafo precedente e qui viene confermato senza aggiungere elementi nuovi.)</p>

<h3>Spitz: come cambia il concetto di oggetto libidico</h3>

<p>Un elemento nuovo rispetto a quanto visto prima riguarda il modo in cui Spitz ridefinisce il 
    concetto di <strong>oggetto</strong> rispetto a Freud:</p>

<ul>
    <li>per Freud, l’oggetto è semplicemente il bersaglio delle pulsioni: l’individuo sente una 
        tensione interna e, in modo casuale, scopre nel mondo esterno oggetti utili a scaricare 
        questa tensione. L’oggetto è quindi casuale e strumentale, un semplice mezzo per la 
        scarica pulsionale;</li>
    <li>Spitz, invece, colloca la sua teoria a metà strada tra la teoria pulsionale di Freud e 
        le teorie delle relazioni oggettuali: conserva l’idea che la libido sia diretta al piacere, 
        ma sostiene che l’oggetto libidico non è un mezzo casuale per scaricare la tensione, 
        bensì una conquista evolutiva complessa. L’oggetto libidico non serve alla scarica 
        pulsionale, ma rappresenta il legame umano essenziale all’interno del quale si svolge 
        tutto lo sviluppo psicologico.</li>
</ul>

<p>Sulla “fusione psicologica”: la madre agisce da mediatore per il bambino, travolto alla nascita 
    da stimoli che non sa gestire. Attraverso un dialogo fatto di schemi interattivi ripetuti, 
    il bambino impara gradualmente a trasformare stimoli privi di senso in segnali significativi. 
    La “buona madre” è quella sensibile ai segnali non verbali del bambino, capace di interpretarli 
    correttamente e di rispondere in modo tempestivo: ogni risposta adeguata rafforza questo ciclo 
    di costruzione del significato.</p>

<p>Su questa base, Spitz aggiunge alla tradizionale sequenza dello sviluppo psicosessuale (basata 
    sulla scarica pulsionale) un secondo filo evolutivo: la crescita delle capacità dell’Io, che 
    nel primo anno di vita si costruisce attraverso trasformazioni cruciali nel rapporto con 
    l’oggetto libidico.</p>

<p>*(Indicatori, organizzatori psichici e la loro scansione temporale — sorriso, angoscia 
    dell’estraneo, padronanza del “no” — sono già stati trattati nel paragrafo precedente e 
    restano invariati.)*</p>

<h3>Mahler: nessun elemento sostanzialmente nuovo</h3>

<p>I contenuti su Mahler in questo approfondimento (funzione di specchio della madre, fasi della 
    separazione-individuazione) confermano quanto già scritto in precedenza, senza aggiungere 
    concetti ulteriori.</p>

<?php
$article_body = ob_get_clean();

require __DIR__ . '/../includes/layout/layout-article.php';
