<?php
	class User_time extends ActiveRecord\Model {
		public static $table_name = 'user_time';

		function get_time() {
			return User_time::find('all', array('time_status' => 1));
		}

		function get_time_by_id($id){
			return User_time::find($id);
		}

		function add_time($client_id, $time_start, $time_end, $spot_id, $price) {

			User_time::create(array(
				'spot_id'		=>  $spot_id,
				'user_id'		=>	$client_id,
				'time_start'	=>	$time_start,
				'time_end'		=>	$time_end,
				'time_status'	=>  1
			));

			$year = date('Y', strtotime($time_start));
			$month = date('m', strtotime($time_start));
			Accounting::add_entry($time_start, $price, $client_id, $spot_id, $year, $month);
		}
	}