<?php
	class Schedule extends ActiveRecord\Model {
		public static $table_name = 'calendar';

		function get_event_data() {
			return Schedule::find('all');
		}

		function delete_event_by_id($id) {
			$event = Schedule::find($id);
			$event -> delete();
		}

		function add_event($title, $start){
			Schedule::create(array(
				'title' => $title,
				'start' => $start
			));
		}
	}