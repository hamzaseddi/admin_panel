<?php
	session_cheker();
	class Controller_Gallery extends Controller{
		function action_index() {
			$this->view->load('common/header_view');
			$this->view->load('common/menu_view');
			$data['all_images'] = Gallery::show_all_images();
			$this->view->load('gallery_view',$data);
			$this->view->load('common/footer_view');
		}
		/**
		*	Todo need to finish gallery 
		*	delete function 
		*	add / create/ delete/ edit  album(category)
		*	same functions will be with documents uploads 
		*/
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

		function action_create_album() {
			if(isset($_POST)) {
				Album::create_album(  
					$_POST['album_name'] 
				); 
				redirect('gallery');
			}
		}

		function action_edit_album() {
		}

		function action_delete_album() {
			if(is_numeric($_GET['id'])) {
				$id = $_GET['id'];
				Album::delete_album($id);
			}
			redirect('gallery');
		}
	}