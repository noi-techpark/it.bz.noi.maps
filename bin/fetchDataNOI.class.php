<?php if(!class_exists('fetchDataNOI')):
	class fetchDataNOI {
		private $buildings_summary_sheet_url;
		private $buildings_sheets;
		public $groups_categories_array;
		private $buildings_rooms_return_array;
		private $groups_return_array;
		private $maps_svgs;

		public $translations;

		public $categories_array;

		function __construct() {
			include_once(dirname(__DIR__).'/config.php');
			$this->buildings_sheets = $buildings_sheets;
			$this->groups_categories_array = $groups_categories_array;
			$this->buildings_summary_sheet_url = $buildings_summary_sheet_url;
			$this->categories_array = $categories_array;
			$this->maps_svgs = $maps_svgs;
			$this->translations = $translations;
		}

		function fetchData() {
			if(isset($this->buildings_sheets) && is_array($this->buildings_sheets) && !empty($this->buildings_sheets)) :
				return $this->fetchDataSheets($this->buildings_sheets);
			else :
				return false;
			endif;
		}

		function fetchDataSheets($buildings_sheets) {
			$return_array = array();
			foreach ($buildings_sheets as $key => $sheet) :
				//Check if sheet is defined as inactive, otherwise try to fetch it anyway
				if(isset($sheet['active']) && $sheet['active'] == false) :
					continue;
				endif;
				if(
					isset($sheet['ID']) && !empty($sheet['ID']) &&
					isset($sheet['sheet_url']) && !empty($sheet['sheet_url'])
				) :
					$content = file_get_contents($sheet['sheet_url']);
					//empty content? continue
					if($content === FALSE) :
						continue;
					endif;					
					if(!empty($this->tsvToArray($content))) :
						$return_array[$sheet['ID']] = $this->tsvToArray($content);
					endif;
				endif;
			endforeach;
			// $return_array = array(
				//		A1 => array( 0: {Beacon ID: "A1-1.05", Floor: "-1", Company: "Company", Group: "Group", Type: "Type", …}, 1 .... , 2....),
				//		A2 => array( 0: {Beacon ID: "A2-1.05", Floor: "-1", Company: "Company", Group: "Group", Type: "Type", …} ..... )
			// )

			//Clean the array
			if($return_array && is_array($return_array) && !empty($return_array)) :
				foreach ($return_array as $building_ID => $building) :
					foreach ($building as $room) :
						//print_r($room);
						if(isset($room['Beacon ID']) && !empty($room['Beacon ID'])) :
							$room['Building Code'] = $building_ID;
							$beacon_ID = $this->cleanID($room['Beacon ID']);
							$room_number = $this->beaconIDtoRoomNumber($beacon_ID);
							if($beacon_ID):
								$room['Room Code'] = $beacon_ID;
								foreach ($room as $room_index => $room_value) :
									if(empty($room_index)) :
										unset($room[$room_index]);
									endif;
								endforeach;
								if(isset($room_number) && !empty($room_number) && $room_number!='') :
									$room['Room Number'] = $room_number;
								endif;
								$this->buildings_rooms_return_array[$building_ID][$beacon_ID] = $room;
							endif;
						endif;
					endforeach;
				endforeach;
			endif;
			//$array = array(
				//	A1 => array( A1-0-01: {Beacon ID: "A1 0.01", Floor: "0", Company: "NOI Techpark", Group: "", Type: "Corridor, Hall", …}, A1-0-02: {}....),
				//	A2 => array( A2-0-01: {Beacon ID: "A2 0.01", Floor: "0", Company: "NOI Techpark", Group: "", Type: "Corridor, Hall", …}, A2-0-02: {}....)
			// )
			//new_log($this->buildings_rooms_return_array);
			
			return $this->buildings_rooms_return_array;
		}

		function getSidepanelGroups() {
			$groups_return_array = array();
			if(
				isset($this->buildings_rooms_return_array) && is_array($this->buildings_rooms_return_array) && !empty($this->buildings_rooms_return_array) &&
				isset($this->groups_categories_array) && is_array($this->groups_categories_array) && !empty($this->groups_categories_array)
			) :
				foreach ($this->buildings_rooms_return_array as $building_code => $building) :
					foreach ($building as $key => $room) :
						if(
							isset($room['Beacon ID']) && !empty($room['Beacon ID']) &&
							isset($room['Group']) && !empty($room['Group'])
						) :
							if(isset($this->groups_categories_array[$room['Group']])) :
								if(!isset($groups_return_array[$room['Group']])) :
									$groups_return_array[$room['Group']] = $this->groups_categories_array[$room['Group']];
								endif;
								$groups_return_array[$room['Group']]['rooms'][] = $key;
							endif;
						endif;
					endforeach;
				endforeach;
			else :
				return 'NO';
			endif;
			//print_r($groups_return_array);
			$this->groups_return_array = $groups_return_array;
			return $this->groups_return_array;
		}

		function getBuildingsSummary() {
			if(isset($this->buildings_summary_sheet_url) && !empty($this->buildings_summary_sheet_url)) :
				$content = file_get_contents($this->buildings_summary_sheet_url);
				//empty content? continue
				if($content === FALSE) :
					return;
				endif;					
				if(!empty($this->tsvToArray($content))) :
					$return_array = array();
					foreach ($this->tsvToArray($content) as $key => $building) :
						if(isset($building['Building Code']) && !empty($building['Building Code']) && $building['Building Code']!='Building Code') :
							$return_array[$building['Building Code']] = $building;
						endif;
					endforeach;
					return $return_array;
				endif;
			else :
				return false;
			endif;
		}

		function tsvToArray($content) {
			$records = array();
			$lines = explode("\n", $content);
			if(isset($lines[0]) && !empty($lines[0])) :
				$colNames = explode("\t", $lines[0]);
				if(is_array($colNames) && !empty($colNames)) :
					foreach ( $lines as $line ) :
						$record = array();
						$bits = explode("\t", $line);
						if(is_array($bits) && !empty($bits)) :
							foreach ($bits as $key => $value) :
								$record[$colNames[$key]] = $value;
							endforeach;
							$records[]=$record;
						endif;
					endforeach;
				endif;
			endif;
			return $records;
		}

		function cleanID($ID) {
			if(isset($ID) && !empty($ID)) :
				$beacon_ID = str_replace('-', '--', $ID);
				$beacon_ID = str_replace(' ', '-', $beacon_ID);
				$beacon_ID = str_replace('.', '-', $beacon_ID);
				return $beacon_ID;
			else:
				return false;
			endif;
		}

		function beaconIDtoRoomNumber($roomID) {
			if($roomID && !empty($roomID) && $roomID!='') {
				$element_array = explode('-', $roomID);
				if(is_numeric(end($element_array))) {
					return end($element_array);
				} else {
					return prev($element_array).'-'.end($element_array);
				}
			}
		}

		function renderMapsSvgs() {
			if(isset($this->maps_svgs) && is_array($this->maps_svgs) && !empty($this->maps_svgs)) :
				$return_array = array();
				foreach ($this->maps_svgs as $building_code => $building) :
					if(isset($building['floors']) && is_array($building['floors']) && !empty($building['floors'])) :
						foreach ($building['floors'] as $floor => $file) :
							if(file_exists(dirname(__DIR__).'/maps/'.$file)) :
								$return_array[$building_code]['floors'][$floor] = str_replace(PHP_EOL, '',file_get_contents(dirname(__DIR__).'/maps/'.$file));
							endif;
						endforeach;
					endif;
				endforeach;
			endif;
			return $return_array;
		}
	}
endif; ?>