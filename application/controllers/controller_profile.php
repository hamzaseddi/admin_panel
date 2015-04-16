<?php
	session_cheker();
	class Controller_Profile extends Controller {
		function action_show() {
			if(is_numeric($_GET['id']) && isset($_GET['id'])) {
				$id = $_GET['id'];
				$data['workers'] = User::find_user_by_id($id);
			}else{
				redirect('404');
			}
            $this->view->load('common/header_view');
            $this->view->load('common/menu_view');
            $this->view->load('profile_view',$data);
            $this->view->load('common/footer_view');
		}
	}