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


<p>Nello studio della prima infanzia si sono sviluppati due approcci psicoanalitici distinti. 
<ul>
    <li>L'<strong>Infant Observation</strong> nasce in ambito clinico, con lo scopo di far conoscere allo 
    psicoterapeuta le prime fasi dello sviluppo infantile (è l'approccio di cui parliamo in questo capitolo)</li>
    <li>L'<strong>Infant Research</strong> nasce invece per avvicinare l'osservazione del bambino a una 
    visione più scientifica e sperimentale (prossimo capitolo)</li>
</ul>    




<h2>Il metodo ricostruttivo di Freud e i suoi limiti</h2>

<table class="mb-4">
  <thead>
    <tr>
      <th style="width:auto">Fase</th>
      <th style="width:110px;">Zona<br />erogena</th>
      <th>Conflitto</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Fase Orale (nascita fino ca. 18 mesi)</td>
      <td>Bocca</td>
      <td>Il bambino impara a fare i conti con la realtà e a segnalare i propri bisogni alla madre.</td>
    </tr>
    <tr>
      <td>Fase Anale (dai 18 mesi fino ca. 2 anni e ½, 3)</td>
      <td>Area anale</td>
      <td>Il bambino impara a rinunciare al piacere anale per assecondare i genitori procedendo nell'educazione sfinterica.</td>
    </tr>
    <tr>
      <td>Fase Fallica (dai 2 anni ½ a ca. 5/6 anni)</td>
      <td>Area genitale</td>
      <td>Complesso di Edipo</td>
    </tr>
    <tr>
      <td>Fase di latenza (dai 6 anni alla pubertà)</td>
      <td>Area genitale</td>
      <td>Lo sviluppo sessuale passa attraverso una fase di arresto. In questo periodo attraverso la scuola il bambino apprende i comportamenti sociali adattivi (regole e convenzioni della società).</td>
    </tr>
    <tr>
      <td>Fase genitale (l'età adulta)</td>
      <td>Area genitale</td>
      <td>Passaggio dall'autoerotismo allo stadio oggettuale della sessualità.</td>
    </tr>
  </tbody>
</table>

<p>Freud e la psicoanalisi classica studiavano la prima infanzia con il <strong>metodo ricostruttivo</strong>. Attraverso le
associazioni libere, lo psicoanalista faceva riemergere i ricordi dei pazienti adulti. Da questi ricordi ricostruiva le prime fasi
dello sviluppo.</p>

<p>Questo metodo ha però un limite. Lo sviluppo può anche essere concepito come diviso in 2 fasi. 
Una <strong>fase preverbale</strong> e una <strong>fase
verbale</strong>.</p> 

<p>Le associazioni libere e i sogni permettono di ricostruire solo la fase verbale, perché la fase preverbale non è
mai stata codificata in parole. L'unico modo per studiarla è osservare direttamente i bambini mentre la attraversano.</p>

<p>Per questo motivo gli <strong>psicologi dell'Io</strong> sostenevano che il metodo ricostruttivo (valido per la fase verbale)
andasse integrato con l'osservazione diretta (per la fase preverbale).</p>

<p><strong>Donald Winnicott</strong> fu il primo a proporre questa stessa distinzione, con due termini:</p>
<ul>
    <li>il <strong>"profondo"</strong>: è la vita fantasmatica del paziente (ricordi e sogni) ricostruiti in analisi</li>
    <li>il <strong>"precoce"</strong>: è l'ambiente che ha sostenuto l'Io del bambino, che emerge dall'osservazione diretta</li>
</ul>

<!--
<p>Questa distinzione è stata ripresa e <strong>riformulata</strong> nel 1971 da <strong>Hanna Kennedy</strong>, in un
articolo su "The Psychoanalytic Study of the Child". Kennedy parla di <strong>approccio genetico-ricostruttivo</strong> (i
ricordi del bambino o dell'adulto emersi in analisi, che non coincidono con le esperienze realmente vissute) e di
<strong>approccio evolutivo</strong> (le esperienze precoci osservate direttamente, così come sono accadute).</p>
-->





<h2>L'osservazione diretta di Anna Freud</h2>
<img XXclass="zoomable" src="/assets/images/anna-freud.webp" />
<p>Tra il 1940 e il 1945, <strong>Anna Freud</strong> supervisionò un programma di osservazione su <strong>80 bambini</strong>, dai
10 giorni di vita in su.</p>

<p>Un quinto di loro era stato accolto insieme alla madre: questo permetteva di osservare sia bambini con la madre sia bambini
soli.</p>
<p>I bambini venivano semplicemente osservati. L'obiettivo era capire se le teorie della psicoanalisi classica fossero corrette, 
o se andassero approfondite e migliorate</p>

<p>Lo studio confermò diversi punti della teoria classica:</p>
<ul>
<li>le fasi orale, anale e fallica si fondono l'una con l'altra nei momenti di transizione, come previsto da Freud</li>
<li>il <strong>processo primario</strong> (il pensiero pulsionale e irrazionale tipico dell'inconscio) si forma nel secondo anno di
vita. All'inizio il comportamento oscilla ancora tra principio di realtà e principio di piacere</li>
<li>un approccio terapeutico verso manifestazioni di forte aggressività porta a buoni risultati, cioè allo sviluppo di buoni
rapporti con gli altri.</li>
</ul>

<p>Anna Freud osservò anche alcune divergenze dalla teoria classica:</p>
<ul>
<li>la <strong>regressione totale</strong>: quando un bambino regredisce, non tornano indietro solo gli aspetti pulsionali, come
previsto da Freud, ma anche le funzioni dell'Io. Un bambino che vive un trauma, per esempio, può perdere capacità già acquisite,
come il linguaggio, non solo regredire nella fase psicosessuale;</li>
<li>la <strong>disarmonia evolutiva</strong>: fino ad allora si pensava che lo sviluppo psichico dipendesse soprattutto dalle
pulsioni. Anna Freud osserva invece che le pulsioni restano importanti, ma non bastano da sole. Anche la qualità delle cure 
genitoriali ricevute comincia a pesare quanto le pulsioni sullo sviluppo psichico del bambino.</li>
</ul>






<h2>Il protocollo dell'Infant Observation di Esther Bick</h2>
<img XXclass="zoomable" src="/assets/images/Esther-Bick.webp" />
<p>Dalle prime ricerche di Anna Freud si è sviluppato un metodo più strutturato, il protocollo dell'<strong>Infant
Observation</strong> definito da <strong>Esther Bick</strong>, per osservare i primi due anni di vita in modo:</p>
<ul>
    <li><strong>diretto</strong> (i comportamenti sono osservati e non ricostruiti dai ricordi)</li>
    <li><strong>partecipe</strong> (l'osservatore interagisce con la coppia madre-bambino, non è un osservatore neutro).</li>
</ul>
<p>Ciò che viene osservato è la relazione del bambino con la madre e con gli altri familiari, nella propria casa.</p>


<p>La tecnica consiste in una visita di circa <strong>un'ora, una volta a settimana, per i primi due anni</strong> di vita del
bambino. I genitori vengono contattati prima della nascita, per essere informati e decidere se partecipare.</p>

<p>Nel primo incontro l'osservatore spiega ai genitori che osserverà, senza dare consigli né esprimere giudizi, i momenti di vita
condivisa tra bambino e madre (la poppata, il bagnetto, l'andare a letto). Insieme si concordano gli orari delle visite e i periodi
di interruzione (per esempio le vacanze), definendo un protocollo temporale per i due anni.</p>

<img XXclass="zoomable" src="/assets/images/14/Screenshot 2026-10-04 173018.webp" />

<p>L'osservatore osserva tutti i momenti di relazione (gioco, nutrizione, bagnetto, addormentamento), 
senza giudicare, cercando soprattutto di cogliere il clima emotivo della relazione. Non prende appunti durante la visita, 
ma li scrive subito dopo.</p>

<p>Oltre alle visite settimanali, esistono incontri settimanali tra osservatori (in gruppi di 5-7 persone), in cui ciascuno condivide
la propria esperienza sotto la guida di un coordinatore, che a sua volta è stato un osservatore.</p>

<p>L'osservatore riceve una formazione intensa prima di iniziare, e continua a essere seguito attraverso questi gruppi. Deve
anche saper fare <strong>auto-osservazione</strong>: riconoscere le proprie reazioni emotive ed evitare di proiettarle sulla
coppia madre-bambino che sta osservando. Deve essere empatico verso la coppia, per comprenderne gli stati d'animo, ma allo
stesso tempo distaccato emotivamente, per non proiettare le proprie reazioni emotive su ciò che osserva.</p>



<h3>La circolarità tra procedura e teoria</h3>

<p>Uno dei problemi principali dell'osservazione psicoanalitica del bambino è il circolo vizioso tra metodo e teoria.</p>

<p>Chi osserva parte già con un'idea teorica in mente e tende a notare solo ciò che si aspetta di vedere. 
Quando trova ciò che cercava, lo usa per sostenere che la teoria è corretta. 
In questo modo il metodo conferma sempre e solo se stesso, senza un vero confronto oggettivo.</p>   

<p>Per il filosofo Karl Popper, questo meccanismo non è scientifico. 
La vera ricerca non serve a darsi ragione da sola, ma a mettere alla prova una teoria cercando prove che possano smentirla.</p>






<h2>L'osservazione per René Spitz</h2>
<img XXclass="zoomable" src="/assets/images/René-Spitz.jpg" />
<p>Tra il 1945 e il 1946 <strong>René Spitz</strong> supervisionò uno studio di osservazione su bambini
istituzionalizzati in due strutture diverse.</p>
<p>In questo periodo era sempre diffusa l'idea che convenisse tenere i bambini 
il più a lungo possibile nelle istituzioni prima di un'adozione.
Un'idea completamente smentita proprio dagli studi di Spitz e Robertson, che mostrarono gli effetti 
tragici della deprivazione precoce di cure genitoriali adeguate.</p>


<p>A differenza dell'Infant Observation, che osservava i bambini senza un piano predefinito, Spitz costruì un protocollo di
ricerca strutturato. Definì in anticipo la sua <strong>variabile dipendente</strong> (l'effetto che intendeva misurare): lo
<strong>sviluppo psicofisiologico globale</strong> del bambino. Questo comprendeva sei dimensioni:</p>
<ul>
<li>la percezione;</li>
<li>le funzioni corporee;</li>
<li>le relazioni sociali;</li>
<li>la memoria e l'imitazione;</li>
<li>le abilità di manipolazione;</li>
<li>l'intelligenza.</li>
</ul>
<p>Per ciascuna di queste dimensioni, Spitz definì anche criteri operativi precisi, cioè modi concreti per osservarle e
misurarle.</p>


<p>Nel suo studio del 45 le due strutture erano simili nella capacità di fornire alimentazione e cure pratiche, ma diverse 
per un aspetto cruciale: in una i bambini vivevano con le loro madri, nell'altra no, e in quest'ultima ogni membro del 
personale doveva occuparsi fino a 10 bambini, ricevendo quindi cure molto più povere.</p>


<p>Il metodo osservazionale applicato da Spitz prevedeva <strong>4 ore di osservazione a settimana per ogni bambino</strong>, 
seguito dalla nascita fino a circa 2 anni e mezzo, attraverso fotografie, video, test standardizzati.
Spitz controllò diverse variabili di disturbo, e osservò bambini di ambienti, paesi e condizioni socio-economiche diverse, 
e utilizzò interviste pre-strutturate con le madri o il personale di assistenza.</p>


<p>Da questo studio, Spitz elaborò una teoria sullo sviluppo delle emozioni: la capacità emozionale parte, nella prima infanzia, da due
reazioni fondamentali (piacere e dispiacere), per arrivare, verso la fine del primo anno, a una gamma emotiva già ampia. Lo
sviluppo emotivo precede gli altri sviluppi psicofisiologici, ed è alla base della formazione dei primi schemi mentali relazionali
(simili, per esempio, ai Modelli Operativi Interni della teoria dell'attaccamento).</p> 

<p>Spitz individuò tre indicatori-chiave di questo sviluppo, che chiamò "organizzatori psichici":</p>
<ul>
    <li>il <strong>sorriso</strong> (verso i 3 mesi, come risposta sociale)</li>
    <li>l'<strong>angoscia dell'estraneo</strong> (verso gli 8 mesi, legata alla capacità di distinguere la persona amata da tutte le
altre, e quindi all'inizio del legame di attaccamento)</li>
    <li>la <strong>padronanza del "no"</strong> (verso i 15 mesi, prima forma del Super-io e delle capacità di giudizio)</li>
</ul>


<p>Spitz osservò effetti drammatici della deprivazione genitoriale precoce: già verso i 6 mesi, alcuni bambini privi di madre
mostravano un pianto continuo, poi sostituito progressivamente da reazioni di evitamento simili a sintomi depressivi, con
espressioni del volto sempre meno diversificate e un contatto sempre più difficile. Se la madre (o una figura di allevamento
idonea) tornava, questi comportamenti regredivano rapidamente; se invece la deprivazione si prolungava, i sintomi peggioravano,
fino a comportamenti bizzarri e posture inusuali: una condizione clinica che Spitz chiamò <strong>depressione anaclitica</strong>.
</p>



<?php
$article_body = ob_get_clean();

require __DIR__ . '/../includes/layout/layout-article.php';
