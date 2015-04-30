<?php
	class Saved_time extends ActiveRecord\Model {
		public static $table_name = 'saved_time';

		function save_time($client_id, $amount, $time_now) {
			Saved_time::create(array(
				'client_id'		=>  $client_id,
				'amount'		=>  $amount,
				'saved_at'		=>  $time_now
			));
		}

		function use_saved_time() {
			
		}