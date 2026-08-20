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






<h2>Psicoanalisi e neuroscienze: introduzione al sistema nervoso</h2>
<p>Il cervello può essere definito come un <strong>sistema di elaborazione dell'informazione</strong>, contenente un numero enorme di
cellule nervose, i <strong>neuroni</strong>. Ogni neurone può connettersi con migliaia di altri, e queste connessioni sono alla
base di tutti i funzionamenti mentali: pensieri, sentimenti, percezioni, comportamenti.</p>



<h3>I neuroni</h3>
<p>Il neurone è composto da tre parti principali: il <strong>soma</strong> (o corpo cellulare), che contiene il nucleo; i
<strong>dendriti</strong>, prolungamenti ramificati che costituiscono la "zona di input", attraverso cui il neurone riceve
informazioni dagli altri neuroni; e l'<strong>assone</strong>, un prolungamento singolo che costituisce la "zona di output",
attraverso cui il neurone trasmette informazioni.</p>



<h3>Le sinapsi e la trasmissione sinaptica</h3>
<p>L'informazione passa da un neurone all'altro attraverso punti di contatto chiamati <strong>sinapsi</strong>, composte da tre parti:
la <strong>zona pre-sinaptica</strong> (il rigonfiamento finale dell'assone, detto bottone sinaptico), la <strong>membrana
post-sinaptica</strong> (sulla superficie di un dendrite, o talvolta del soma) e la <strong>fessura sinaptica</strong> (lo spazio
tra le due). Quando l'attività elettrica arriva in fondo all'assone, le <strong>vescicole sinaptiche</strong> della zona
pre-sinaptica rilasciano nella fessura una sostanza chimica, il <strong>neurotrasmettitore</strong>, che viene catturato dai
recettori della membrana post-sinaptica, producendo lì una variazione elettrica: il segnale viaggia quindi elettricamente dentro il
neurone, e chimicamente tra un neurone e l'altro.</p>



<h3>Le spine dendritiche e la plasticità neuronale</h3>
<p>Sui dendriti si trovano piccole escrescenze chiamate <strong>spine dendritiche</strong>, che stanno assumendo grande importanza in
psicobiologia perché la loro struttura e funzione possono essere modificate dall'esperienza (per esempio da un farmaco, ma anche
dagli effetti di una psicoterapia). Questa capacità del cervello di essere modificato dall'esperienza si chiama <strong>plasticità
neuronale</strong>, ed è fondamentale per comprendere il contributo delle neuroscienze allo studio delle prime fasi dello sviluppo
psichico.</p>



<h3>Le cellule gliali</h3>
<p>Oltre ai neuroni, il cervello contiene le <strong>cellule gliali</strong>, che a differenza dei neuroni continuano a essere
prodotte per tutta la vita. Un tipo di cellule gliali, gli <strong>oligodendrociti</strong>, produce la <strong>mielina</strong>,
un rivestimento che ricopre gli assoni e ne influenza la velocità di trasmissione del segnale (il loro equivalente fuori dal
sistema nervoso centrale sono le <strong>cellule di Schwann</strong>). Poiché ogni cellula gliale ricopre solo un tratto limitato
di assone, tra un segmento di mielina e l'altro restano piccoli intervalli, chiamati <strong>nodi di Ranvier</strong>.</p>



<h3>Il segnale elettrico dei neuroni</h3>
<p>A riposo, tra l'interno e l'esterno della membrana del neurone esiste una lieve differenza elettrica, il <strong>potenziale di
riposo</strong>, dovuta alla diversa concentrazione di ioni a carica positiva e negativa e alla permeabilità selettiva della
membrana. La cellula a riposo è ricca di ioni potassio (K+, a carica positiva) e ioni a carica negativa; la membrana lascia passare
più facilmente gli ioni K+ che altri ioni positivi come il sodio (Na+): la fuoriuscita di K+ rende l'interno della cellula più
negativo rispetto all'esterno, finché il flusso di K+ in uscita non si bilancia con quello in entrata (attratto dalla carica
negativa interna).</p>



<h3>La generazione del segnale</h3>
<p>Quando uno stimolo rende la membrana molto più permeabile agli ioni Na+, l'interno diventa più positivo dell'esterno e si genera un
<strong>potenziale d'azione</strong>: un rapido cambiamento elettrico che viaggia lungo l'assone. I <strong>potenziali eccitatori
post-sinaptici</strong> abbassano il potenziale di riposo e facilitano il potenziale d'azione, mentre i <strong>potenziali
inibitori post-sinaptici</strong> lo innalzano, ostacolandolo.</p>



