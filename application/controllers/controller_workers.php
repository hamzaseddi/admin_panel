<?php
	session_cheker();
	class Controller_Workers extends Controller {

		function action_index() {
			$this->view->load('common/header_view');
			$this->view->load('common/menu_view');

			$data['workers'] = User::find_all_users();

			$this->view->load('workers_view', $data);
			$this->view->load('common/footer_view');
		}

		function action_create() {
			$this->view->load('common/header_view');
			$this->view->load('common/menu_view');
			$this->view->load('create_worker_view');
			$this->view->load('common/footer_view');
		}

		function action_edit() {
			if(is_numeric($_GET['id'])) {
				$id = $_GET['id'];
				$data['worker'] = User::find_user_by_id($id);
			}
			$this->view->load('common/header_view');
			$this->view->load('common/menu_view');
			$this->view->load('edit_worker_view',$data);
			$this->view->load('common/footer_view');
		}

		function action_edit_user () {
			if(is_numeric($_POST['id'])) {
				$id = $_POST['id'];
				User::edit_user(
					$_POST['id'],
					$_POST['first_name'], 
					$_POST['last_name'], 
					$_POST['birthday'], 
					$_POST['phone'], 
					$_POST['email'], 
					$_POST['password']
				); 
			}
			redirect('workers');
		}
		
		function action_new_user() {
			if(isset($_POST)) {
				User::create_user(  
					$_POST['first_name'], 
					$_POST['last_name'], 
					$_POST['birthday'], 
					$_POST['phone'], 
					$_POST['email'], 
					$_POST['password']
				); 
				redirect('workers');
			}
		}

		function action_delete_user() {
			if(is_numeric($_GET['id'])) {
				$id = $_GET['id'];
				User::delete_user($id);
			}
			redirect('workers');
		}
	}