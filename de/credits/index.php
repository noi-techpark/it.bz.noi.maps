<?php include_once(dirname(dirname(__DIR__)).'/bin/fetchDataNOI.class.php');
if(class_exists('fetchDataNOI')):
	$fetchDataNOI = new fetchDataNOI();
	$translations = $fetchDataNOI->translations;
	$localizedLinks = $fetchDataNOI->localizedLinks;
	$cookie_config = $fetchDataNOI->cookie_config;
endif;
$link_it = isset($localizedLinks) && isset($localizedLinks['credits']) && isset($localizedLinks['credits']['it']) ? $localizedLinks['credits']['it'] : '#';
$link_en = isset($localizedLinks) && isset($localizedLinks['credits']) && isset($localizedLinks['credits']['en']) ? $localizedLinks['credits']['en'] : '#';
$link_de = isset($localizedLinks) && isset($localizedLinks['credits']) && isset($localizedLinks['credits']['de']) ? $localizedLinks['credits']['de'] : '#'; ?>
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
							<li><a href="<?php echo $link_en; ?>" data-language="en" class="translatable language-tag">Inglese</a></li>
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
			<h1>Credits</h1>
			<p>Website and maps by <a href="https://www.madeincima.it/" target="_blank">MADE IN CIMA</a></p>
		</div>
	</div>
	<div class="panel-footer-container">
		<span class="panel-footer-overlay"></span>
		<div class="panel-footer">
			<span class="logo hide-on-desktop">NOI Techpark Suedtirol/Alto Adige</span>
			<nav class="panel-menu">
				<ul>
					<li><a href="https://noi.bz.it/" target="_blank">NOI Techpark Website</a></li>
					<li><a class="link-translatable" data-link-traslation="privacy" href="<?php if(isset($localizedLinks) && isset($localizedLinks['privacy']) && isset($localizedLinks['privacy']['de'])): echo $localizedLinks['privacy']['de']; else: echo '#'; endif; ?>">Cookies & Privacy Policy</a></li>
					<li><a class="link-translatable" data-link-traslation="credits" href="<?php echo $link_de; ?>">Credits</a></li>
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