<?php
	class Albums extends ActiveRecord\Model {
		public static $table_name = 'albums';

		function create_album($name) {
			Albums::create(array(
				'name' => $name,
			));
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
		}
	}