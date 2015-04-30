<?php
	class Storage extends ActiveRecord\Model {
		public static $table_name = 'storage';

		function insert_file_to_db($file_name, $album_id){
			Storage::create(array(
				'file_name' 	=> $file_name,
				'upload_time'   => time(),
				'album_id'		=> $album_id
			));
		}

		function delete_all_from_cat($id) {
			$docs = Storage::all(array('conditions' => array('cat_id = ?', $id)));
			foreach ($docs as $doc) {
				$path = 'uploads/doc'.$doc-> file_name;
				if(file_exists($path)) {
					unlink($path);
				}
			}
			Storage::delete_all(array('conditions' => array('cat_id = ?', $id)));
		}

		function delete_doc($id) {
			$doc = Storage::find($id);
			$path = 'uploads/doc'.$doc-> file_name;
			if(file_exists($path)) {
				unlink($path);
			}
			$doc -> delete();
		}

		function show_all_from_cat($id) {
			return Storage::all(array('conditions' => array('cat_id = ?', $id)));
		}
	}