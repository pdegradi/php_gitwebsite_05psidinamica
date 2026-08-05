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

<h2>Il processo circadiano e lo studio del sonno REM</h2>
<p>Il processo circadiano è regolato da indicatori temporali esterni, chiamati <strong>Zeitgeber</strong> ("datori di tempo"), il principale dei quali è il ciclo luce-buio, insieme a fattori ambientali e sociali (l'orario della cena, l'attività sportiva). Oltre al ciclo sonno-veglia, anche altre funzioni fisiologiche (come la temperatura corporea) e comportamentali (come l'orario dei pasti) seguono cicli circadiani.</p>

<h3>Le fasi del sonno REM durante la notte</h3>
<p>Attraverso la polisonnografia si osserva che il sonno, lungi dall'essere un processo passivo, si articola in fasi ben distinte: il primo episodio di sonno REM compare dopo circa 90 minuti dall'inizio del sonno, e in una notte di circa 8 ore se ne contano in media 4-5, con il primo che dura circa 20 minuti e i successivi 30-35 minuti. Il sonno profondo (stadio N3) prevale nella prima parte della notte, il sonno REM nella seconda. Durante il sonno REM il tracciato EEG somiglia a quello della veglia, l'EOG mostra movimenti oculari rapidi e l'EMG una drastica caduta del tono muscolare: questa fase corrisponde al periodo di maggiore incidenza di sogni, con circa il 70% dei risvegli durante il REM seguiti da un resoconto di sogno.</p>

<h3>I correlati neurobiologici del sonno REM</h3>
<p>Durante il sonno REM, i neuroni del <strong>tegmento pontino</strong> (nel tronco encefalico) inviano segnali a talamo e corteccia, generando la desincronizzazione EEG tipica di questa fase, e al midollo spinale, responsabile della perdita di tono muscolare. Gli studi di neuroimaging mostrano che durante il sonno REM si attivano il tegmento pontino, l'amigdala e la corteccia paraippocampale, il cingolo anteriore e il talamo, mentre si disattivano il cingolo posteriore e la corteccia prefrontale dorso-laterale: la forte attivazione di aree limbiche durante il REM è stata collegata alla valenza emotiva tipica dei sogni.</p>

<h3>Il sonno nella prima infanzia</h3>
<p>La distinzione in quattro fasi (REM e i tre stadi NREM) non è presente fin dall'inizio: dalla nascita fino a circa il sesto mese di vita, il sonno si divide in due sole fasi, il <strong>sonno attivo</strong> (il futuro sonno REM, che occupa circa il 50% del sonno totale — una proporzione molto più alta che nell'età adulta, collegata all'importanza dell'apprendimento emotivo nei primi anni di vita) e il <strong>sonno tranquillo</strong> (il futuro sonno NREM, altrettanto il 50%, non ancora suddiviso in sotto-fasi). Nel documentario "Wide Awake" di Alan Berliner, che racconta il proprio disturbo del sonno nel momento in cui diventa padre, si osservano bene questi due stati: fasi di sonno profondo e immobile, e fasi di sonno attivo in cui il neonato sorride e muove il volto ed è possibile osservare movimenti oculari.</p>

<h3>La fase di addormentamento</h3>
<p>Generalmente si impiegano 15-20 minuti per passare da uno stato vigile ad assonnato e poi al sonno leggero, senza una percezione precisa del momento esatto: per convenzione si parla di sonno conclamato a partire dallo stadio N2.</p>

<h3>I metodi di indagine nello studio del sonno</h3>
<p>La <strong>polisonnografia</strong>, condotta in laboratorio per due notti (la prima di adattamento, la seconda di misurazione), è costosa, invasiva e artificiosa: spesso la notte di adattamento, scomoda per la persona non abituata all'ambiente, è dormita peggio, per cui la notte successiva di misurazione tende a mostrare un sonno "di recupero" migliore di quello abituale. L'<strong>attigrafia</strong> (un dispositivo da polso, o da caviglia nei bambini) permette di valutare il sonno in ambiente naturale per periodi più lunghi e a basso costo, ma misurando solo il movimento confonde talvolta l'assenza di movimento con il sonno vero e proprio. I <strong>diari del sonno</strong> permettono un'osservazione sistematica e naturale ma non misurano gli indici fisiologici; i <strong>questionari sul sonno</strong> danno una stima retrospettiva della qualità percepita, ma non sistematica. È quindi raccomandata la combinazione di più tecniche.</p>

