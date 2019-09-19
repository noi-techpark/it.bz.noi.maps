<?php include_once(dirname(dirname(__DIR__)).'/bin/fetchDataNOI.class.php');
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
<html class="body-scrollable" lang="de">
<head>
	<title>NOI Techpark Maps</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no,width=device-width, initial-scale=1" />
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../src/css/style.css">
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
							<li class="active"><a href="<?php echo $link_de; ?>" data-language="de" class="translatable language-tag">DE</a></li>
							<li><a href="<?php echo $link_it; ?>" data-language="it" class="translatable language-tag">IT</a></li>
							<li><a href="<?php echo $link_en; ?>" data-language="en" class="translatable language-tag">EN</a></li>
						</ul>
					</nav>
				</div>
				<div class="language-container hide-on-desktop">
					<p class="accent-color translatable">Scegli la lingua</p>
					<nav class="filters-dropdown dropdown language-selector">
						<span class="dropdown-trigger translatable language-tag" data-language="de">Tedesco</span>
						<ul class="dropdown-list language-list">
							<li><a href="<?php echo $link_it; ?>" data-language="it" class="translatable language-tag">Italiano</a></li>
							<li><a href="<?php echo $link_de; ?>" data-language="en" class="translatable language-tag">Inglese</a></li>
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
		    <p>NOI AG A.-Volta-Straße, 13/A 39100 Bozen
		        <br> Tel. +39 0471 066 600
		        <br> Email: info@noi.bz.it
		        <br> MwSt. Nr.: 02595720216
		        <br> Ausstattungskapital: 110.740.000 €</p>

		    <p>NOI AG mit Rechtssitz in 39100 Bozen, A.-Volta-Straße, 13/A, erstellt die vorliegende Datenschutzerklärung im Sinne der Artikel 4 und ff. der Verordnung (EU) 2016/679 (Datenschutz-Grundverordnung) und aller anderen im Bereich des Datenschutzes anwendbaren
		        Gesetze und Verordnungen (nachstehend auch „anwendbare Datenschutzregelung“ genannt).
		        <br> Insbesondere teilen wir Ihnen Folgendes mit:</p>

		    <p>NOI AG verwendet Ihre Daten für folgende Zwecke:</p>

		    <ul>
		        <li>
		            <p>Registrierung Ihres Accounts;</p>
		        </li>
		        <li>
		            <p>Zusendung von Werbematerial nach entsprechender Anfrage Ihrerseits;</p>
		        </li>
		        <li>
		            <p>Zusendung von E-Mails und -Mitteilungen;</p>
		        </li>
		        <li>
		            <p>Schriftverkehr mit Ihnen;</p>
		        </li>
		        <li>
		            <p>Mitteilungen und Vorgänge im Bereich IT;</p>
		        </li>
		        <li>
		            <p>Finanzverwaltung;</p>
		        </li>
		        <li>
		            <p>Rechtsverfahren: Schaffung, Ausübung und Wahrung von Rechten;</p>
		        </li>
		        <li>
		            <p>Anpassung an das anwendbare Gesetz;</p>
		        </li>
		        <li>
		            <p>Optimierung der Website;</p>
		        </li>
		        <li>
		            <p>Erfüllung von etwaigen vertraglichen Verpflichtungen gegenüber dem Betroffenen,</p>
		        </li>
		        <li>
		            <p>Schutz der Forderungen und Verwaltung der Verbindlichkeiten.</p>
		        </li>
		    </ul>

		    <p>NOI AG, A.-Volta-Straße, 13/A, I 39100 Bozen (BZ), garantiert im Rahmen der gesetzlichen Vorgaben, dass die Verarbeitung der persönlichen Daten unter Berücksichtigung der grundlegenden Rechte und Freiheiten sowie der Würde des Betroffenen erfolgt,
		        mit besonderem Bezug auf die Geheimhaltung, die persönliche Identität und das Recht auf Schutz der persönlichen Daten.
		        <br> Ihre persönlichen Daten werden in Bezug auf eben genannte Zielstellung bei Bedarf an folgende Personen/Institutionen weitergeleitet:</p>

		    <ul>
		        <li>
		            <p>Öffentlichen Verwaltungen und Behörden, wenn dies gesetzlich vorgesehen ist;</p>
		        </li>
		        <li>
		            <p>Kreditinstitute, mit denen unsere Körperschaft Geschäftsbeziehungen zur Verwaltung von Forderungen/Verbindlichkeiten und zur Finanzierungsvermittlung unterhält;</p>
		        </li>
		        <li>
		            <p>Alle natürlichen und/oder juristischen, öffentlichen und/oder privaten Personen (Rechts-, Verwaltungs- und Steuerberatungsbüros, Gerichte, Handelskammern usw.), wenn sich die Weiterleitung als notwendig oder zur Ausübung unserer Tätigkeit
		                zweckdienlich erweist, auf die oben angegebene Art und Weise zu den oben angeführten Zwecken.</p>
		        </li>
		    </ul>

		    <p>Die persönlichen Daten, die von unserer Körperschaft verarbeitet werden, werden nicht verbreitet. Die Datenverarbeitung kann mit oder ohne Hilfe elektronischer, auf jeden Fall automatischer Mittel erfolgen und umfasst alle im Art. 4, Absatz 1, 2)
		        der Verordnung (EU) 2016/679 vorgesehenen und für die betreffende Datenverarbeitung erforderlichen Vorgänge. In jedem Fall wird die Datenverarbeitung unter Einhaltung aller Sicherheitsmaßnahmen durchgeführt, die deren Sicherheit und Geheimhaltung
		        gewährleisten.</p>

		    <p>Der Betroffene kann jederzeit gegenüber NOI AG seine Rechte im Sinne des Kapitels III der Verordnung (EU) 2016/679 geltend machen.
		        <br> In diesem Zusammenhang weisen wir Sie auf die Ihnen zustehenden Rechte hin:</p>

		    <ul>
		        <li>
		            <p>das Recht, Ihre persönlichen Daten nicht bereitzustellen (bitte beachten Sie, dass wir in diesem Fall eventuell nicht in der Lage sind, Ihnen die Vorteile unserer Website anzubieten);</p>
		        </li>
		        <li>
		            <p>das Recht, den Zugang zu Ihren persönlichen Daten oder zu einer Kopie davon zusammen mit Auskünften zur Art der genannten personenbezogenen Daten, zu ihrer Verarbeitung und Verbreitung anzufordern;</p>
		        </li>
		        <li>
		            <p>das Recht, die Berichtigung jeglicher Unrichtigkeit in Ihren persönlichen Daten zu fordern;</p>
		        </li>
		        <li>
		            <p>das Recht, aus berechtigtem Grund Folgendes zu fordern:
		                <br> - die Löschung Ihrer personenbezogenen Daten;
		                <br> - die Einschränkung der Verarbeitung Ihrer personenbezogenen Daten;
		                <br> - das Recht, aus berechtigtem Grund die von uns oder in unserem Auftrag durchgeführte Verarbeitung Ihrer personenbezogenen Daten anzufechten;
		                <br> - das Recht, eine Übermittlung der personenbezogenen Daten an andere Verantwortliche in einem strukturierten, gängigen, digital lesbaren Format im Rahmen der anwendbaren Zwecke zu erwirken;
		                <br> - falls wir aufgrund Ihrer Einwilligung Ihre personenbezogenen Daten verarbeiten: das Recht, Ihre Einwilligung zurückzunehmen (vorausgesetzt, dass diese Rücknahme keinerlei Datenverarbeitung beeinträchtigt, die rechtmäßig erfolgt ist,
		                bevor wir die Rücknahme der Einwilligung erhalten haben, und dass sie nicht die Verarbeitung Ihrer personenbezogenen Daten auf Basis einer anderen gesetzlichen Grundlage verhindert); und
		                <br> - das Recht, in Zusammenhang mit der von uns oder in unserem Auftrag durchgeführten Verarbeitung Ihrer personenbezogenen Daten Beschwerden bei einer Datenschutz-Aufsichtsbehörde einzureichen</p>
		        </li>
		    </ul>

		    <p>Ihre unabdingbaren Rechte bleiben davon unberührt. Die gegenständlichen Rechte können seitens des Betroffenen oder einer von ihm beauftragten Person ausgeübt werden, und zwar mittels Anfrage an den Inhaber: NOI AG, A.-Volta-Straße, 13/A, I-39100 Bozen
		        (BZ) – Tel: +39 0471 066 600 – Email: info@noi.bz.it</p>

		    <p>Der Inhaber der Datenverarbeitung ist:
		        <br> NOI AG in Person des gesetzlichen Vertreters
		        <br> A.-Volta-Straße, 13/A
		        <br> I-39100 Bozen (BZ)
		        <br> Tel. +39 0471 066 600
		        <br> E-Mail: info@noi.bz.it
		        <br> REA Nr.: BZ-190350
		        <br> MwSt. Nr.: IT 2595720216
		        <br> Steuernummer: 02595720216
		        <br> Inhaltlich verantwortlich: NOI Spa</p>

		    <p>DATA PROTECTION OFFICER PURSUANT TO ART. 37 GDPR
		        <br> GRUPPO INQUIRIA SRL Tel: +39 0471 095085 E-Mail: info@inquiria.it
		        <br> PEC: inquiria@pec.it</p>

		    <h2>Informationen zu Cookies</h2>

		    <p>Cookies sind kleine Textdateien, die durch eine Website und mit Hilfe des Browsers auf der Festplatte eines Client-computers abgelegt werden, um kleinere Informationsmengen der Website für einen gewissen Zeitraum
		        <br> abzuspeichern. Generell gibt es verschiedene Arten von Cookies; sie unterteilen sich in technische Cookies und Profilierungs-Cookies (Cookies, die zu Marketing- und Werbezwecken verwendet werden).
		        <br> Diese Webseite verwendet technische und Profilierungs-Cookies. Im Folgenden finden Sie die Details dazu.
		        <br> Technische Cookies sind in erster Linie für die Funktionalität der Website relevant. Darunter fallen Navigations- bzw. Session-Cookies, die ein bedienerfreundliches Navigieren auf der Seite ermöglichen. Des Weiteren gibt es sog. Analytics-Cookies,
		        die Informationen z. B. über die Anzahl der Websitebesucher und den Weg der Besucher auf die Website sammeln. Zu der Gruppe der technischen Cookies zählen auch die Funktions-Cookies, welche es der Website ermöglichen, sich an Ihre getroffene Auswahl
		        zu erinnern (z. B. von Ihnen selektierte Filtereinstellungen oder automatische Sprachvoreinstellung einer Website).
		        <br> Darüber hinaus gibt es Cookies, die Einstellungen, Präferenzen und Aktionen des Nutzers erfassen und anhand derer ein Nutzerprofil erstellt wird, sogenannte Profilierungs-Cookies. Dies dient dazu, Werbebotschaften mit den Interessen der Nutzer
		        zu kombinieren und ermöglicht damit eine zielgruppenbezogenere Werbung. Sobald Sie eine Webseite öffnen, die letztere Cookies verwendet, wird ein Banner eingeblendet, das den Nutzer darauf hinweist, dass der Seitenbetreiber Cookies zu Marketingzwecken
		        verwendet. Zudem weist es den User darauf hin, dass die Seite eventuell Cookies von Drittanbietern zulässt.
		        <br> Das Banner verlinkt auf eine Seite mit ausführlichen Informationen (auf der Sie sich nun befinden), bei der der Nutzer die Speicherung von Cookies verweigern kann. Das Banner bietet die Möglichkeit zur ausdrücklichen Zustimmung des Benutzers
		        und zeigt den Hinweis, dass eine weitere Navigation auf der Seite eine automatische Zustimmung zur Verwendung von Cookies bedeutet.
		        <br> Ein Klick auf die detaillierteren Informationen bedeutet noch keine Zustimmung. Das Banner wird nicht nach einer gewissen Zeit ausgeblendet, sondern bleibt so lange eingeblendet, bis der User entweder zugestimmt oder bewusst weiternavigiert hat.
		        Wir sind gesetzlich verpflichtet, die Entscheidung des Users aufzuzeichnen und zu speichern, sodass beim nächsten Websitebesuch kein Banner mehr erscheint.
		        <br> Sie können zudem die Verwendung von Cookies generell oder selektiv verweigern. Wenn Sie unsere Cookies nicht akzeptieren möchten, können Sie diese über Ihren Web-Browser ablehnen. Die entsprechende Funktion variiert von Browser zu Browser. Details
		        dazu finden Sie weiter unten. Bitte beachten Sie, dass es durchaus zu Funktionseinschränkungen der Webseite führen kann, wenn Sie keine Cookies akzeptieren.
		        <br> Nachfolgend zeigen wir auf, welche Technologien im Rahmen der Nutzung zu welchem Zweck, in welchem Umfang und in welcher Art auf unseren Seiten verwendet werden.
		        <br> Es kann vorkommen, dass sog. Drittanbieter-Cookies (Cookies von anderen Werbetreibenden) verwendet werden.
		        <br> Weiterführende Informationen sind im jeweiligen Abschnitt hinterlegt. Sie können diese Drittanbieter-Cookies auch explizit in den Einstellungen des jeweiligen Browsers blockieren.</p>

		    <p>Übersicht der verwendeten Cookies</p>

		    <ul>
		        <li>
		            <p>PHPSESSID: cookie tecnico per gestire il mantenimento di informazioni nella navigazione tra una pagina e l'altra (per esempio carrello acquisti)</p>
		        </li>
		        <li>
		            <p>__utmb: cookie di Google Analytics per tracciare approssimativamente la frequenza di rimbalzo sulle pagine</p>
		        </li>
		        <li>
		            <p>__utmz: cookie Google Analytics per tracciare la provenienza della richiesta (da link, da bookmark o da motore di ricerca...)</p>
		        </li>
		        <li>
		            <p>_dc_gtm_UA-1480760-1: cookie di Google Tag Manager inerente all'utilizzo Google Analytics</p>
		        </li>
		        <li>
		            <p>_ga: cookie di Google Analytics generale</p>
		        </li>
		        <li>
		            <p>cm_cookie_accept_noi_maps: cookie tecnico per gestire la barra del cookie disclaimer</p>
		        </li>
		        <li>
		            <p>DoubleClick: cookie di Google Adserver</p>
		        </li>
		    </ul>

		    <h3>Profilierungs-Cookies – Retargeting</h3>

		    <p>Wir weisen Sie darauf hin, dass durch die eingesetzten Profilierungs-Cookies keine personenbezogenen Daten gespeichert werden und es werden auch keine Nutzungsprofile mit Ihren personenbezogenen Daten zusammengeführt. Über das Profilierungs-Cookie
		        können keine Personen identifiziert werden, sondern es werden lediglich Informationen gespeichert, die anonymisierte Informationen zur gezielten Zusammenstellung von interessenbasierten Marketingkampagnen erlauben.
		        <br> Wenn Sie das Setzen von Profilierungs-Cookies verhindern möchten, blockieren Sie diese direkt über die Browsereinstellungen (siehe unten angeführte Beschreibungen).</p>

		    <h3>Webtracking – Google Analytics</h3>

		    <p>Um unser Angebot stetig zu verbessern und zu optimieren, nutzen wir sogenannte Tracking-Technologien. Diese Website benutzt Google Analytics, einen Webanalysedienst der Google Inc. („Google“). Google Analytics verwendet Cookies, die eine Analyse der
		        Benutzung der Website durch Sie ermöglichen, mit dem Zweck, die Attraktivität unserer Websites zu ermitteln und deren Leistungsfähigkeit und Inhalte zu verbessern. Die durch das Cookie erzeugten Informationen über Ihre Benutzung dieser Website
		        (einschließlich Ihrer IP-Adresse) wird an einen Server von Google in den USA übertragen und dort gespeichert. Im Auftrag des Betreibers dieser Website wird Google diese Informationen verwenden, um Ihre Nutzung der Website auszuwerten, um Reports
		        über die Websiteaktivitäten zusammenzustellen und um weitere mit der Websitenutzung und der Internetnutzung verbundene Dienstleistungen gegenüber dem Websitebetreiber zu erbringen. Auch werden von Google diese Informationen gegebenenfalls an Dritte
		        übertragen, sofern dies gesetzlich vorgeschrieben ist oder soweit Dritte diese Daten im Auftrag von Google und/oder anderen verwendeten Webanalysedienstleistern verarbeiten. In keinem Fall wird Ihre IP-Adresse mit anderen Daten von Google und/oder
		        anderen Webanalysedienstleistern in Verbindung gebracht.
		        <br> Sie können die Speicherung der Cookies durch eine entsprechende Einstellung Ihrer Browser-Software verhindern; wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht sämtliche Funktionen dieser Website vollumfänglich werden
		        nutzen können. Sie können darüber hinaus die Erfassung der durch das Cookie erzeugten und auf Ihre Nutzung der Website bezogenen Daten (inkl. Ihrer IP-Adresse) durch Google sowie die Verarbeitung dieser Daten durch Google verhindern, indem sie
		        das unter dem Link tools.google.com/dlpage/gaoptout verfügbare Browser-Plugin herunterladen und installieren.
		        <br> Allgemeine Informationen zu Google Analytics und Datenschutz finden Sie unter http://www.google.com/intl/de/analytics/learn/privacy.html
		        <br> Durch die Nutzung dieser Website erklären Sie sich mit der Bearbeitung der über Sie erhobenen Daten durch Google und/oder andere Webanalysedienste in der zuvor beschriebenen Art und Weise und zu dem zuvor benannten Zweck einverstanden..</p>

		    <p>Google Adwords Remarketing</p>

		    <p>Wir nutzen Google Remarketing, um die Nutzer im Google Display Netzwerk erneut anzusprechen. Google verwendet Cookies, die auf Ihrem Computer gespeichert werden und die eine Analyse der Benutzung der Website durch Sie ermöglicht. Die durch das Cookie
		        erzeugten Informationen über Ihre Benutzung dieser Website (einschließlich Ihrer IP-Adresse) werden an einen Server von Google in den USA übertragen und dort gespeichert. Die IP-Adresse wird anschließend von Google um die letzten drei Stellen
		        gekürzt, eine eindeutige Zuordnung der IP-Adresse ist somit nicht mehr möglich.
		        <br> Google beachtet die Datenschutzbestimmungen des „US Safe Harbor“-Abkommens und ist beim „Safe Harbor“-Pro-gramm des US-Handelsministeriums registriert.
		        <br> Google wird diese Informationen benutzen, um Ihre Nutzung der Website auszuwerten, um Reports über die Websiteaktivitäten für die Websitebetreiber zusammenzustellen und um weitere mit der Websitenutzung und der Internetnutzung verbundene Dienstleistungen
		        zu erbringen. Auch wird Google diese Informationen gegebenenfalls an Dritte übertragen, sofern dies gesetzlich vorgeschrieben oder soweit Dritte diese Daten im Auftrag von Google verarbeiten.
		        <br> Drittanbieter, einschließlich Google, schalten Anzeigen auf Websites im Internet. Drittanbieter, einschließlich Google, verwenden gespeicherte Cookies zum Schalten von Anzeigen auf Grundlage vorheriger Besuche eines Nutzers auf dieser Website.
		        <br> Google wird in keinem Fall Ihre IP-Adresse mit anderen Daten von Google in Verbindung bringen.
		        <br> Sie können die Verwendung von Cookies durch Google deaktivieren, indem Sie die Seite zur Deaktivierung von Google-Werbung aufrufen. Wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht sämtliche Funktionen dieser Website
		        voll umfänglich nutzen können.
		        <br> Durch die Nutzung dieser Website erklären Sie sich mit der Bearbeitung der über Sie erhobenen Daten durch Google in der zuvor beschriebenen Art und Weise und zu dem zuvor benannten Zweck einverstanden. Der Datenerhebung und -speicherung kann
		        jederzeit mit Wirkung für die Zukunft widersprochen werden.
		        <br> Auf sensiblen Websiteinhalten mit personenbezogenen Daten wird kein Remarketing eingesetzt.</p>

		    <p>Google AdWords Conversion Tracking</p>

		    <p>Diese Webseite nutzt ferner das Google Conversion Tracking. Dabei wird von Google AdWords ein Cookie auf Ihrem Rechner gesetzt, sofern Sie über eine Google-Anzeige auf unsere Website gelangt sind. Diese Cookies verlieren nach 30 Tagen ihre Gültigkeit
		        und dienen nicht der persönlichen Identifizierung. Besucht der Nutzer bestimmte Seiten der Website des AdWords-Kunden und das Cookie ist noch nicht abgelaufen, können Google und der Kunde erkennen, dass der Nutzer auf die Anzeige geklickt hat
		        und zu dieser Seite weitergeleitet wurde. Jeder AdWords-Kunde erhält ein anderes Cookie. Cookies können somit nicht über die Webseiten von AdWords-Kunden nachverfolgt werden. Die mithilfe des Conversion-Cookies eingeholten Informationen dienen
		        dazu, Conversion-Statistiken für AdWords-Kun-den zu erstellen, die sich für Conversion-Tracking entschieden haben. Die AdWords-Kunden erfahren die Gesamtanzahl der Nutzer, die auf ihre Anzeige geklickt haben und zu einer mit einem Conversion-Tracking-Tag
		        versehenen Seite weitergeleitet wurden. Sie erhalten jedoch keine Informationen, mit denen sich Nutzer persönlich identifizieren lassen. Wenn Sie nicht an dem Tracking-Verfahren teilnehmen möchten, können Sie auch das hierfür erforderliche Setzen
		        eines Cookies ablehnen, etwa per Browser-Einstellung, die das automatische Setzen von Cookies generell deaktiviert.
		        <br> Sie können Cookies für Conversion-Tracking auch deaktivieren, indem Sie Ihren Browser so einstellen, dass Cookies von der Domain www.googleadservices.com blockiert werden.</p>

		    <p>
		        <br> Cookies über Browsereinstellungen blockieren</p>

		    <p>FIREFOX</p>

		    <ul>
		        <li>
		            <p>Klicken Sie auf das Menü und auf „Einstellungen“.</p>
		        </li>
		        <li>
		            <p>Gehen Sie zur Registerkarte „Datenschutz“.</p>
		        </li>
		        <li>
		            <p>Im Bereich „Chronik“ wählen Sie bei „Firefox wird eine Chronik:“ auf „nach benutzerdefinierten Einstellungen an-legen“.</p>
		        </li>
		        <li>
		            <p>In den nun aufscheinenden Auswahlmöglichkeiten entfernen Sie das Häkchen bei „Cookies akzeptieren“</p>
		        </li>
		        <li>
		            <p>Klicken Sie auf die Schaltfläche „OK“.</p>
		        </li>
		    </ul>

		    <p>Detaillierte Informationen dazu finden Sie unter:</p>

		    <p>https://support.mozilla.org/de/kb/Cookies-blockieren</p>

		    <p>&nbsp;</p>

		    <p>GOOGLE CHROME</p>

		    <ul>
		        <li>
		            <p>Klicken Sie auf das Menü und auf „Einstellungen“.</p>
		        </li>
		        <li>
		            <p>Klicken Sie ganz unten auf „Erweiterte Einstellungen anzeigen“.</p>
		        </li>
		        <li>
		            <p>Klicken Sie im Bereich „Datenschutz“ auf „Inhaltseinstellungen“.</p>
		        </li>
		        <li>
		            <p>Im Bereich „Cookies“ wählen Sie „Speicherung von Daten für alle Websites blockieren“ aus.</p>
		        </li>
		        <li>
		            <p>Klicken Sie auf die Schaltfläche „Fertig“.</p>
		        </li>
		    </ul>

		    <p>Detaillierte Informationen dazu finden Sie unter:
		        <br> https://support.google.com/chrome/answer/95647?hl=de
		    </p>

		    <p>&nbsp;</p>

		    <p>INTERNET EXPLORER</p>

		    <ul>
		        <li>
		            <p>Öffnen Sie unter dem Menüpunkt „Extras“ die „Internetoptionen“ oder klicken Sie, wenn die Menüleiste nicht angezeigt wird, auf das Menü-Symbol und auf „Internetoptionen“.</p>
		        </li>
		        <li>
		            <p>Klicken Sie auf die Registerkarte „Datenschutz“.</p>
		        </li>
		        <li>
		            <p>Über den Schieberegler können Sie aus mehreren Stufen der Cookie-Verarbeitung wählen. Ist der Regler ganz oben, werden alle Cookies blockiert, ist er ganz unten, werden alle zugelassen.</p>
		        </li>
		        <li>
		            <p>Klicken Sie auf die Schaltfläche „OK“.</p>
		        </li>
		    </ul>

		    <p>Detaillierte Informationen dazu finden Sie unter:
		        <br> http://windows.microsoft.com/de-de/windows7/block-enable-or-allow-cookies
		    </p>

		    <p>&nbsp;</p>

		    <p>SAFARI</p>

		    <ul>
		        <li>
		            <p>Klicken Sie in den Einstellungen auf „Datenschutz“</p>
		        </li>
		        <li>
		            <p>Im Bereich „Cookies akzeptieren“ können Sie festlegen, ob und wann Safari die Cookies der Websites speichern soll. Für weitere Informationen klicken Sie auf die Schaltfläche „Hilfe“ (durch ein Fragezeichen gekennzeichnet)</p>
		        </li>
		    </ul>

		    <p>Detaillierte Informationen dazu finden Sie unter:
		        <br> https://support.apple.com/kb/PH5042?locale=en_US
		    </p>

		    <p>&nbsp;</p>

		    <p>Drittanbieter-Cookies sind Cookies, die von einem anderen Anbieter als jenem der vom Nutzer besuchten Website übertragen werden. Wenn ein Nutzer eine Website aufruft und ein anderer Akteur darüber Cookies überträgt, handelt es sich um Drittanbieter-Cookies.
		        Ein Beispiel dafür sind „social plugins“ für Facebook, Twitter oder Google+. Der typische Zweck davon ist es, das Teilen von Inhalten auf Social-Network-Plattformen zu ermöglichen oder zu erleichtern.
		        <br> Genaueres erfahren Sie auf den Informationsseiten der Drittanbieter.</p>

		    <p>
		        <br> Aus Gründen der Transparenz führen wir folgend alle Drittanbieter an, die mit unseren oben genannten Websites verbunden sind und Drittanbieter-Cookies nutzen, und verweisen auf die entsprechenden Informationsseiten:</p>

		    <ul>
		        <li>
		            <p>Facebook (Informationen): https://www.facebook.com/help/cookies/</p>
		        </li>
		        <li>
		            <p>Facebook (Konfiguration): auf den eigenen Account zugreifen, Bereich „Datenschutz“.</p>
		        </li>
		        <li>
		            <p>Twitter (Informationen): https://support.twitter.com/articles/20170514</p>
		        </li>
		        <li>
		            <p>Twitter (Konfiguration): https://twitter.com/settings/security</p>
		        </li>
		        <li>
		            <p>Google und YouTube (Informationen): http://www.google.de/intl/de/policies/technologies/cookies/</p>
		        </li>
		        <li>
		            <p>Google und YouTube (Konfiguration): http://www.google.de/intl/de/policies/technologies/managing/</p>
		        </li>
		    </ul>

		    <p>
		        <br> Facebook Social Plugins</p>

		    <p>
		        <br> Diese Website verwendet Social Plugins des sozialen Netzwerks facebook.com (Facebook Inc., 1601 S. California Ave, Palo Alto, CA 94304, USA). Sie erkennen das Plugin durch das Facebook-Logo oder den Zusatz „Facebook Social Plugin“.
		        <br> Folgende Funktionen werden durch dieses Plugin ausgeführt:</p>

		    <ul>
		        <li>
		            <p>Ihr Browser baut eine direkte Verbindung mit den Servern von Facebook auf.</p>
		        </li>
		        <li>
		            <p>Die Plugin-Inhalte werden direkt von Facebook an Ihren Browser übermittelt und automatisch in das Plugin eingepflegt.</p>
		        </li>
		        <li>
		            <p>Facebook erhält die Information, dass Sie diese Webseite besucht haben und wenn Sie in Facebook eingeloggt sind, kann Facebook Ihren Besuch auf dieser Webseite ihrem Facebook-Konto zuordnen.</p>
		        </li>
		        <li>
		            <p>Interaktionen Ihrerseits mit dem Plugin werden von Ihrem Browser direkt an Facebook weitergeleitet und dort abgespeichert.</p>
		        </li>
		        <li>
		            <p>Über den Zweck, Umfang und Verarbeitung Ihrer Daten sowie Ihre Rechte diesbezüglich informieren Sie sich bitte unter den Datenschutzhinweisen von Facebook.</p>
		        </li>
		        <li>
		            <p>Standardmäßig ist auf dieser Webseite das „Facebook Social Plugin“ deaktiviert und es werden somit keine Daten übermittelt. Um das „Facebook Social Plugin“ zu aktivieren und zu verwenden, klicken Sie einmalig auf die F-Schalt-fläche oder auf
		                den Aktivierungsbutton. Mit der Aktivierung des Buttons werden auch Ihre Daten an Facebook übermittelt.</p>
		        </li>
		    </ul>

		    <p>
		        <br> Google +1 Schaltfläche
		        <br> Diese Website verwendet die „Google +1-Schaltfläche“, ein Website-Plugin des sozialen Netzwerks Google+ (Google Inc., 1600 Amphitheatre Parkway, Mountain View, CA 94043, USA). Die Schaltfläche ist an dem Schriftzug „+1“ oder dem Zusatz „Google
		        +1“ erkennbar.
		        <br> Folgende Funktionen werden durch dieses Plugin ausgeführt:</p>

		    <ul>
		        <li>
		            <p>Ihr Browser baut eine direkte Verbindung mit den Servern von Google auf.</p>
		        </li>
		        <li>
		            <p>Das Plugin wird direkt von Google in die Webseite geladen.</p>
		        </li>
		    </ul>

		    <p>Unter Umständen werden Daten wie Zeitpunkt des Webseitenaufrufs, Ihre IP-Adresse und weitere persönliche Daten übertragen.
		        <br> Interaktionen Ihrerseits mit dem Plugin werden von Ihrem Browser direkt an Google weitergeleitet und dort abgespeichert.</p>

		    <p>Über den Zweck, Umfang und Verarbeitung Ihrer Daten sowie Ihre Rechte diesbezüglich informieren Sie sich bitte unter den Datenschutzhinweisen von Google: www.google.com/intl/de/+/policy/+1button.html&nbsp;
		        <br> Standardmäßig ist auf dieser Webseite die „Google +1-Schaltfläche“ deaktiviert und es werden somit keine Daten übermittelt. Um die „Google +1-Schaltfläche“ zu aktivieren und zu verwenden, klicken Sie einmalig auf die „+1-Schaltfläche“ oder auf
		        den Aktivierungsbutton. Mit der Aktivierung des Buttons werden auch Ihre Daten an Google übermittelt.</p>

		    <p>„Ihre personenbezogenen Daten werden von NOI AG, auch in elektronischer Form, für die Ausstellung des Labs-Bonus erhoben. Für diese Zwecke ist die Bereitstellung der Daten obligatorisch und bei einer eventuellen Verweigerung, diese Daten mitzuteilen
		        (ganz oder teilweise) ist das Unterzeichnen des Vertrages nicht möglich.</p>

		    <p>Die gesammelten Daten können an interne Beauftragte - in Bezug auf die Ausführung der geschäftlichen Leistung - zur Durchführung der Verarbeitungsvorgänge mitgeteilt werden. In Bezug auf den oben angegebenen Zweck können die personenbezogenen Daten
		        auch an Steuerberater, Kreditinstitute und an all jene natürlichen und/oder juristischen, öffentlichen und/oder privaten Personen weitergeleitet werden, sofern dies für die Ausführung der Aktivität zur Erreichung der genannten Zwecke notwendig
		        ist.&nbsp;&nbsp;Diese Partner werden vom Verantwortlichen für die Datenverarbeitung als Auftragsverarbeiter (gemäß Art.28 der Verordnung (EU) 2016/679) ernannt.</p>

		    <p>Die angegebenen Daten werden für die Zeit aufbewahrt, die notwendig ist, um den Vertrag auszuführen und in Übereinstimmung mit den gesetzlich vorgeschriebenen Aufbewahrungszeiten der Daten und Dokumente.</p>

		    <p>Es wird informiert, dass die Daten auf keinen Fall an Dritte außerhalb der Europäischen Union übermittelt oder mitgeteilt werden und keiner automatisierten Verarbeitung unterworfen sind.</p>

		    <p>Der Verantwortliche der Datenverarbeitung ist NOI AG, unter der Telefonnummer 0471/066600&nbsp;&nbsp;oder E-mail Adresse <a href="mailto:info@noi.bz.it">info@noi.bz.it</a> kontaktierbar.</p>

		    <p>Es wird daran erinnert, dass die Rechte&nbsp;&nbsp;jederzeit geltend gemacht werden können. Es besteht das Recht auf Auskunft über die betreffend personenbezogenen Daten, sowie auf Berichtigung oder Löschung oder auf Einschränkung der Verarbeitung.
        	Es besteht auch das Recht, sich an die Aufsichtsbehörde zu wenden, falls die Daten rechtswidrig oder nicht ordnungsgemäß verarbeitet wurden.“</p>
		</div>
	</div>
	<div class="panel-footer-container">
		<span class="panel-footer-overlay"></span>
		<div class="panel-footer">
			<span class="logo hide-on-desktop">NOI Techpark Suedtirol/Alto Adige</span>
			<nav class="panel-menu">
				<ul>
					<li><a href="https://noi.bz.it/" target="_blank">NOI Techpark Website</a></li>
					<li><a class="link-translatable" data-link-traslation="privacy" href="<?php echo $link_de; ?>">Cookies & Privacy Policy</a></li>
					<li><a class="link-translatable" data-link-traslation="credits" href="<?php if(isset($localizedLinks) && isset($localizedLinks['credits']) && isset($localizedLinks['credits']['de'])): echo $localizedLinks['credits']['de']; else: echo '#'; endif; ?>">Credits</a></li>
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
<?php include_once(dirname(dirname(__DIR__)).'/parts/google-tag-manager.php'); ?>
<script src='../../src/js/jquery.cookie-madeincima.js'></script>
<script src='../../src/js/utility-simple-page.js'></script>
</html>