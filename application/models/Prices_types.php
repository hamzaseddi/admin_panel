<?php
	class Prices_types extends ActiveRecord\Model {
		public static $table_name = 'prices_types';

		public function find_all_types() {
		   	return Prices_types::find('all');
		}	
	}

