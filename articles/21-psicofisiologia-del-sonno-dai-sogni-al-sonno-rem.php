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
<h2>Il sogno secondo Freud e la scoperta del sonno REM</h2>

<p>Nel 1900 Freud pubblica "L'interpretazione dei sogni", dove definisce il sogno come la realizzazione di un desiderio. È la
soddisfazione allucinatoria di un desiderio infantile rimosso che, attraverso il lavoro onirico, produce un sogno manifesto
dietro cui si nasconde un sogno latente. Con Freud, sonno e sogno smettono di essere considerati processi passivi.</p>

<p>Prima di Freud il sonno era visto come un processo passivo. Nel 1912 Coriat lo definiva "uno stato passivo di assoluto riposo
del cervello". Anche nell'arte di fine Ottocento il sonno era raffigurato come una sorta di morte reversibile.</p>


<p>Nel 1953 <strong>Eugene Aserinsky</strong> e <strong>Nathaniel Kleitman</strong>, osservando il sonno di alcuni bambini,
notarono fasi con movimenti oculari rapidi sotto le palpebre e un tracciato EEG desincronizzato, simile a quello della veglia.
Questa fase, trovata poi anche negli adulti, venne chiamata sonno <strong>REM</strong> (Rapid Eye Movements, movimenti oculari
rapidi).</p>






