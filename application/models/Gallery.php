<?php
	class Gallery extends ActiveRecord\Model {
		public static $table_name = 'gallery_files';

		function insert_file_to_db($file_name, $album_id){
			Gallery::create(array(
				'file_name' 	=> $file_name,
				'upload_time'   => time(),
				'album_id'		=> $album_id
			));
		}

		function delete_all_from_album($id) {
			$photos = Gallery::all(array('conditions' => array('album_id = ?', $id)));
			foreach ($photos as $photo) {
				$path = 'uploads/'.$photo-> file_name;
				if(file_exists($path)) {
					unlink($path);
				}
			}
			Gallery::delete_all(array('conditions' => array('album_id = ?', $id)));
		}

		function delete_photo($id) {
			$photo = Gallery::find($id);
			$path = 'uploads/'.$photo-> file_name;
			if(file_exists($path)) {
				unlink($path);
			}
			$photo -> delete();
		}

		function show_all_from_album($id) {
			return Gallery::all(array('conditions' => array('album_id = ?', $id)));
		}
	}