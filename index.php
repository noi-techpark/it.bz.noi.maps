<?php include_once(__DIR__.'/bin/fetchDataNOI.class.php');
$data = $side_panel_groups = $buildings_summary = null;
if(class_exists('fetchDataNOI')):
	$fetchDataNOI = new fetchDataNOI();
	$data = $fetchDataNOI->fetchData();
	if($data && !empty($data) && is_array($data)) :
		$side_panel_groups = $fetchDataNOI->getSidepanelGroups();
		$buildings_summary = $fetchDataNOI->getBuildingsSummary();
		$categories_array = $fetchDataNOI->categories_array;
		$translations = $fetchDataNOI->translations;
		$localizedLinks = $fetchDataNOI->localizedLinks;
		$cookie_config = $fetchDataNOI->cookie_config;
		$maps_svgs = $fetchDataNOI->renderMapsSvgs($data);
	endif;
endif; ?>
<!DOCTYPE html>
<html>
<head>
	<title>NOI Techpark Maps</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no,width=device-width, initial-scale=1" />
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="src/css/style.css">
	<meta name="theme-color" content="#293238">
	<link rel="shortcut icon" href="src/images/favicon.ico" type="image/vnd.microsoft.icon" />
</head>
<?php $body_classes = array('external');
if(is_totem()) :
	$body_classes[] = 'totem';
