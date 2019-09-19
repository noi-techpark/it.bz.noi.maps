<?php include_once(dirname(__DIR__).'/bin/fetchDataNOI.class.php');
if(class_exists('fetchDataNOI')):
	$fetchDataNOI = new fetchDataNOI();
	$translations = $fetchDataNOI->translations;
	$localizedLinks = $fetchDataNOI->localizedLinks;
	$cookie_config = $fetchDataNOI->cookie_config;
endif;
$link_it = isset($localizedLinks) && isset($localizedLinks['privacy']) && isset($localizedLinks['privacy']['it']) ? $localizedLinks['privacy']['it'] : '#';
$link_en = isset($localizedLinks) && isset($localizedLinks['privacy']) && isset($localizedLinks['privacy']['en']) ? $localizedLinks['privacy']['en'] : '#';
$link_de = isset($localizedLinks) && isset($localizedLinks['privacy']) && isset($localizedLinks['privacy']['de']) ? $localizedLinks['privacy']['de'] : '#'; ?>
<!DOCTYPE html>
<html class="body-scrollable" lang="it">
<head>
	<title>NOI Techpark Maps</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no,width=device-width, initial-scale=1" />
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../src/css/style.css">
</head>
<?php $body_classes = array('default');
if(isset($_GET) && isset($_GET['totem']) && $_GET['totem'] == 1) :
	$body_classes[] = 'totem';
