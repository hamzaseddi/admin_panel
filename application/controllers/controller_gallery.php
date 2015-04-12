<?php
	session_cheker();
	class Controller_Gallery extends Controller{
		function action_index() {
			$this->view->load('common/header_view');
			$this->view->load('common/menu_view');
			$this->view->load('gallery_view');
			$this->view->load('common/footer_view');
		}
		/**
		*Todo need to finish gallery 
		* delete function 
		* add / create/ delete/ edit  album(category)
		* validtion images in gallery 
		* something with names of files
		* also need to change view of gallery + uloading form 
		* same functions will be with documents uploads 
		*/
		function action_upload_photo() {
			if (!empty($_FILES['test'])) {
				$upload = Upload::factory('uploads');
				$upload->file($_FILES['test']);
				$results = $upload->upload();
				
				if($results['status'] == 1){
					Gallery::insert_file_to_db($results);
				}else{
					redirect('gallery');
				}
			}
		}

		function action_delete_photo() {

		}

		function action_create_album() {

		}

		function action_edit_album() {

		}

		function action_delete_album() {

		}
	}