endif; ?>
<body class="<?php echo implode(' ',$body_classes); ?>" data-building='external' data-floor=''>
	<?php $full_header = true;
	include(__DIR__.'/parts/header.php'); ?>
	<div id="mapContainer">
		<div class="loader loader-map">
			<img src="./src/images/loading.svg" />
		</div>
		<div id="map">
			<?php include(__DIR__.'/maps/external.php'); ?>
		</div>
		<!-- <svg class="logo-map" data-name="Livello 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 220 98.9"><path d="M80.3.2H50.1V14.9L35.2.1H.6l-.2,80H29.1V64.7L44.5,80.1H80.3ZM78.9,76.5,68.3,54.6l11-49.3V77.4Zm.3-75.3-6,27L67.6,53,51.1,16.2V16H51V1.2ZM50,16.3,28.5,62.4l-.6-1.1L12.8,36,35.1,1.4ZM34.1,1.1,12.4,34.9,7.8,20.2,1.7,1.1ZM1.6,75.7V3.9L11.6,36h.1l-9,35.3Zm.1,3.4L4.6,67.8l7.8-30.5L28,63.5h.1V79.1ZM50.6,17.4,67.2,54.5,44.7,78.9,29.2,63.4ZM45.9,79.1,67.6,55.5l.3.7H68l11,23Z" fill="#fff"/><path d="M164.5,16.8,143.3.2,116.7,0,95.6,15.3,86.8,40.9l7.6,24,22.8,15.5h25.1l22.3-14.9,8-24.6ZM116.9,2.2l5.2,9.1,24.8,42.8L111,40.6Zm46.6,15L148,53.9,122.1,9.2l-4.7-8H143Zm-67-1.3,19.4-14-5.8,38.5h-22ZM88.1,41.4h22l6.6,37.4L95.2,64.2Zm23,.3,36,13.5L117.7,78.9Zm7.7,37.7,28.4-23-5.5,23Zm24.1-.7L148,57.6l.4-1.8,3.6,2.3,11.3,7Zm21-14.3-11.2-7-4-2.6,15.4-36.3,7.4,22.4Z" fill="#fff"/><path d="M219.8.2H186.1l.5,80.3h32.6ZM218,47.4l.2,30.6L204.4,53.2l5.4-27.7Zm-7.8-23.7,8.5-20.4-.6,41.4Zm8.3-22.5-9.1,21.4L197.2,10.5l-9.4-9.3Zm-9.4,22.6-5.7,29-16.1,6.4-.2-57.3,9.1,9Zm-6.5,30.4-15,24.1-.2-18ZM188,79.5l15.8-25.3,14.1,25.3Z" fill="#fff"/><path id="TECHPARK_SUDTIROL_AL" data-name="TECHPARK SUDTIROL AL" d="M139.7,98.9h-1.4l3.6-9.9h1.5Zm68.3-.7a4.6,4.6,0,0,1-2.3-.5,5.4,5.4,0,0,1-1.5-1.5,5.9,5.9,0,0,1-.5-2.3v-.6a4.9,4.9,0,0,1,.5-2.4,3.4,3.4,0,0,1,1.4-1.5,4.2,4.2,0,0,1,2.2-.5,4.5,4.5,0,0,1,2.8.7,3.5,3.5,0,0,1,1.2,2.3h-2a2.3,2.3,0,0,0-.6-1.2,3.1,3.1,0,0,0-1.3-.3,1.7,1.7,0,0,0-1.6.7,3.1,3.1,0,0,0-.5,2.1v.6a3.4,3.4,0,0,0,.5,2.2,2.4,2.4,0,0,0,1.8.7,2.3,2.3,0,0,0,1.6-.4V94.7h-1.8V93.3h3.9v3.6a3.4,3.4,0,0,1-1.6,1,8.3,8.3,0,0,1-2.2.3Zm-35.7,0a5.4,5.4,0,0,1-2.2-.5,5.7,5.7,0,0,1-1.5-1.6,5.9,5.9,0,0,1-.5-2.3v-.5a4.6,4.6,0,0,1,.5-2.3,3.9,3.9,0,0,1,1.5-1.6,4.9,4.9,0,0,1,4.4,0A3.9,3.9,0,0,1,176,91a5.9,5.9,0,0,1,.5,2.3v.4a6.9,6.9,0,0,1-.5,2.4,2.9,2.9,0,0,1-1.5,1.6A5.4,5.4,0,0,1,172.3,98.2Zm0-7.8a2.1,2.1,0,0,0-1.6.8,3.1,3.1,0,0,0-.5,2.1v.4a3.4,3.4,0,0,0,.5,2.2,2.1,2.1,0,0,0,2.9.3l.3-.3a3.1,3.1,0,0,0,.5-2.1v-.5a3.1,3.1,0,0,0-.5-2.1,2.1,2.1,0,0,0-1.6-.8ZM126,98.2a5.4,5.4,0,0,1-2.2-.5,5.7,5.7,0,0,1-1.5-1.6,5.9,5.9,0,0,1-.5-2.3v-.5a5.9,5.9,0,0,1,.5-2.3,5.7,5.7,0,0,1,1.5-1.6,4.9,4.9,0,0,1,4.4,0,2.9,2.9,0,0,1,1.5,1.6,4.6,4.6,0,0,1,.5,2.3v.4a4.9,4.9,0,0,1-.5,2.4,2.9,2.9,0,0,1-1.5,1.6A5.4,5.4,0,0,1,126,98.2Zm0-7.8a2.1,2.1,0,0,0-1.6.8,3.1,3.1,0,0,0-.5,2.1v.4a3.4,3.4,0,0,0,.5,2.2,2.1,2.1,0,0,0,2.9.3l.3-.3a3.9,3.9,0,0,0,.6-2.1v-.5a3.9,3.9,0,0,0-.6-2.1A2.1,2.1,0,0,0,126,90.4ZM86.6,98.2a3.8,3.8,0,0,1-2.7-.8,3,3,0,0,1-1.1-2.3V89h2.1v6a1.6,1.6,0,0,0,.4,1.3,2,2,0,0,0,1.3.4,1.6,1.6,0,0,0,1.7-1.3h0c.1-.1.1-.2.1-.4V89h2v6a2.9,2.9,0,0,1-1,2.3A3.7,3.7,0,0,1,86.6,98.2Zm-8.7,0a4.5,4.5,0,0,1-2-.4,3.1,3.1,0,0,1-1.5-1,3,3,0,0,1-.5-1.6H76a1.3,1.3,0,0,0,.4,1,1.7,1.7,0,0,0,1.5.5,2.5,2.5,0,0,0,1.2-.2,1.1,1.1,0,0,0,.2-1.4l-.2-.2a4.7,4.7,0,0,0-1.5-.6l-1.7-.6a2.9,2.9,0,0,1-1.7-2.3,2.1,2.1,0,0,1,.5-1.3,3,3,0,0,1,1.3-.9,6.2,6.2,0,0,1,3.8,0,4.1,4.1,0,0,1,1.3,1,2.8,2.8,0,0,1,.4,1.5h-2a1.3,1.3,0,0,0-.4-1,2.7,2.7,0,0,0-1.2-.3,1.3,1.3,0,0,0-1.2.3.7.7,0,0,0-.4.7,1,1,0,0,0,.5.8l1.4.5a5.8,5.8,0,0,1,2.5,1.2,2.2,2.2,0,0,1,.3,3.2c-.1.2-.3.3-.4.4a4.2,4.2,0,0,1-2.7.7Zm-57,0a3.9,3.9,0,0,1-3-1.2,4.2,4.2,0,0,1-1.1-3.2v-.6a5.9,5.9,0,0,1,.5-2.3,4,4,0,0,1,1.4-1.5,4.2,4.2,0,0,1,2.2-.5,4,4,0,0,1,2.8.8,3.7,3.7,0,0,1,1.2,2.4H22.8a2.1,2.1,0,0,0-.5-1.3,2.3,2.3,0,0,0-1.4-.4,1.7,1.7,0,0,0-1.5.7,3.1,3.1,0,0,0-.5,2.1v.6a4.1,4.1,0,0,0,.4,2.2,2,2,0,0,0,1.6.7,2.3,2.3,0,0,0,1.4-.4,1.8,1.8,0,0,0,.5-1.2h2.1a3.5,3.5,0,0,1-1.2,2.3,4,4,0,0,1-2.8.8Zm94.4-.1h-2.1V89h3.7a4.2,4.2,0,0,1,2.7.7,2.2,2.2,0,0,1,.9,2,2.3,2.3,0,0,1-.4,1.6,3.2,3.2,0,0,1-1.3,1l2.1,3.7h-2.2l-1.8-3.2h-1.6Zm0-7.6v2.7h1.6l1.2-.3a1.4,1.4,0,0,0,0-2,1.7,1.7,0,0,0-1.2-.4ZM55.2,98.1h-2V89h3.6a4.5,4.5,0,0,1,2.8.7,2.5,2.5,0,0,1,.9,2,2.9,2.9,0,0,1-.4,1.6,4.5,4.5,0,0,1-1.4,1L60.9,98H58.7l-1.9-3.3H55.2V98Zm0-7.6v2.7h1.7a1.1,1.1,0,0,0,1.1-.3,1.2,1.2,0,0,0,.5-1,1.3,1.3,0,0,0-.4-1,2,2,0,0,0-1.3-.4Zm-27,7.6h-2V89h2v3.7h4V89h2.1v9.1H32.2V94.2h-4v3.9Zm154.6,0h-2.2l3.7-9.1h1.9l3.7,9.1h-2.2l-.7-1.9h-3.5Zm2.4-6.8L184,94.7h2.5Zm-39.4,6.8h-2.2l3.7-9.1h1.9l3.7,9.1h-2.2l-.7-1.9h-3.5Zm2.4-6.8L147,94.7h2.5ZM64.1,98.1h-2V89h2v4.1L65,92l2.5-3H70l-3.5,4,3.6,5.1H67.7l-2.5-3.7-1.1,1.1v2.6Zm-19,0H43L46.7,89h1.8l3.7,9.1H50.1l-.7-1.9H45.8l-.7,1.9Zm2.5-6.8-1.2,3.4h2.4ZM202,98.1h-2V89h2Zm-37.6,0h-2.1V90.5h-3V89h8.1v1.5h-3Zm-53.1,0h-2V89h2Zm-6.3,0h-2.1V90.5h-3V89H108v1.5h-3Zm-99.9,0H3V90.5H0V89H8.1v1.5h-3Zm214.9,0h-6.6V89H220v1.5h-4.6v2.2h4v1.4h-4v2.5H220Zm-26.1,0h-3.1V89h3.1a5.9,5.9,0,0,1,2.3.5,4.1,4.1,0,0,1,1.6,1.6,4.3,4.3,0,0,1,.6,2.2v.4a4.6,4.6,0,0,1-.6,2.3,2.9,2.9,0,0,1-1.6,1.5,4.6,4.6,0,0,1-2.3.6Zm-1-7.6v6.1h.9a2.6,2.6,0,0,0,1.9-.7,3.2,3.2,0,0,0,.6-2.1v-.5a3.2,3.2,0,0,0-.6-2.1,2.4,2.4,0,0,0-1.8-.7Zm-32.7,7.6h-6.4V89h2.1v7.6h4.3v1.5Zm-22.1,0h-6.4V89h2.1v7.6h4.3v1.5Zm-43,0h-3V89h3a6.9,6.9,0,0,1,2.4.5,4.1,4.1,0,0,1,1.6,1.6,3.4,3.4,0,0,1,.5,2.2v.5a3.4,3.4,0,0,1-.5,2.2,3.9,3.9,0,0,1-1.6,1.5,5,5,0,0,1-2.4.6Zm-1-7.6v6.1h1a2.4,2.4,0,0,0,1.8-.7,3.1,3.1,0,0,0,.7-2.1v-.5a3.1,3.1,0,0,0-.7-2.1,2.4,2.4,0,0,0-1.8-.7Zm-56,7.6H36V89h3.9a4.5,4.5,0,0,1,2,.4,4.1,4.1,0,0,1,1.3,1,2.9,2.9,0,0,1,.4,1.6,2.5,2.5,0,0,1-1,2.1,5,5,0,0,1-2.7.8H38.1v3.2Zm0-7.6v2.9h1.8a1.7,1.7,0,0,0,1.2-.4,1.2,1.2,0,0,0,.5-1,1.5,1.5,0,0,0-1.5-1.5h-2ZM15.9,98.1H9.3V89h6.6v1.5H11.3v2.2h3.9v1.4H11.3v2.5h4.6Z" fill="#fff"/></svg> -->
		<div class="tooltip">
			<div class="pin">PIN</div>
			<div class="card">
				<div class="heading">
					<span class="icon hide"></span>
					<div class="name-short-description-container">
						<p class="name hide"></p>
						<p class="short-description hide"></p>
					</div>
				</div>
				<div class="long-description"></div>
				<div class="lower hide">
					<?php if (!is_totem()): ?>
						<p class="expand-info hide translatable">Info</p>
					<?php endif; ?>
					<p class="view-floorplan hide translatable">Vedi planimetria</p>
					<?php if (!is_totem()): ?>
						<p class="share-element hide translatable">Share</p>
					<?php endif;
					if(is_totem()): ?>
						<p class="room-url"></p>
					<?php endif; ?>
				</div>
				<?php if (is_totem()): ?>
					<div id="room-qrcode"></div>
				<?php endif ?>
			</div>
		</div>
		<div class="floors-zoom-selector">
			<div class="floors-selector hide">
				<span class="icon-building icon-building-A1">A1</span>
				<ul class="floors-list">
				</ul>
			</div>
			<div class="zoom-selector">
				<span class="plus">+</span>
				<span class="minus">_</span>
			</div>
		</div>
	</div>
	<?php if(!is_totem()) :
		include(__DIR__.'/parts/panel-footer.php');
	endif; ?>
	<span class="js-media-query-tester"></span>
	<div class="sharer-container hide">
		<div class="sharer">
			<input type="text" id="sharer-url-input" readonly />
			<span id="copy-sharer-url" class="translatable">Copia link</span>
		</div>
	</div>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src='src/js/hammer.min.js'></script>
