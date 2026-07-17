# Framework PHP → sito statico

Piccolo framework PHP senza database obbligatorio, pensato per essere convertito in un sito
statico HTML (GitHub Pages, Vercel, ecc.) tramite `build-static.php`.

## Funzionamento
Il framewor può essere usato in due modalità
- uso il framework php per creare un sito statico (un poc ome fa astro). Prima lo creo con php e alla fine genero file html
- creo il mio sito usando il framework php
Per avviare il framework usare `avvia_sito.bat`
Se cambio framework o ne creo uno nuovo aggiornare `avvia_sito.bat` puntamenti a exe di php e mariadb (se usato db)

### Framework come generatore sito statico
Scrivo il mio sito in php e alla fine quando devo fare deploy (esempio github pages) lancio l'eseguibile `build-static.bat` Questo bat richiama `build-static.php`. Su un nuovo framework prima di creare la versione statica aggiornare questi due files come segue:
- Nel file `build-static.bat` cambiare percorso a php 
- Nel file `build-static.php` cambiare variabili di configurazione poste all'inizio. Normalmente portebbe essere necessario solo `$siteUrl` per la generazione della sitemap e file robots nella cartella `dist`

## Framework php senza generare pagine statiche
Scrivo il mio sito in php e faccio il deploy della cartella root. In questo caso occorre alla fine generare la sitemap e il file robot. Per fare ciò:
- Nel file `crea_sitemap_robots.bat` cambiare percorso a php 
- Nel file `crea_sitemap_robots.php` necessario solo aggiornare variabile `$siteUrl`

## Struttura

```
includes/
  config.php           variabili condivise, registro articoli, config DB/sessione
  layout.php            layout HTML comune a tutte le pagine
  article-layout.php     layout comune agli articoli (si appoggia a layout.php)
  functions.php          funzioni helper (ordinamento, SEO, date, DB, sessioni)
  db-examples.php        esempi di query PDO, commentati, mai inclusi
  session-examples.php   esempi di sessioni/flash, commentati, mai inclusi
articles/
  *.php                  un file per articolo
  nome-articolo/*.part.php  capitoli opzionali di un articolo lungo
assets/                  css, js, immagini, font — copiati as-is nell'export
index.php, blog.php       pagine pubbliche in root
build-static.php          genera l'export statico in dist/
crea_sitemap_robots.bat   genera la sitemap e il file robots nella cartella root di php
```

## Convenzioni

- **File pubblico** = ogni `*.php` fuori da `includes/` e non terminante in `.part.php`.
  `build-static.php` li trova così, senza whitelist/blacklist manuali.
- **File interno** = tutto dentro `includes/`, sempre protetto da `FRAMEWORK_ENTRY` (403 se
  richiesto direttamente via URL).
- **Articolo diviso in capitoli**: `articles/pippo.php` include in ordine i file
  `articles/pippo/NN-titolo.part.php`. I `.part.php` sono esclusi dalla build ed hanno la
  stessa guardia `FRAMEWORK_ENTRY`.
- **Link interni**: sempre root-assoluti (`/blog.php`, `/assets/...`). `build-static.php` li
  riscrive in `.html` e antepone `$basePath` se il deploy è in una sottocartella.

## Build statica

```
php build-static.php
```

Rigenera `dist/` senza cancellarla: pulisce tutto tranne quanto elencato in
`$preserveInOutput` (default: `.git`, `.gitignore`, `robots.txt`), per poter tenere un
repository git dentro `dist/` tra una build e l'altra.

## Paginazione blog

`$blog_page_size` in `config.php`. Output: `blog.html`, `blog-2.html`, `blog-3.html`, ecc.
(nessuna sottocartella). In sviluppo si naviga con `blog.php?page=2`.

## Database e sessioni

Non attivi di default. `get_db_connection()` (PDO/MariaDB) e `start_app_session()` /
`flash_set()` / `flash_get()` / `flash_has()` sono pronte in `functions.php`; esempi d'uso
completi (SELECT/INSERT/UPDATE/DELETE, transazioni, login/logout, flash) sono commentati in
`includes/db-examples.php` e `includes/session-examples.php`.

`$app_debug` in `config.php` (`true`/`false`) controlla la visibilità degli errori:
mostrati a schermo in debug, solo loggati in produzione.

## Note

- Font e librerie (KaTeX) self-hosted: nessuna dipendenza da CDN esterne.
- Ogni pagina PHP viene eseguita in un processo CLI isolato durante la build: nessuno stato
  condiviso tra una pagina e l'altra.