<h3>Le variabili della continuità del sonno</h3>
<p>Tra le variabili che misurano la continuità del sonno: il <strong>tempo totale a letto</strong>, il <strong>tempo totale di sonno</strong>, il <strong>tempo totale dedicato al sonno</strong>, la <strong>latenza di addormentamento</strong>, l'<strong>indice di efficienza del sonno</strong> (rapporto tra tempo di sonno e tempo a letto: più alto, migliore la qualità), il <strong>tempo di veglia notturna</strong> e il <strong>risveglio precoce</strong>. Queste variabili si ottengono con polisonnografia, attigrafia e diari del sonno, solo in parte con i questionari.</p>

<h3>Le variabili dell'architettura del sonno</h3>
<p>L'architettura del sonno si misura invece attraverso la durata dei diversi stadi (N1, N2, N3, REM), la loro latenza (il tempo che intercorre dall'inizio del sonno al raggiungimento di ciascuno stadio) e la densità dei movimenti oculari rapidi durante la fase REM: variabili identificabili solo attraverso la polisonnografia.</p>

<h3>Perché dormiamo?</h3>
<p>Una domanda rimasta a lungo senza risposta chiara: come scriveva <strong>Allan Rechtschaffen</strong> nel 1978, "se il sonno non servisse a qualche funzione vitale, sarebbe il più grave errore dell'evoluzione". Nonostante i progressi delle conoscenze, non esiste ancora una risposta definitiva, probabilmente perché il sonno, come la veglia, svolge diverse funzioni insieme: emotive, cognitive e sociali.</p>

<h3>Le alterazioni del sonno nei disturbi mentali</h3>
<p>Una metanalisi ha confrontato, in pazienti con diversi disturbi mentali rispetto a soggetti sani, tre variabili: la <strong>continuità del sonno</strong> (efficienza, tempo totale di sonno, latenza di addormentamento), la <strong>profondità del sonno</strong> (durata del sonno NREM) e la <strong>pressione del sonno REM</strong> (durata, latenza e densità del REM). La continuità del sonno risultava alterata in quasi tutti i disturbi (tranne il disturbo esternalizzante e il disturbo affettivo stagionale); anche profondità e pressione REM mostravano differenze, seppure meno marcate. Le due ultime variabili risultavano inoltre particolarmente associate alla comorbilità tra più diagnosi psichiatriche: la continuità del sonno emerge quindi come una variabile centrale nella psicopatologia.</p>

<h3>Il sonno e le emozioni (Beattie e colleghi, 2015)</h3>
<p>Una rassegna del 2015 ha riassunto gli studi su deprivazione o cattiva qualità del sonno e regolazione emotiva, utilizzando neuroimaging, misure fisiologiche, comportamentali e di intelligenza emotiva. I risultati mostrano un forte effetto della qualità del sonno sui processi affettivi: chi dorme male o poco mostra una ridotta espressività facciale, difficoltà nel riconoscere le emozioni, maggiore reattività emozionale e una correlazione negativa tra qualità del sonno e intelligenza emotiva.</p>

<h3>Il sonno e la reattività dell'amigdala a stimoli visivi</h3>
<p>In uno studio di neuroimaging, studenti universitari sani deprivati di sonno, rispetto a un gruppo che aveva dormito normalmente, mostravano una maggiore reattività dell'amigdala di fronte a immagini emotivamente negative, con un'alterazione dei circuiti che connettono la corteccia prefrontale (che normalmente regola le risposte emotive) all'amigdala: la mancanza di sonno sembra quindi compromettere proprio i processi corticali che ci aiutano a controllare le emozioni.</p>

<h3>L'ipotesi del sonno REM (Matthew Walker)</h3>
<p>Da questi studi nasce l'<strong>ipotesi del sonno REM</strong>, proposta da Matthew Walker, che parte dalla definizione di memoria emotiva come composta da un ricordo e da un tono affettivo ad esso legato.</p>


<?php
$article_body = ob_get_clean();

require __DIR__ . '/../includes/layout/layout-article.php';
