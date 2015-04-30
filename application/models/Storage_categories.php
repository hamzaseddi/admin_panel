<?php
	class Storage_categories extends ActiveRecord\Model {
		public static $table_name = 'storage_cat';

		function create_cat($name) {
			Storage_categories::create(array(
				'name' => $name
			));
		}

		function edit_cat($id,$name){
			$cat = Storage_categories::find($id);
			$cat -> name = $name;
			$cat -> save();
		}

		function find_cat($id) {
			return Storage_categories::find($id);
		}

		function find_all_cats() {
			return Storage_categories::find('all');
		}
		
		function delete_cat($id) {
			$cat = Storage_categories::find($id);
			$cat -> delete();

			//Storage::delete_all_from_album($id);
		}
	}