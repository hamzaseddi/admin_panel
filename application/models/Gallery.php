<?php
	class Gallery extends ActiveRecord\Model {
		public static $table_name = 'gallery_files';

		function insert_file_to_db($file_name) {
			Gallery::create(array(
				'file_name' 	=> $file_name,
				'upload_time'   => time(),
				'album_id'		=> 1
			));
		}

		function show_all_images() {
			return Gallery::find('all');
		}
	}