<?php
	session_cheker();
	class Controller_Timers extends Controller{
		function action_index() {
			$data= array();
			$data['spots'] 		= Spots::find_all_spots();
			$data['clients'] 	= Clients::find_all_clients();
			$data['prices'] 	= Prices::find_all_prices();
			$data['time'] 		= User_time::get_time();

			$this->view->load('common/header_view');
			$this->view->load('common/menu_view');
			$this->view->load('timers_view',$data);
			$this->view->load('common/footer_view');
		}
	}
