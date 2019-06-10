<div class="search-container" style="overflow: scroll;">
	<div class="input-container">
		<input type="text" placeholder="Ricerca (minimo 3 caratteri)" class="search translatable" />
	</div>
	<div class="loader">
		<img src="./src/images/loading.svg" />
	</div>
	<div class="category-group-container">
		<?php if (false && $side_panel_groups):
			foreach ($side_panel_groups as $group_name => $group) :
				$name_it = isset($group['name_it']) && !empty($group['name_it']) ? $group['name_it'] : null;
				$name_en = isset($group['name_en']) && !empty($group['name_en']) ? $group['name_en'] : null;
				$name_de = isset($group['name_de']) && !empty($group['name_de']) ? $group['name_de'] : null;
				$description_it = isset($group['description_it']) && !empty($group['description_it']) ? $group['description_it'] : null;
				$description_en = isset($group['description_en']) && !empty($group['description_en']) ? $group['description_en'] : null;
				$description_de = isset($group['description_de']) && !empty($group['description_de']) ? $group['description_de'] : null;
				$logo = isset($group['logo']) && !empty($group['logo']) ? $group['logo'] : null;
				$rooms = isset($group['rooms']) && is_array($group['rooms']) && !empty($group['rooms']) ? $group['rooms'] : null; ?>
				<div class="category-group dropdown open">
					<div class="group-title-container dropdown-trigger">
						<?php if ($logo): ?>						
							<span class="icon-container"><?php echo $logo; ?></span>
						<?php endif; ?>
						<h2><?php echo $group_name; ?></h2>
						<?php if ($description_it): ?>						
							<p><?php echo $description_it; ?></p>
						<?php endif; ?>
					</div>
					<?php if($rooms): ?>
						<ul class="group-rooms-list dropdown-list">
							<?php foreach ($rooms as $key => $room):
								$room_name_it = $room_name_en = $room_name_de = $room_floor = null;
								foreach ($data as $building_name => $building) :
									if(isset($building[$room])) :
										$room_building = $building_name;
										if(isset($building[$room]['POI Name (IT)'])) :
											$room_name_it = $building[$room]['POI Name (IT)'];
										endif;
										if(isset($building[$room]['POI Name (EN)'])) :
											$room_name_en = $building[$room]['POI Name (EN)'];
										endif;
										if(isset($building[$room]['POI Name (DE)'])) :
											$room_name_de = $building[$room]['POI Name (DE)'];
										endif;
										if(isset($building[$room]['Floor'])) :
											$room_floor = $building[$room]['Floor'];
										endif;
										if(isset($building[$room]['Room Number'])) :
											$room_number = $building[$room]['Room Number'];
										endif;
									endif;
								endforeach; ?>
								<li class="single-room clickable" data-room-code="<?php echo $room; ?>" data-floor-code="<?php echo $room_floor; ?>" data-building-code="<?php echo $room_building; ?>">
									<a href="#">
										<?php if($room_building): ?>
											<span class="room-icon-building icon-building-<?php echo $room_building; ?>"><?php echo $room_building; ?></span>
										<?php endif;
										if($room_name_it): ?>										
											<span class="room-name"><?php echo $room_name_it; ?></span>
										<?php endif;
										if($room_floor!='') : ?>
											<span class="room-floor"><?php echo $room_floor; ?></span>
										<?php endif;
										if($room_number!=null) : ?>
											<span class="room-number"><?php echo $room_number; ?></span>
										<?php endif; ?>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</div>
			<?php endforeach;
		endif; ?>
	</div>
</div>