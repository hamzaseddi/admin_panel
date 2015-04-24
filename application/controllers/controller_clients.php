<?php
    session_cheker();
    class Controller_Clients extends Controller{
        function action_index() {
            $this->view->load('common/header_view');
            $this->view->load('common/menu_view');
            $data['clients'] = Clients::find_all_clients();
            $this->view->load('clients_view', $data);
            $this->view->load('common/footer_view');
        }
        
        function action_edit() {
           if(is_numeric($_GET['id'])) {
				$id = $_GET['id'];
				$data['client'] = Clients::find_client_by_id($id);
			}
            $this->view->load('common/header_view');
            $this->view->load('common/menu_view');
            $this->view->load('edit_client_view',$data);
            $this->view->load('common/footer_view');
        }


        function action_create() {
            $this->view->load('common/header_view');
            $this->view->load('common/menu_view');
            $this->view->load('create_client_view');
            $this->view->load('common/footer_view');
        }

        function action_new_client() {
        	if(isset($_POST)) {
				Clients::create_client(  
					$_POST['first_name'], 
					$_POST['last_name'], 
					$_POST['birthday'], 
					$_POST['phone'], 
					$_POST['email'], 
					$_POST['info'],
					$_POST['type_id']
				); 
				redirect('clients');
			}
        }

        function action_edit_client() {
			if(is_numeric($_POST['id'])) {
				$id = $_POST['id'];
				Clients::edit_client(
					$_POST['id'], 
					$_POST['first_name'], 
					$_POST['last_name'], 
					$_POST['birthday'], 
					$_POST['phone'], 
					$_POST['email'], 
					$_POST['info'],
					$_POST['type_id']
				); 
			}
			redirect('clients');
        }

        function action_delete_client() {
        	if(is_numeric($_GET['id'])) {
				$id = $_GET['id'];
				Clients::delete_client($id);
			}
			redirect('clients');
        }
    }