<h2>I due processi che regolano il sonno (Borbély, 1982)</h2>
<p>Secondo Borbély, il sonno è regolato da due processi:</p>
<img XXclass="zoomable" src="/assets/images/Borbély.webp" />
<ul>
    <li>il <strong>processo omeostatico</strong>: è il meccanismo biologico che regola il bisogno di dormire in base 
    alla durata della veglia precedente. Più a lungo restiamo svegli, più la "pressione del sonno" cresce. 
    <br /><br />
    Gli stati
    di veglia sono regolati da un sistema di cellule e fibre nervose nel tronco encefalico, la <strong>formazione reticolare
    attivante</strong>. Quando questo sistema si inibisce, si entra nel sonno profondo. L'equilibrio tra sonno e veglia è 
    regolato dall'inibizione reciproca tra il sistema di veglia e il <strong>nucleo preottico ventro-laterale</strong>, 
    considerato oggi l'interruttore che fa passare il cervello dalla veglia al sonno.
    </li>
    <li>il <strong>processo circadiano</strong> (processo C), che è l'orologio biologico interno, regolato soprattutto 
    dal ciclo luce-buio e da stimoli sociali come l'orario della cena.
    <br /><br />
    Sonno e veglia sono cicli circadiani con un ritmo di circa 24 ore, regolati
    dall'orologio biologico, la cui base neurobiologica è il <strong>nucleo ipotalamico sopra-chiasmatico</strong>.
    Il processo circadiano è regolato anche da segnali temporali esterni, chiamati <strong>Zeitgeber</strong>. Il
    principale è il ciclo luce-buio, ma contano anche altri fattori ambientali e sociali, come l'orario della cena o l'attività
    sportiva. Non è solo il ciclo sonno-veglia a seguire un ritmo circadiano: anche altre funzioni fisiologiche (come la temperatura
    corporea) e comportamentali (come l'orario dei pasti) fanno lo stesso.
    </li>
</ul>



<h2>Lo studio del sonno REM</h2>



<h3>Lo studio del sonno</h3>
<p>Il sonno si studia con la <strong>polisonnografia</strong>, una tecnica che misura insieme l'attività cerebrale (EEG), i
movimenti oculari (EOG) e il tono muscolare (EMG).</p> 

<p>Grazie a questa tecnica sappiamo che il sonno non è affatto un processo
passivo: si articola in fasi ben distinte. Il primo episodio di sonno REM compare dopo circa 90 minuti dall'inizio del sonno. In
una notte di circa 8 ore se ne contano in media 4-5, con il primo che dura circa 20 minuti e i successivi 30-35 minuti. Il sonno
profondo (stadio N3) prevale nella prima parte della notte, il sonno REM nella seconda.</p>


<p>Durante il sonno REM, il tracciato EEG somiglia a quello della veglia, l'EOG mostra movimenti oculari rapidi, e l'EMG mostra
una drastica caduta del tono muscolare. Questa fase corrisponde al periodo di maggiore incidenza di sogni: circa il 70% dei
risvegli durante il REM è seguito da un resoconto di sogno.</p>


<img XXclass="zoomable" src="/assets/images/21/tegmento-pontino.webp" />
<p>Durante il sonno REM, i neuroni del <strong>tegmento pontino</strong> (una zona del tronco encefalico) inviano segnali a
talamo e corteccia, generando la desincronizzazione EEG tipica di questa fase. Inviano segnali anche al midollo spinale,
responsabile della perdita di tono muscolare.</p> 

<p>Gli studi di neuroimaging mostrano che durante il sonno REM si attivano il
tegmento pontino, l'amigdala e la corteccia paraippocampale, il cingolo anteriore e il talamo, mentre si disattivano il cingolo
posteriore e la corteccia prefrontale dorso-laterale. Questa forte attivazione delle aree limbiche (legate alle emozioni) è
stata collegata alla valenza emotiva tipica dei sogni.</p>






<h3>Il sonno nella prima infanzia</h3>
<p>La distinzione in quattro fasi (REM e i tre stadi NREM) non è presente fin dall'inizio. Dalla nascita fino a circa il sesto
mese di vita, il sonno si divide in due sole fasi. Il <strong>sonno attivo</strong> è il futuro sonno REM: occupa circa il 50%
del sonno totale, una proporzione molto più alta che nell'età adulta, collegata all'importanza dell'apprendimento emotivo nei
primi anni di vita. Il <strong>sonno tranquillo</strong> è il futuro sonno NREM, altrettanto il 50%, e non è ancora suddiviso in
sotto-fasi.</p>







<h2>Misurare il sonno</h2>

<p>Generalmente si impiegano 15-20 minuti per passare da uno stato vigile ad assonnato, e poi al sonno leggero, senza che ci sia
una percezione precisa del momento esatto in cui ci si addormenta.</p>

<p>Per convenzione si parla di sonno conclamato a partire dallo stadio N2</p>

<p>Per studiare il sonno si usano diverse tecniche, ciascuna con vantaggi e limiti:</p>
<ul>
<li>
la <strong>polisonnografia</strong>, condotta in laboratorio per due notti (la prima di adattamento, la seconda di
misurazione), è costosa, invasiva e artificiosa. Spesso la notte di adattamento, scomoda per chi non è abituato all'ambiente,
viene dormita peggio: per questo la notte successiva di misurazione tende a mostrare un sonno "di recupero" migliore di quello
abituale</li>
<li>
l'<strong>attigrafia</strong> (un dispositivo da polso, o da caviglia nei bambini) permette di valutare il sonno in
ambiente naturale, per periodi più lunghi e a basso costo, ma misurando solo il movimento confonde talvolta l'assenza di
movimento con il sonno vero e proprio<br />
<img XXclass="zoomable" src="/assets/images/21/attigrafia.png" />
</li>
<li>i <strong>diari del sonno</strong> permettono un'osservazione sistematica e naturale, ma non misurano gli indici
fisiologici;</li>
<li>i <strong>questionari sul sonno</strong> danno una stima retrospettiva della qualità percepita, ma non sistematica.</li>
</ul>
<p>È quindi raccomandata la combinazione di più tecniche.</p>



<p>Tra le variabili che misurano la continuità del sonno troviamo: </p>
<ul>
    <li>il <strong>tempo totale a letto</strong></li>
    <li>il <strong>tempo totale di sonno</strong></li>
    <li>il <strong>tempo totale dedicato al sonno</strong></li>
    <li>la <strong>latenza di addormentamento</strong></li>
    <li>l'<strong>indice di efficienza del sonno</strong> (il rapporto tra tempo di sonno e tempo a letto: più è alto, migliore è la
qualità del sonno)</li>
    <li>il <strong>tempo di veglia notturna</strong></li>
    <li>il <strong>risveglio precoce</strong></li>
