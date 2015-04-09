<?php
	class Prices extends ActiveRecord\Model {
		public static $table_name = 'prices';
		
		public function add_new_price($type_id, $price, $time_amount) {
			Prices::create(array(
				'type_id' => $type_id,
				'price'  => $price,
				'time_amount'   => $time_amount,
			));
		}

		public function find_all_prices() {
			return Prices::find('all');
		}

		public function find_price_entry_by_id($id) {
			return Prices::find($id);
		}


		public function delete_price_entry($id) {
			$entry = Prices::find($id);
			$entry-> delete();
		}
		
		public function edit_price_entry($id,$type_id, $time_amount, $price){
			$entry = Prices::find($id);
			$entry -> type_id 		= $type_id;
			$entry -> time_amount 	= $time_amount;
			$entry -> price			= $price;
			$entry -> save();
		}
	}

