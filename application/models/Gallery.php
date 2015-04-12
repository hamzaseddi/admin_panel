<?php
	class Gallery extends ActiveRecord\Model {
		public static $table_name = 'gallery_files';

		public function insert_file_to_db($results) {
			$type = $results['post_data']['type'];
			if($type == 'image/gif') {
				$type = 'gif';
			}
			if($type == 'image/jpeg') {
				$type = 'jpeg';
			}
			if($type == 'image/pjpeg') {
				$type = 'image/pjpeg';
			}
			if($type == 'image/png') {
				$type = 'png';
			}
			Gallery::create(array(
				'file_name' 	=> $results['filename'],
				'file_ext'  	=> $type,
				'upload_time'   => time(),
				'album' 		=>	'test'
			));

		}


	}