<h3>Il sistema nervoso centrale e periferico</h3>
<p>Il sistema nervoso si divide in <strong>sistema nervoso centrale</strong> (SNC: cervello e midollo spinale) e <strong>sistema
nervoso periferico</strong> (SNP: tutto il resto), composto da nervi che informano il SNC sull'ambiente e trasmettono i suoi
comandi al corpo, suddivisi in nervi craniali, nervi spinali e <strong>Sistema Nervoso Autonomo</strong> (SNA). Il SNA, controllato
dal SNC, si divide a sua volta in <strong>sistema simpatico</strong> (che prepara il corpo all'azione: aumenta pressione, battito
cardiaco, dilata le pupille) e <strong>sistema parasimpatico</strong>, che agisce spesso in opposizione al primo, garantendo un
controllo accurato delle funzioni corporee.</p>



<h3>Il sistema nervoso centrale: il cervello</h3>
<p>Il cervello è diviso in emisferi, la cui superficie forma <strong>giri</strong> separati da <strong>solchi</strong>. Le principali
regioni (lobi) sono la regione frontale, parietale, temporale e occipitale. Le immagini cerebrali mostrano parti bianche (dominate
dalla mielina) e parti grigie (dominate dai corpi cellulari). Cervello e midollo spinale sono protetti da tre membrane, le
<strong>meningi</strong>: dura madre, aracnoide e pia madre; lo spazio interno all'aracnoide contiene il <strong>liquido
cerebrospinale</strong>.</p>



<h3>Il liquido cerebrospinale e il sistema vascolare</h3>
<p>Il liquido cerebrospinale è prodotto dal <strong>plesso coroideo</strong> (una porzione riccamente vascolarizzata dei
<strong>ventricoli cerebrali</strong>) e ha due funzioni: proteggere il SNC facendo da cuscinetto contro le strutture ossee, e
mediare gli scambi di materiali e la rimozione dei prodotti di scarto tra vasi sanguigni e tessuto cerebrale. Il cervello, che
lavora intensamente, riceve il sangue attraverso le arterie carotidee e le arterie vertebrali.</p>



<h3>Le procedure sperimentali per studiare il cervello</h3>
<p>Il cervello può essere studiato nella sua struttura o nel suo funzionamento: l'<strong>elettroencefalografia</strong> (EEG)
registra l'attività cerebrale tramite elettrodi sullo scalpo; la <strong>tomografia assiale computerizzata</strong> (TAC) integra
immagini a raggi X per mostrare anatomia e struttura; la <strong>tomografia a risonanza magnetica</strong> (MRI) genera immagini
strutturali molto dettagliate senza raggi X, tramite radiofrequenze e campi magnetici; la <strong>tomografia a emissione di
positroni</strong> (PET) misura il funzionamento cerebrale attraverso sostanze radioattive iniettate nei vasi sanguigni; la
<strong>risonanza magnetica funzionale</strong> (fMRI) valuta il funzionamento cerebrale misurando il consumo di ossigeno nelle
diverse aree durante un compito.</p>






<h2>Psicoanalisi e neuroscienze: emozioni e memoria</h2>



<h3>Dall'inconscio rimosso all'inconscio implicito</h3>
<p>Come già visto più volte, il concetto di inconscio si è evoluto dall'interpretazione classica di Freud (un <strong>inconscio
rimosso</strong>, fatto di esperienze traumatiche allontanate dalla coscienza) a un'interpretazione più moderna:
l'<strong>inconscio implicito</strong>, cioè l'insieme di rappresentazioni generali implicite di interazioni tipiche che fungono da
modello di ciò che dobbiamo credere e aspettarci.</p>



<h3>La memoria rimossa e la memoria implicita</h3>
<p>In entrambe le interpretazioni, l'inconscio è un depositarsi nella memoria di rappresentazioni affettive legate alle esperienze e
alle fantasie vissute fin dall'inizio della vita: la differenza sta nel modo in cui questa memoria viene concepita, come vedremo,
distinguendo la memoria rimossa dalla memoria implicita.</p>


<?php
$article_body = ob_get_clean();

require __DIR__ . '/../includes/layout/layout-article.php';