</ul>    
<p>Queste variabili si ottengono con polisonnografia, attigrafia e diari del sonno, e solo in parte con i questionari.</p>


<p>L'architettura del sonno si misura invece attraverso la durata dei diversi stadi (N1, N2, N3, REM), la loro latenza (il
tempo che intercorre dall'inizio del sonno al raggiungimento di ciascuno stadio) e la densità dei movimenti oculari rapidi
durante la fase REM. Sono variabili identificabili solo attraverso la polisonnografia.</p>






<h2>A cosa serve il sonno?</h2>

<p>Perché dormiamo? È una domanda rimasta a lungo senza risposta chiara. Nonostante i progressi delle
conoscenze, non esiste ancora una risposta definitiva. Probabilmente perché il sonno, come la veglia, svolge insieme diverse
funzioni: emotive, cognitive e sociali.</p>


<p>Una metanalisi ha confrontato pazienti con diversi disturbi mentali e soggetti sani su tre variabili:</p> 
<ul>
    <li>la <strong>continuità del sonno</strong> (efficienza, tempo totale di sonno, latenza di addormentamento)</li>
    <li>la <strong>profondità del sonno</strong> (durata del sonno NREM)</li>
    <li>la <strong>pressione del sonno REM</strong> (durata, latenza e densità del REM)</li>
</ul>
<p>La continuità del sonno risultava alterata in quasi tutti i disturbi. La continuità del sonno emerge quindi 
come una variabile centrale nella psicopatologia</p>


<p>Una rassegna del 2015 ha riassunto gli studi su deprivazione o cattiva qualità del sonno e regolazione emotiva, utilizzando
neuroimaging, misure fisiologiche, comportamentali e di intelligenza emotiva. I risultati mostrano che chi dorme male o poco 
mostra una ridotta espressività facciale, difficoltà nel riconoscere le emozioni, una maggiore reattività emozionale e 
una correlazione negativa tra qualità del sonno e intelligenza emotiva.</p>
>
<p>In uno studio di neuroimaging, alcuni studenti universitari sani, privati di sonno, sono stati confrontati con un gruppo che
aveva dormito normalmente. Gli studenti privati di sonno mostravano una maggiore reattività dell'amigdala di fronte a immagini
emotivamente negative. La mancanza di sonno sembra quindi compromettere proprio i processi corticali che ci
aiutano a controllare le emozioni.</p>



<h3>L'ipotesi del sonno REM (Matthew Walker)</h3>
<p>Da questi studi nasce l'<strong>ipotesi del sonno REM</strong>, proposta da <strong>Matthew Walker</strong>.</p>

<p>Secondo questa ipotesi, la fase REM svolgerebbe una funzione importante per la memoria emotiva.<p>

<p>Ci permetterebbe di consolidare il ricordo di un evento, ma allo stesso tempo ridurrebbe,
fino quasi a cancellarlo, il <strong>tono affettivo</strong> (l'intensità emotiva) legato a quel ricordo. 

<p>Un evento traumatico, per esempio, viene spesso ricordato con precisione, ma la sua intensità emotiva tende a scemare nel tempo. 
Questa riduzione è importante: se non avvenisse, rimarremmo in uno stato di iper-attivazione, come accade nell'ansia eccessiva, dannosa per
l'organismo.</p>

<p>Amigdala e ippocampo, infatti, si attivano entrambi durante il sonno REM. Questa attivazione potrebbe essere associata al
recupero di informazioni emotive già acquisite. L'interazione tra i circuiti sotto-corticali e corticali, durante il sonno REM,
potrebbe inoltre favorire l'integrazione del nuovo materiale emotivo con le informazioni già apprese, permettendo di "vedere le
cose da una prospettiva più ampia".</p> 

<p>Secondo questa ipotesi, durante il sonno REM le esperienze emotive negative vengono
rielaborate: vengono confrontate con esperienze già vissute e la loro carica emotiva ne risulta ridotta.</p>


<?php
$article_body = ob_get_clean();

require __DIR__ . '/../includes/layout/layout-article.php';