endif; ?>
<body class="<?php echo implode(' ',$body_classes); ?>">
	<div class="header">
		<div class="aux">
			<a class="logo" href="/">NOI Techpark Suedtirol/Alto Adige</a>
			<a href="/" class="main-site-title site-title">NOI Techpark Maps</a>
			<div class="language-selector-container">
				<div class="title-container">
					<span class="lang-close icon-close"><span class="icon translatable">Chiudi</span></span>
					<h2 class="translatable">Opzioni</h2>
				</div>
				<div class="language-container hide-on-mobile">
					<nav class="language-selector language-selector-desktop">
						<ul class="language-list">
							<li class="active"><a href="<?php echo $link_it; ?>" data-language="it" class="translatable language-tag">IT</a></li>
							<li><a href="<?php echo $link_en; ?>" data-language="en" class="translatable language-tag">EN</a></li>
							<li><a href="<?php echo $link_de; ?>" data-language="de" class="translatable language-tag">DE</a></li>
						</ul>
					</nav>
				</div>
				<div class="language-container hide-on-desktop">
					<p class="accent-color translatable">Scegli la lingua</p>
					<nav class="filters-dropdown dropdown language-selector">
						<span class="dropdown-trigger translatable language-tag" data-language="it">Italiano</span>
						<ul class="dropdown-list language-list">
							<li><a href="<?php echo $link_en; ?>" data-language="en" class="translatable language-tag">Inglese</a></li>
							<li><a href="<?php echo $link_de; ?>" data-language="de" class="translatable language-tag">Tedesco</a></li>
						</ul>
					</nav>
				</div>
			</div>
			<span class="menu-trigger icon-hamburger"><span class="icon translatable">Menu</span></span>
			<span class="lang-trigger icon-lang"><span class="icon translatable">Lingua</span></span>			
		</div>
	</div>
	<div class="main-content">
		<div class="content">
			<p>NOI Spa
			    <br /> Via Volta 13/A
			    <br /> I - 39100 Bolzano
			    <br /> Tel. +39 0471 066 600
			    <br /> Email: info@noi.bz.it
			    <br /> Cod. fisc. e P. IVA: 02595720216
			    <br /> Capitale sociale interamente versato: 110.740.000 €</p>

			<p>La presente Informativa sulla Privacy è resa da NOI Spa, con sede legale in Via Volta 13/A – 39100, Bolzano ai sensi degli artt. 4 e ss. del Regolamento generale sulla protezione dei dati n. 679/2016/UE e di tutte le altre leggi e regolamenti applicabili
			    in materia di protezione dei dati personali (di seguito, denominata, anche, “Normativa
			    <br /> Privacy Applicabile”).</p>

			<p>Nello specifico, Le forniamo le seguenti informazioni:
			    <br /> NOI Spa utilizzerà i Vostri dati per i seguenti scopi:</p>

			<ul>
			    <li>registrazione del Suo account;</li>
			    <li>invio di email e comunicazioni;</li>
			    <li>comunicazioni con Lei;</li>
			    <li>comunicazioni e operazioni IT;</li>
			    <li>gestione finanziaria;</li>
			    <li>procedimenti legali: creazione, esercizio e difesa di diritti;</li>
			    <li>adeguamento alla legge applicabile;</li>
			    <li>miglioramento del sito;</li>
			    <li>adempiere a eventuali obblighi contrattuali nei confronti dell’interessato, alla tutela del credito e gestione del debito.</li>
			</ul>
			<p>NOI Spa, Via Volta 13/A, I-39100 Bolzano (BZ), garantisce ai sensi della Normativa Privacy Applicabile che il trattamento dei dati personali avviene nel rispetto dei diritti fondamentali nonché della dignità dell’interessato, in particolare per quanto
			    riguarda la segretezza, l’identità personale, il diritto alla tutela degli stessi, nonché alla loro
			    <br /> cancellazione su richiesta dell’interessato.
			    <br /> In relazione alle finalità di cui sopra, i Vostri dati personali saranno comunicati se necessario:</p>

			<ul>
			    <li>alle Pubbliche Amministrazioni e Autorità, ove previsto dalla legge e dalla Normativa Privacy Applicabile;</li>
			    <li>a Istituti di credito con i quali la nostra società ha rapporti per la gestione dei crediti/debiti e l’intermediazione finanziaria;</li>
			    <li>a tutte quelle persone fisiche e/o giuridiche, pubbliche e/o private (quali, titolo indicativo e non esaustivo, studi di consulenza legale, amministrativa e fiscale, uffici giudiziari, Camere di Commercio), quando la comunicazione risulti necessaria
			        o funzionale allo svolgimento della nostra attività e nei modi e per le finalità sopra elencate.</li>
			</ul>
			<p>I dati saranno conservati per il periodo necessario all’esecuzione della prestazione o dell’incarico conferito nonché rispetto ad ogni altro obbligo di conservazione previsto dalla legge. I dati raccolti tramite sito web non saranno in alcun modo trasferiti
			    o comunicati verso Paesi terzi al di fuori dell’Unione Europea e non sono inseriti in processi decisionali automatizzati.</p>

			<p>I dati personali trattati dalla nostra società non sono soggetti a diffusione. Il trattamento potrà effettuarsi con o senza l’ausilio di mezzi elettronici e comunque automatizzati e comprenderà tutte le operazioni previste all’art. 4 comma 1, 2), Reg.
			    679/2016 e necessarie al trattamento in questione. Comunque il trattamento sarà effettuato nell’osservanza di ogni misura cautelativa, che ne garantisca la sicurezza e la riservatezza.
			    <br /> In ogni momento potrete esercitare i vostri diritti nei confronti del titolare del trattamento, ai sensi del Capo III del Reg. 679/2016.
			    <br /> In proposito, Le ricordiamo che i vostri diritti includono:</p>

			<ul>
			    <li>il diritto di non fornire a noi i Suoi dati personali (comunque, La preghiamo di notare che in tal caso noi potremmo non essere in grado di fornirle i vantaggi del sito);</li>
			    <li>il diritto di richiedere l’accesso ai, o copia dei, Suoi dati personali, unitamente alle informazioni connesse alla natura, al trattamento, alla divulgazione di detti dati personali;</li>
			    <li>il diritto di richiedere rettifiche di qualsivoglia inesattezza dei Suoi dati personali;</li>
			    <li>il diritto di richiedere, su basi legittime:
			        <ul>
			            <li>la cancellazione dei Suoi dati personali;</li>
			            <li>la limitazione del trattamento dei Suoi dati personali;</li>
			            <li>il diritto di contestare, su basi legittime, il trattamento da parte nostra o per nostro conto dei suoi dati personali;</li>
			            <li>il diritto di ottenere il trasferimento di dati personali verso altri titolari, in un formato strutturato, usato nella prassi e leggibile digitalmente, entro i fini applicabili;</li>
			            <li>allorché noi trattiamo i Suoi dati personali sulla base del Suo consenso, il diritto di ritirare il Suo consenso (posto che tale ritiro non inficia qualsivoglia trattamento legittimamente effettuato prima della data in cui noi riceviamo notizia
			                del ritiro stesso né evita il trattamento di Suoi dati personali fatto, facendo affidamento su ogni altra base legale); e</li>
			            <li>il diritto di presentare doglianze innanzi ad una Autorità Garante per la protezione dei dati personali in relazione al trattamento da parte nostra o per nostro conto dei Suoi dati personali.</li>
			        </ul>
			    </li>
			</ul>
			<p>Quanto sopra non pregiudica i Suoi diritti inderogabili. I diritti in oggetto possono essere esercitati, anche per il tramite di un incaricato, mediante richiesta rivolta al titolare: NOI Spa, Via Volta 13/A, I-39100 Bolzano (BZ) – Tel. +39 0471 066 600
			    - Email: info@noi.bz.it oppure al Responsabile per la protezione dei dati – Tel. 0471095085 – E-mail : info@inquiria.it - PEC : inquiria@pec.it</p>

			<p>Il titolare del trattamento in oggetto è:
			    <br /> NOI Spa nella persona del suo Legale Rappresentante
			    <br /> Via Volta 13/A
			    <br /> I-39100 Bolzano (BZ)
			    <br /> Tel. +39 0471 066 600
			    <br /> E-Mail: info@noi.bz.it
			    <br /> N. REA: BZ-190350
			    <br /> Partita IVA: IT 2595720216
			    <br /> Codice fiscale: 02595720216
			    <br /> Responsabile per il contenuto: NOI Spa</p>

			<p>Il Responsabile per la protezione dei dati nominato dal titolare del trattamento è:
			    <br /> GRUPPO INQUIRIA SRL
			    <br /> Telefono : 0471095085
			    <br /> E-mail : info@inquiria.it
			    <br /> PEC : inquiria@pec.it</p>

			<h2>Informazioni sui cookie</h2>

			<p>I cookie sono piccoli file di testo che vengono memorizzati da un sito web e utilizzando il browser sul disco rigido di un computer client per memorizzare piccole quantità di informazioni del sito per un periodo di tempo.
			    <br /> Generalmente, ci sono vari tipi di cookie; sono divisi in cookie tecnici e cookie di profilazione (cookie che vengono utilizzati per finalità di marketing e promozionali).
			    <br /> Questo sito web utilizza i cookie tecnici e di profilazione. Di seguito sono riportati i relativi dettagli.
			    <br /> Cookie tecnici sono importanti soprattutto per la funzionalità del sito. Ne fanno parte i cookie di navigazione e i cookie di sessione, che consentono una navigazione user-friendly del sito. Ci sono, inoltre, i cosiddetti Analytics-Cookie, che raccolgono
			    informazioni p.e. sul numero dei visitatori del sito o il percorso dei visitatori per il sito. Il gruppo dei cookie tecnici comprende anche i cookie funzionali, che permettono al sito di ricordare la Sua selezione effettuata (p.e. filtri da Lei impostati
			    o l’impostazione automatico della lingua di un sito web).
			    <br /> Inoltre, ci sono dei cookie che rilevano impostazioni, preferenze e le azioni dell'utente e per mezzo dei quali viene creato un profilo utente, i cosiddetti profiling cookie. Questo serve a combinare i messaggi pubblicitari con gli interessi degli
			    utenti e consente quindi una pubblicità mirata a determinati gruppi di utenti. Quando si apre una
			    <br /> pagina Web che utilizza questi cookie, viene visualizzato un banner che avvisa l'utente che gli operatori del sito utilizzano cookie per scopi di marketing. Inoltre avvisa l'utente indica che la pagina può eventualmente consentire cookie di terze
			    parti.
			    <br /> Il banner è collegato a una pagina con informazioni dettagliate (sulla quale Lei si trova ora), dove l'utente può rifiutare la memorizzazione dei cookie. Il banner offre la possibilità di esprimere il consenso dell'utente e visualizza un'indicazione
			    che proseguendo con la navigazione sulla pagina si consente automaticamente all’utilizzo dei cookie.
			    <br /> Un clic su informazioni dettagliate non implica necessariamente il consenso. Il banner non scompare dopo un certo tempo, ma rimarrà visualizzato fino a quando l'utente ha consentito, respinto o consapevolmente navigato oltre.
			    <br /> Siamo tenuti per legge a registrare e memorizzare la decisione dell'utente, quindi alla prossima visita dell’utente il banner non apparirà più.
			    <br /> Lei può anche rifiutare l'utilizzo dei cookie in modo generale o selettivo. Se non desidera accettare i nostri cookie, è possibile rifiutarli tramite il browser web. La funzione corrispondente varia da browser a browser; i relativi dettagli possono
			    essere trovati sotto. Si prega di notare che la mancata accettazione dei cookie può portare a limitazioni funzionali del sito.
			    <br /> Qui di seguito indichiamo, quali tecnologie, vengono utilizzate sulle nostre pagine, relative al loro utilizzo, per quale scopo, in che misura e di che tipo.
			    <br /> Può accadere che possono essere usati cosiddetti cookie di terze parti (cookie di altre inserzionisti).
			    <br /> Ulteriori informazioni sono disponibili nell'apposita sezione. È possibile bloccare i cookie di terze parti anche esplicitamente nelle rispettive impostazioni del browser.</p>

			<p>Panoramica dei cookie utilizzati</p>

			<ul>
			    <li>PHPSESSID: cookie tecnico per gestire il mantenimento di informazioni nella navigazione tra una pagina e l'altra (per esempio carrello acquisti)</li>
			    <li>__utmb: cookie di Google Analytics per tracciare approssimativamente la frequenza di rimbalzo sulle pagine</li>
			    <li>__utmz: cookie Google Analytics per tracciare la provenienza della richiesta (da link, da bookmark o da motore di ricerca...)</li>
			    <li>_dc_gtm_UA-1480760-1: cookie di Google Tag Manager inerente all'utilizzo Google Analytics</li>
			    <li>_ga: cookie di Google Analytics generale</li>
			    <li>cm_cookie_accept_noi_maps: cookie tecnico per gestire la barra del cookie disclaimer</li>
			    <li>DoubleClick: cookie di Google Adserver</li>
			</ul>
			<h3>Profiling cookie – Retargeting</h3>

			<p>A questo proposito segnaliamo che i profiling cookie utilizzati in questo sito non memorizzano dati personali e che non saranno generati profili di utilizzo con i Suoi dati personali. Attraverso i profiling cookie nessuna persona può essere identificata,
			    ma verranno memorizzate solo informazioni che consentono informazioni anonime per la
			    <br /> gestione mirata di campagne di marketing basate sugli interessi.
			    <br /> Se si vuole evitare l’utilizzo dei profiling cookie, li blocchi direttamente tramite il browser (vedi descrizione sotto).
			    <br /> La informiamo che per motivi promozionali è possibile che i profiling cookie vengono trasferiti a terzi o sistemi di terze parti come Facebook, Google, Instagram e altri. In questo momento valgono le norme sulla privacy dei rispettivi sistemi.</p>

			<h3>Monitoraggio Web - Web tracking - Google Analytics</h3>

			<p>Al fine di continuamente migliorare e ottimizzare il nostro servizio, usiamo le cosiddette tecnologie di tracciamento. Questo sito web utilizza Google Analytics, un servizio di analisi web fornito da Google, Inc. ("Google"). Google Analytics utilizza
			    dei cookie, che consentono l'analisi del Suo utilizzo del sito web con lo scopo di determinare l'attrattività dei nostri siti web e migliorarne le performances ed i contenuti. Le informazioni generate dal cookie sull'utilizzo del sito web (compreso
			    il Suo indirizzo IP) verranno trasmesse a un server di Google negli Stati Uniti e ivi memorizzate. A nome del gestore di questo sito, Google utilizzerà queste informazioni per valutare
			    <br /> l'utilizzo del sito web, compi-lare report sulle attività del sito web e fornire altri servizi collegati all’uso del sito e di internet per il gestore del sito web. Inoltre, queste informazioni saranno eventualmente trasferite da Google a terzi laddove
			    ciò sia imposto dalla legge o laddove tali terzi trattino le suddette informazioni per conto di Google e/o di altri service provider di analisi web. In nessun caso il Suo indirizzo IP verrà associato con altri dati di Google e/o di altri service provider
			    di analisi web.
			    <br /> Può rifiutarsi di usare i cookie selezionando l'impostazione appropriata sul Suo browser; ma segnaliamo che in questo caso eventualmente non potrà utilizzare tutte le funzionalità di questo sito web. È inoltre possibile impedire la registrazione
			    dei dati generati dal cookie e riguardanti l'utilizzo del sito web (incluso il Suo indirizzo IP) da parte di Google e il trattamento di tali dati da parte di Google, scaricando e installando il plugin per il browser disponibile sotto tools.google.com/dlpage/gaoptout.
			    <br
			    /> Per informazioni generali su Google Analytics e la protezione dei dati, vedere http://www.google.com/intl/de/analy-tics/learn/privacy.html.
			    <br /> Utilizzando il presente sito Lei acconsente al trattamento dei Suoi dati da parte di Google e/o altri servizi di analisi web nel modo precedentemente descritto e per gli scopi di cui sopra.</p>

			<p>Google Adwords Remarketing</p>

			<p>Usiamo Google Remarketing per riagganciare gli utenti della rete Google Display. Google utilizza i cookie, che vengono memorizzati sul Suo computer, per rendere possibile l’analisi del Suo utilizzo del sito web. Le informazioni generate dal cookie sull'utilizzo
			    del sito web (compreso il Vostro indirizzo IP) verranno trasmesse a un server di Google negli Stati Uniti e ivi memorizzate. Dall'indirizzo IP vengono poi detratte, da Google, le ultime tre cifre; un'assegnazione univoca dell'indirizzo IP non è quindi
			    più possibile.
			    <br /> Google rispetta la privacy policy del contratto "USA Safe Harbor" ed è registrato con il programma "Safe Harbor" del Dipartimento del Commercio statunitense.
			    <br /> Google utilizzerà queste informazioni per valutare l'utilizzo del sito web, compilare report sulle attività del sito web per gli operatori del sito web e fornire altri servizi collegati all’uso del sito web e di internet. Google può anche trasferire
			    queste informazioni a terzi ove richiesto dalla legge o laddove tali terzi trattino le suddette informazioni per conto di Google.
			    <br /> Fornitori di terze parti, tra cui Google, mostrano annunci su siti Internet. Fornitori di terze parti, tra cui Google, utilizzano i cookie memorizzati per mostrare annunci in base alle precedenti visite da parte di un utente su questo sito.
			    <br /> Google non assocerà il vostro indirizzo IP a nessun altro dato posseduto da Google.
			    <br /> È possibile disattivare l'utilizzo di cookie da parte di Google visitando la pagina per disattivare gli annunci di Google.
			    <br /> Si precisa, tuttavia, che in questo caso Lei potrebbe non essere in grado di utilizzare tutte le funzionalità di questo sito web.
			    <br /> Utilizzando il presente sito Lei acconsente al trattamento dei Suoi dati da parte di Google per le modalità sopra descritte e per gli scopi di cui sopra. La raccolta e l'archiviazione dei dati possono essere revocati in qualsiasi momento con effetto
			    per il futuro.
			    <br /> Su contenuti sensibili del sito con dati personali non viene utilizzato il remarketing.</p>

			<p>Google Adwords Conversion</p>

			<p>Questo sito web utilizza anche il Google Conversion Tracking. Qui, un cookie viene impostato sul computer da parte di Google Adwords, nel caso in cui Lei fosse giunta al nostro sito tramite un annuncio Google. Questi cookie scadono dopo 30 giorni e non
			    sono utilizzati per l'identificazione personale. Se l’utente visita determinate pagine
			    <br /> sul sito di un cliente Adwords, Google e il cliente possono vedere che l'utente ha fatto clic su un annuncio ed è stato reindirizzato a questa pagina. Ogni inserzionista Adwords riceve un cookie diverso. I cookie non possono quindi essere monitorati
			    sui siti web degli inserzionisti. Le informazioni ottenute tramite le informazioni dei
			    <br /> conversion cookie sono utilizzati per creare statistiche di conversione per i clienti AdWords che hanno optato per il monitoraggio delle conversioni. Gli inserzionisti sanno il numero totale di utenti che hanno fatto clic sul loro annuncio e che
			    sono stati inoltrati a una pagina fornita di un conversion-tracking-tag. Tuttavia, non riceveranno
			    <br /> informazioni, con le quali potrebbe essere possibile identificare gli utenti personalmente. Se non si desidera partecipare al processo di monitoraggio, è anche possibile di rifiutare l’impostazione del relativo cookie – p.e. tramite impostazione
			    del browser che disattiva in generale l'impostazione automatica dei cookie.
			    <br /> È inoltre possibile disattivare i cookie per il monitoraggio delle conversioni impostando il vostro browser per bloccare i cookie di dominio "www.googleadservices.com".</p>

			<p>Bloccare i cookie tramite le impostazioni del browser</p>

			<p>FIREFOX</p>

			<ul>
			    <li>Fare clic sul menu e scegliere Opzioni</li>
			    <li>Vai alla scheda Privacy</li>
			    <li>In "Cronologia" selezionare in "Impostazioni cronologia" "utilizza impostazioni personalizzate”</li>
			    <li>Deselezionare "Accetta i cookie dai siti"</li>
			</ul>
			<p>Per informazioni dettagliate, si prega di visitare il sito:
			    <br /><a href="https://support.mozilla.org/it/kb/Bloccare%20i%20cookie">https://support.mozilla.org/it/kb/Bloccare%20i%20cookie</a></p>

			<p>GOOGLE CHROME</p>

			<ul>
			    <li>Fare clic sul menu e scegliere Impostazioni</li>
			    <li>Fare clic su "Mostra impostazioni avanzate" in fondo</li>
			    <li>Fare clic sulla sezione "Privacy" su "Impostazioni contenuti ..."</li>
			    <li>Nei cookie selezionare "Impedisci ai siti di impostare dati"</li>
			    <li>Fare clic sul pulsante "Fine"</li>
			</ul>
			<p>Per informazioni dettagliate, si prega di visitare il sito:
			    <br /><a href="https://support.google.com/chrome/answer/95647?hl=it">https://support.google.com/chrome/answer/95647?hl=it</a></p>

			<p>INTERNET EXPLORER</p>

			<ul>
			    <li>Aprire la voce di menu "Strumenti" e poi "Opzioni Internet" o, se la barra dei menu non viene visualizzata, selezionare l'icona del menu e poi "Opzioni Internet"</li>
			    <li>Fare clic sulla scheda "Privacy"</li>
			    <li>È possibile scegliere tra diversi livelli di elaborazione dei cookie. Utilizzare il cursore. Se il controller è in alto, tutti i cookie sono bloccati, se è in fondo, tutti sono approvati</li>
			    <li>Fare clic sul pulsante "OK"</li>
			</ul>
			<p>Per informazioni dettagliate, si prega di visitare il sito:
			    <br /><a href="https://support.microsoft.com/it-it/products/windows?os=windows-10">https://support.microsoft.com/it-it/products/windows?os=windows-10</a></p>

			<p>SAFARI</p>

			<ul>
			    <li>Fare clic nelle impostazioni sulla "Privacy"</li>
			    <li>sezione "Cookie Accetta", è possibile determinare se e quando Safari dovrebbe salvare i cookie dei siti web. Per ulteriori informazioni, fare clic sul pulsante Guida (contrassegnato con il simbolo di un punto interrogativo)</li>
			</ul>
			<p>Per informazioni dettagliate, si prega di visitare il sito:
			    <br /><a href="https://support.apple.com/kb/PH5042?locale=en_US">https://support.apple.com/kb/PH5042?locale=en_US</a></p>

			<p>Visitando un sito web si possono ricevere cookie sia dal sito visitato ("proprietari"), sia da siti gestiti da altre organizzazioni ("terze parti"). Un esempio notevole è rappresentato dalla presenza dei "social plugin" per esempio Facebook, Twitter,
			    Google+. Si tratta di parti della pagina visitata generate direttamente dai suddetti siti ed
			    <br /> integrati nella pagina del sito ospitante. L'utilizzo più comune dei social plugin è finalizzato alla condivisione dei contenuti sui social network.
			    <br /> La presenza di questi plugin comporta la trasmissione di cookie da e verso tutti i siti gestiti da terze parti. La gestione delle informazioni raccolte da "terze parti" è disciplinata dalle relative informative cui si prega di fare riferimento.
			    <br
			    /> Per garantire una maggiore trasparenza e comodità, si riportano qui di seguito gli indirizzi web delle diverse informative e delle modalità per la gestione dei cookie.-</p>

			<p>Facebook informative: https://www.facebook.com/help/cookie/
			    <br /> Facebook configurazione: accedere al proprio account. Sezione privacy.
			    <br /> Twitter informative: https://support.twitter.com/articles/20170514
			    <br /> Twitter configurazione: https://twitter.com/settings/security
			    <br /> Google e Youtube informativa: http://www.google.de/intl/it/policies/technologies/cookie/
			    <br /> Google e Youtube configurazione: http://www.google.de/intl/it/policies/technologies/managing/</p>

			<p>Facebook Social Plugins</p>

			<p>Questo sito utilizza social plugins del social network facebook.com (Facebook Inc., 1601 S. California Ave, Palo Alto, CA 94304, USA). Riconoscete il plugin grazie al logo di Facebook oppure al titolo "Facebook Social Plugin".
			    <br /> Attraverso questo plugin sono eseguite le seguenti funzioni:</p>

			<ul>
			    <li>il vostro browser crea un collegamento diretto con i server di Facebook</li>
			    <li>I contenuti di plugin sono trasmessi direttamente da Facebook al vostro browser e inseriti automaticamente nel plugin</li>
			    <li>Facebook riceve l'informazione che voi avete visitato questo sito e se siete connessi a Facebook, questo può assegnare la vostra visita su questo sito nel vostro conto di Facebook</li>
			    <li>Le interazioni da parte vostra con il plugin saranno inoltrate dal vostro browser direttamente a Facebook e qui registrate</li>
			</ul>
			<p>Potete avere maggiori informazioni sullo scopo, l'ampiezza e l'elaborazione dei vostri dati e dei vostri diritti consultando la regolamentazione della protezione dei dati di Facebook.
			    <br /> In questo sito è disattivato il "Facebook Social Plugin", pertanto i dati non sono trasmessi. Per attivare e utilizzare il "Facebook Social Plugin", si prega di cliccare una volta su "F" oppure sul button di attivazione. Con l'attivazione, anche
			    i vostri dati saranno inoltrati a Facebook.</p>

			<p>Pulsante Google +1</p>

			<p>Questo sito utilizza "Pulsante Google +1", un social plugin del social network Google+ (Google Inc., 1600 Amphitheatre Parkway, Mountain View, CA 94043, USA). Riconoscete il plugin grazie al logo "+1" oppure al titolo “Google +1”.
			    <br /> Attraverso questo plugin sono eseguite le seguenti funzioni:</p>

			<ul>
			    <li>il vostro browser crea un collegamento diretto con i server di Google</li>
			    <li>I contenuti di plugin sono trasmessi direttamente da Google al vostro browser</li>
			    <li>Google riceve l'informazione che voi avete visitato questo sito e se siete connessi a Google, questo può assegnare la vostra visita su questo sito nel vostro conto di Google.</li>
			    <li>Le interazioni da parte vostra con il plugin saranno inoltrate dal vostro browser direttamente a google e qui registrate.</li>
			</ul>
			<p>Potete avere maggiori informazioni sullo scopo, l'ampiezza e l'elaborazione dei vostri dati e dei vostri diritti consultando la regolamentazione della protezione dei dati di Google:
			    <br /><a href="https://developers.google.com/+/web/buttons-policy">www.google.com/intl/it/+/policy/+1button.html</a> .
			    <br /> In questo sito è disattivata la piattaforma "Google +1", pertanto i dati non sono trasmessi. Per attivare e utilizzare il "Google +1", si prega di cliccare una volta su "+1" oppure sul button di attivazione. Con l'attivazione, anche i vostri dati
			    saranno inoltrati a Google.</p>

			<p>I dati personali saranno utilizzati da NOI S.p.A., anche in forma elettronica, per l’emissione del Labs-Bonus. Per tali finalità il conferimento dei dati è obbligatorio e un mancato conferimento (totale o parziale) comporta l’impossibilità di procedere
			    alla sottoscrizione del contratto.</p>

			<p>I dati raccolti potranno essere comunicati, ad incaricati interni per compiere le operazioni di trattamento, a consulenti fiscali, istituti di credito e ad ogni altra persona fisica o giuridica, pubblica o privata individuata quale partner e nominata
			    in qualità di Responsabile del trattamento (ai sensi dell’art. 28 del Regolamento UE 2016/679), quando la comunicazione risulti necessaria o funzionale allo svolgimento dell’attivitá di cui al presente contratto in relazione alla finalità indicata.</p>

			<p>I dati conferiti saranno conservati per il tempo necessario all’esecuzione del contratto e nel rispetto dei tempi di conservazione dei dati e dei documenti previsti dalla legge.</p>

			<p>I dati non saranno in alcun modo trasferiti o comunicati verso Paesi terzi al di fuori dell’Unione Europea e non sono inseriti in processi decisionali automatizzati.</p>

			<p>Titolare del trattamento è NOI S.p.A., contattabile al seguente numero di telefono 0471/066600 o all’indirizzo e-mail <a href="mailto:info@noi.bz.it">info@noi.bz.it</a>. </p>

			<p>Si ricorda inoltre che in qualsiasi momento possono essere fatti valere i diritti, richiedendo al Titolare del trattamento l’accesso ai dati, oppure la loro cancellazione, rettificazione o limitazione del trattamento. Esiste inoltre la facoltà di rivolgersi
			    all’autorità di controllo laddove i dati sono stati trattati in modo illegittimo o non conforme.</p>
		</div>
	</div>
	<div class="panel-footer-container">
		<span class="panel-footer-overlay"></span>
		<div class="panel-footer">
			<span class="logo hide-on-desktop">NOI Techpark Suedtirol/Alto Adige</span>
			<nav class="panel-menu">
				<ul>
					<li><a href="https://noi.bz.it/" target="_blank">NOI Techpark Website</a></li>
					<li><a class="link-translatable" data-link-traslation="privacy" href="<?php echo $link_it; ?>">Cookies & Privacy Policy</a></li>
					<li><a class="link-translatable" data-link-traslation="credits" href="<?php if(isset($localizedLinks) && isset($localizedLinks['credits']) && isset($localizedLinks['credits']['it'])): echo $localizedLinks['credits']['it']; else: echo '#'; endif; ?>">Credits</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<span class="js-media-query-tester"></span>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript">
	<?php //Translations
	if($translations && !empty($translations)) : ?>
		var translations = <?php echo json_encode($translations); ?>;
	<?php endif;
	if($localizedLinks && !empty($localizedLinks)) : ?>
		var localizedLinks = <?php echo json_encode($localizedLinks); ?>;
	<?php endif;
	if($cookie_config && !empty($cookie_config)) : ?>
		var cookie_config = <?php echo json_encode($cookie_config); ?>;
	<?php endif; ?>
</script>
<?php include_once(dirname(__DIR__).'/parts/google-tag-manager.php'); ?>
<script src='../src/js/jquery.cookie-madeincima.js'></script>
<script src='../src/js/utility-simple-page.js'></script>
</html>