<?php require_once __DIR__.'/fetchDataNOI.class.php';

/*if(isset( $_POST['test'] )) :
	$fetchDataNOI = new fetchDataNOI();
	$result = $fetchDataNOI->fetchData();
	echo json_encode($result);
endif;*/

if(isset( $_POST['action'] )) :
	switch ($_POST['action']) :

		case 'getFullNoiData':
			$fetchDataNOI = new fetchDataNOI();
			echo json_encode($fetchDataNOI->fetchData());
			break;

		case 'getMapSVG':
			if(isset($_POST['building']) && !empty($_POST['building'])) :
				include_once(dirname(__DIR__).'/config.php');
				$return_array = array();
				if(isset($maps_svgs) && isset($maps_svgs[$_POST['building']]) && isset($maps_svgs[$_POST['building']]['floors']) ) :					
					foreach ($maps_svgs[$_POST['building']]['floors'] as $floor => $file) :
						//new_log($file);
						if(file_exists(dirname(__DIR__).'/maps/'.$file)) :
							$return_array[$_POST['building']]['floors'][$floor] = file_get_contents(dirname(__DIR__).'/maps/'.$file);
						endif;
					endforeach;
				endif;
				echo json_encode($return_array);
			endif;
			break;

		case 'getSearchResult':
			//get search results or get initial sidegroup			
			$result = array();
			$language = 'IT';
			if(isset($_POST['language']) && !empty($_POST['language'])) :
				$language = $_POST['language'];
			endif;
			//if rooms are requested otherwise get ALL rooms
			if(isset($_POST['rooms']) && !empty($_POST['rooms'])) :
				include_once(dirname(__DIR__).'/config.php');
				try {
					$postRooms = json_decode($_POST['rooms'], true);
				}catch(Exception $e) {}
			else:
				$fetchDataNOI = new fetchDataNOI();
				$postRooms = $fetchDataNOI->fetchData();
				$groups_categories_array = $fetchDataNOI->groups_categories_array;
			endif;

			if(isset($postRooms) && is_array($postRooms) && count($postRooms)>0) :				
				if(isset($groups_categories_array) && is_array($groups_categories_array) && !empty($groups_categories_array)) :
					$grouped_array = array();
					if(isset($_POST['rooms'])):				
						foreach ($postRooms as $key => $room):
							if(isset($room['Group']) && !empty($room['Group'])):
								$grouped_array[$room['Group']][] = $room;
							else:
								$grouped_array['Other'][] = $room;
							endif;
						endforeach;
					else:
						foreach ($postRooms as $building_code => $building):
							foreach ($building as $room_id => $room) :
								if(isset($room['Group']) && !empty($room['Group'])):
									$grouped_array[$room['Group']][] = $room;
								endif;
							endforeach;
						endforeach;
					endif;
					if(!empty($grouped_array)) :
						$result = '';
						foreach ($grouped_array as $group_name => $grouped_rooms) :
							$group = isset($groups_categories_array[$group_name]) && !empty($groups_categories_array[$group_name]) ? $groups_categories_array[$group_name] : null;
							if(!$group)
								continue;
							$group_title = isset($group['name_'.strtolower($language)]) && !empty($group['name_'.strtolower($language)]) ? $group['name_'.strtolower($language)] : null;
							$group_description = isset($group['description_'.strtolower($language)]) && !empty($group['description_'.strtolower($language)]) ? $group['description_'.strtolower($language)] : null;
							$logo = isset($group['logo']) && !empty($group['logo']) ? $group['logo'] : null;
							$rooms = $grouped_rooms;
							$result .= '<div class="category-group dropdown">';
								$result .= '<div class="group-title-container dropdown-trigger">';
									if ($logo):
										$result .= '<span class="icon-container">'.$logo.'</span>';
									endif;
									$result .= '<h2>'.$group_title.'</h2>';
									if ($group_description):
										$result .= '<p>'.$group_description.'</p>';
									endif;
								$result .= '</div>';
								if($rooms):
									$result .= '<ul class="group-rooms-list dropdown-list">';
									$maxRooms = 5;


									//Google Sheet column names
									$poi_name_column = strtolower($language).':Name';

									foreach ($rooms as $key => $room):
										//if default sidebar groups, max 10 elements
										if(!isset($_POST['rooms']) && ($key+1)>=$maxRooms) :
											continue;
										endif;
										$room_code = isset($room['Room Code']) && !empty($room['Room Code']) ? $room['Room Code'] : null; 
										$room_building = isset($room['Building Code']) && !empty($room['Building Code']) ? $room['Building Code'] : null;
										$room_name = isset($room[$poi_name_column]) && !empty($room[$poi_name_column]) ? $room[$poi_name_column] : null;
										$room_floor = isset($room['Floor']) && $room['Floor']!='' ? $room['Floor'] : null;
										$room_number = isset($room['Room Number']) && !empty($room['Room Number']) ? $room['Room Number'] : null;
										$result .= '<li class="single-room clickable" data-room-code="'.$room_code.'" data-floor-code="'.$room_floor.'" data-building-code="'.$room_building.'">';
											$result .= '<a href="#">';
											if($room_building):
												$result .= '<span class="room-icon-building icon-building-'.$room_building.'">'.$room_building.'</span>';
											endif;
											if($room_name):
												$result .= '<span class="room-name">'.$room_name.'</span>';
											endif;
											if($room_floor!=null) :
												$result .= '<span class="room-floor">'.$room_floor.'</span>';
											endif;
											if($room_number!=null) :
												$result .= '<span class="room-number">'.$room_number.'</span>';
											endif;
											$result .= '</a>';
										$result .= '</li>';
									endforeach;
									$result .= '</ul>';
								endif;
							$result .= '</div>';
						endforeach;
					endif;
				endif;
			endif;
			echo json_encode($result);
		default:
			# code...
			break;
	endswitch;
endif;

 ?>