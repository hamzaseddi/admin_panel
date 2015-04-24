<?php
	class Spots extends ActiveRecord\Model {
		public static $table_name = 'spots';

		function find_all_spots() {
			return Spots::find('all');
		}

		public function take_spot($client_id, $spot_id, $amount, $price){
			$spot = Spots::find($spot_id);
			$spot -> user_on_spot 	= $client_id;
			$spot -> status 		= 'danger'; //place taken
			$spot -> save();

			$amount =intval($amount*60);	//amount of minutes 
			$time_start = date('Y/m/d H:i'); 
			$time_end = date('Y/m/d H:i', strtotime($time_start. ' + '.$amount.' minutes'));

			User_time::add_time($client_id, $time_start, $time_end, $spot_id, $price);
 
			redirect('timers');
		}

		function untake_spot($spot_id,$time_id) {
			$spot = Spots::find($spot_id);
			$spot -> user_on_spot 	= 0;
			$spot -> status 		= 'info'; //place is free
			$spot -> save();

			$time = User_time::get_time_by_id($time_id);
			$time -> time_status = 0;
			$time -> save();
		}
	}