<script src='src/js/panzoom.js'></script>
<script type="text/javascript">
	<?php if(isset($_GET['shared']) && !empty($_GET['shared'])) :?>
		var requestedElement = '<?php echo json_encode($_GET['shared']); ?>';	
	<?php endif;
	if(isset($_GET['lang']) && !empty($_GET['lang'])) :?>
		var requestedLang = '<?php echo json_encode($_GET['lang']); ?>';	
	<?php endif;
	//NOI Maps
	if($data && !empty($data) && is_array($data)) :
		if($buildings_summary && !empty($buildings_summary)) : ?>
			var buildings_summary = <?php echo json_encode($buildings_summary); ?>;
		<?php endif;
		if($categories_array && !empty($categories_array)) : ?>
			var categories_array = <?php echo json_encode($categories_array); ?>;
		<?php endif;
	endif;

	//Maps
	if($maps_svgs && !empty($maps_svgs)) : ?>
		var maps_svgs = <?php echo json_encode($maps_svgs); ?>;
	<?php endif;
	//Translations
	if($translations && !empty($translations)) : ?>
		var translations = <?php echo json_encode($translations); ?>;
	<?php endif;
	if($localizedLinks && !empty($localizedLinks)) : ?>
		var localizedLinks = <?php echo json_encode($localizedLinks); ?>;
	<?php endif;
	//Cookie Config
	if($cookie_config && !empty($cookie_config)) : ?>
		var cookie_config = <?php echo json_encode($cookie_config); ?>;
	<?php endif; ?>
</script>
<?php if (is_totem()): ?>
	<script src='src/js/qrcode.min.js'></script>
<?php else: ?>
	<?php include_once(__DIR__.'/parts/google-tag-manager.php'); ?>
	<script src='src/js/jquery.cookie-madeincima.js'></script>
<?php endif; ?>
<script src='src/js/ua-parser.min.js'></script>
<script src='src/js/utility.js'></script>
</html>