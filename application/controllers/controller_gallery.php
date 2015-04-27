<?php
	session_cheker();
	class Controller_Gallery extends Controller{
		function action_index() {
			$this->view->load('common/header_view');
			$this->view->load('common/menu_view');
			$data['albums'] = Albums::find_all_albums();
			$this->view->load('gallery_view',$data);
			$this->view->load('common/footer_view');
		}

		function action_show_album() {
			if(is_numeric($_GET['id'])) {
				$id = $_GET['id'];
				$data['photos'] = Gallery::show_all_from_album($id);
			}
			$this->view->load('common/header_view');
			$this->view->load('common/menu_view');
			$this->view->load('album_view', $data);
			$this->view->load('common/footer_view');
		}

		function action_upload_photo() {
			if(isset($_FILES['image'])){
				$errors= array();
				$file_name 	=	$_FILES['image']['name']; // original file name
				$file_size 	=	$_FILES['image']['size']; // file size 
				$file_tmp 	=	$_FILES['image']['tmp_name']; // temp file name
				$file_type	=	$_FILES['image']['type'];	//file type
				$file_ext	=	strtolower(end(explode('.',$_FILES['image']['name']))); //get file extention
				$extensions = 	array("jpeg","jpg","png","gif"); 	 // allowed file type
				$rand 		= 	rand(1000, 9999); // random port for new file name 
				$new_name 	= 	$rand.$file_name; // new file name rand+old

				if(in_array($file_ext,$extensions )=== false) {
					$errors[]="extension not allowed, please choose a JPEG or PNG file.";
				}

				if($file_size > 8097152){
					$errors[]='File size must be excately 8 MB';
				}	

				if(empty($errors)==true){
					move_uploaded_file($file_tmp,"uploads/".$new_name);
					Gallery::insert_file_to_db($new_name,$_POST['album_id']);
				}else{
					print_r($errors);
				}
			}
			redirect('gallery');
		}

		function action_delete_photo() {
			if(is_numeric($_GET['id'])) {
				$id = $_GET['id'];
				Gallery::delete_photo($id);
			}
			redirect('gallery');
		}

		function action_albums() {
			$this->view->load('common/header_view');
			$this->view->load('common/menu_view');
			$data['albums'] = Albums::find_all_albums();
			$this->view->load('albums_view', $data);
			$this->view->load('common/footer_view');
		}

		function action_create_album() {
			if(isset($_POST)) {
				Albums::create_album(  
					$_POST['album_name'] 
				); 
				redirect('gallery/albums');
			}
		}

		function action_edit_album() {
			if(is_numeric($_GET['id'])) {
				$id = $_GET['id'];
				$data['album'] = Albums::find_album($id);
			}
			$this->view->load('common/header_view');
			$this->view->load('common/menu_view');
			$this->view->load('albums_edit_view', $data);
			$this->view->load('common/footer_view');
		}

		function action_edit_alb() {
			if(is_numeric($_POST['id'])) {
				Albums::edit_album(
					$_POST['id'],
					$_POST['album_name']
				);
			}
			redirect('gallery/albums');
		}

		function action_delete_album() {
			if(is_numeric($_GET['id'])) {
				$id = $_GET['id'];
				Albums::delete_album($id);
			}
			redirect('gallery/albums');
		}
	}