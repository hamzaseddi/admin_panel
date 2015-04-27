<?php
	class Albums extends ActiveRecord\Model {
		public static $table_name = 'albums';

		function create_album($name) {
			Albums::create(array(
				'name' => $name,
			));
		}

		function edit_album($id,$name){
			$album = Albums::find($id);
			$album -> name = $name;
			$album -> save();
		}

		function find_album($id) {
			return Albums::find($id);
		}

		function find_all_albums() {
			return Albums::find('all');
		}
		
		function delete_album($id) {
			$album = Albums::find($id);
			$album -> delete();

			Gallery::delete_all_from_album($id);
		}
	}