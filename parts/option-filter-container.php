<div class="option-filter-container">
	<div class="title-container">
		<span class="option-close icon-close"><span class="icon translatable">Chiudi</span></span>
		<h2 class="translatable">Chiudi i filtri</h2>
	</div>
	<!-- <div class="options-container language-selector-container">
		<p class="accent-color">Choose the language</p>
		<nav class="filters-dropdown dropdown language-selector">
			<span class="dropdown-trigger translatable" data-language="it">Italiano</span>
			<ul class="dropdown-list">
				<li><a href="#" data-language="en" class="translatable">Inglese</a></li>
				<li><a href="#" data-language="de" class="translatable">Tedesco</a></li>
			</ul>
		</nav>
	</div> -->
	<div class="filter-container-container">
		<div class="filter-container">
			<p class="accent-color translatable">Cambia edificio</p>
			<?php if(isset($buildings_summary) && is_array($buildings_summary) && !empty($buildings_summary) ):
				$floorplans = array();
				foreach ($buildings_summary as $key => $building) :
					$buildingArray = array();
					if (
						( isset($building) && isset($building['Building Code']) ) ||
						( isset($building) && isset($building['Building Name (IT)']) )
					):
						$name = '';
						if( isset($building) && isset($building['Building Code']) ) :
							$name .= $building['Building Code'];
							if( isset($building) && isset($building['Building Name (IT)']) ) :
								$name .= ' ';
							endif;
						endif;
						/*if( isset($building) && isset($building['Building Name (IT)']) ) :
							$name .= $building['Building Name (IT)'];
						endif;*/
						$buildingArray['building_code'] = $building['Building Code'];
						$buildingArray['building_name'] = $name;
						$floorplans[] = $buildingArray;
					endif;
				endforeach;
				if(!empty($floorplans)): ?>
					<div class="filters-dropdown dropdown building-select">
						<span class="dropdown-trigger"><?php echo $floorplans[0]['building_name']; ?></span>
						<ul class="dropdown-list">
							<?php foreach ($floorplans as $key => $value):
								if($key==0) :
									continue;
								endif; ?>
								<li><a href="#" class="clickable" data-building-code="<?php echo $value['building_code']; ?>"><?php echo $value['building_name']; ?></a></li>
							<?php endforeach ?>
						</ul>
					</div>
				<?php endif; ?>
			<?php endif; ?>
		</div>
		<div class="filter-container">
			<p class="accent-color translatable">Visibilità elementi in planimetria</p>
			<ul class="filters">
				<li class="single-filter">
					<input class="all-filters-checkbox" type="checkbox" id="all-1" checked="checked">
					<label for="all-1" class="translatable">Attiva tutte le opzioni</label>
				</li>
				<?php if(isset($categories_array) && is_array($categories_array) && !empty($categories_array)) :
					foreach ($categories_array as $key => $category) :
						$id = preg_replace('/\W+/','',strtolower(strip_tags($key)));
						$name_it = isset($category['name_it']) && !empty($category['name_it']) ? $category['name_it'] : null;
						$category_id = isset($category['ID']) && !empty($category['ID']) ? $category['ID'] : null;
						if($name_it && $category_id) : ?>
							<li class="single-filter">
								<input type="checkbox" id="<?php echo $id; ?>" checked="checked" data-category="<?php echo $category_id; ?>" class="filter-trigger" />
								<label for="<?php echo $id; ?>"><?php echo $name_it; ?></label>
							</li>
						<?php endif;
					endforeach;
				endif; ?>
			</ul>
		</div>
	</div>
</div>