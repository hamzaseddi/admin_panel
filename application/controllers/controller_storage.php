<?php
    session_cheker();
    class Controller_Storage extends Controller{
        function action_index() {
            $this->view->load('common/header_view');
            $this->view->load('common/menu_view');
         	$data['categories'] = Storage_categories::find_all_cats();
            $this->view->load('storage_view', $data);
            $this->view->load('common/footer_view');
        }

        function action_categories() {
        	$this->view->load('common/header_view');
            $this->view->load('common/menu_view');
            $data['categories'] = Storage_categories::find_all_cats();
            $this->view->load('storage_cat_view', $data);
            $this->view->load('common/footer_view');
        }

        function action_create_cat() {
        	if(isset($_POST)) {
				Storage_categories::create_cat(  
					$_POST['cat_name'] 
				); 
				redirect('storage/categories');
			}
        }

        function action_edit_cat_index() {
        	if(is_numeric($_GET['id'])) {
				$id = $_GET['id'];
				$data['cat'] = Storage_categories::find_cat($id);
			}
			$this->view->load('common/header_view');
			$this->view->load('common/menu_view');
			$this->view->load('cat_edit_view', $data);
			$this->view->load('common/footer_view');	
        }

        function action_edit_cat() {
        	if(is_numeric($_POST['id'])) {
				Storage_categories::edit_cat(
					$_POST['id'],
					$_POST['cat_name']
				);
			}
			redirect('storage/categories');
        }

        function action_delete_cat() {
        	if(is_numeric($_GET['id'])) {
				$id = $_GET['id'];
				Storage_categories::delete_cat($id);
			}
			redirect('storage/categories');
        }

        function action_show_cat() {
        	if(is_numeric($_GET['id'])) {
				$id = $_GET['id'];
				$data['docs'] = Storage::show_all_from_cat($id);
			}
			$this->view->load('common/header_view');
			$this->view->load('common/menu_view');
			$this->view->load('cat_view', $data);
			$this->view->load('common/footer_view');
        }

        function action_upload_doc() {
            if(isset($_FILES['doc'])){
                $errors= array();
                $file_name  =   $_FILES['doc']['name']; // original file name
                $file_size  =   $_FILES['doc']['size']; // file size 
                $file_tmp   =   $_FILES['doc']['tmp_name']; // temp file name
                $file_type  =   $_FILES['doc']['type'];   //file type
                $file_ext   =   strtolower(end(explode('.',$_FILES['doc']['name']))); //get file extention
                $extensions =   array("txt","pdf","jpg","png","jpeg","html","doc","odt");     // allowed file type
                $rand       =   rand(1000, 9999); // random part for new file name 
                $new_name   =   $rand.$file_name; // new file name rand+old

                if(in_array($file_ext,$extensions )=== false) {
                    $errors[]='Данный фаил не подходит попробуйте выбрать один из "txt","pdf","jpg","png","jpeg","html","doc"';
                }

                if($file_size > 10097152){
                    $errors[]='Размер файла не должен привышать 10 MB';
                }   

                if(empty($errors)==true){
                    move_uploaded_file($file_tmp,"uploads/doc/".$new_name);
                    Storage::insert_file_to_db($new_name,$_POST['cat_id']);
                }else{
                    print_r($errors);
                }
            }
            redirect('storage');
        }
    }