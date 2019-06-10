<div class="header">
	<div class="aux">
		<?php $root_url = sprintf("%s://%s",isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',$_SERVER['SERVER_NAME']); ?>
		<a class="logo" href="<?php echo $root_url.'/noi-maps/'; ?>">NOI Techpark Suedtirol/Alto Adige</a>
		<a href="<?php echo $root_url.'/noi-maps/'; ?>" class="main-site-title site-title">NOI Techpark Maps</a>
		<?php if (isset($full_header) && $full_header): ?>
			<div class="navbar-container hide">
				<a class="site-title hide" href="#">NOI Techpark Maps</a>
				<nav class="dropdown building-select hide">
					<span class="dropdown-trigger hide"></span>
					<ul class="dropdown-list hide"></ul>
				</nav>
			</div>
		<?php endif; ?>
		<div class="language-selector-container">
			<div class="title-container">
				<span class="lang-close icon-close"><span class="icon translatable">Chiudi</span></span>
				<h2 class="translatable">Opzioni</h2>
			</div>
			<div class="language-container hide-on-mobile">
				<nav class="language-selector language-selector-desktop">
					<ul class="language-list">
						<li class="active"><a href="#" data-language="it" class="translatable language-tag">IT</a></li>
						<li><a href="#" data-language="en" class="translatable language-tag">EN</a></li>
						<li><a href="#" data-language="de" class="translatable language-tag">DE</a></li>
					</ul>
				</nav>
			</div>
			<div class="language-container hide-on-desktop">
				<p class="accent-color translatable">Scegli la lingua</p>
				<nav class="filters-dropdown dropdown language-selector">
					<span class="dropdown-trigger translatable language-tag" data-language="it">Italiano</span>
					<ul class="dropdown-list language-list">
						<li><a href="#" data-language="en" class="translatable language-tag">Inglese</a></li>
						<li><a href="#" data-language="de" class="translatable language-tag">Tedesco</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<span class="menu-trigger icon-hamburger"><span class="icon translatable">Menu</span></span>
		<?php if (isset($full_header) && $full_header): ?>
			<span class="search-trigger icon-search translatable">Ricerca</span>
			<span class="option-trigger icon-option"><span class="icon translatable">Filtri</span></span>
		<?php endif; ?>
		<span class="lang-trigger icon-lang"><span class="icon translatable">Lingua</span></span>
		<?php if (isset($full_header) && $full_header): ?>
			<?php include(dirname(__DIR__).'/parts/search-container.php');
			include(dirname(__DIR__).'/parts/option-filter-container.php') ?>
		<?php endif; ?>
	</div>
</div>