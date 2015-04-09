<?php
	session_cheker();
	class Controller_Prices extends Controller{
		function action_index() {
			$this->view->load('common/header_view');
			$this->view->load('common/menu_view');

			$data['prices'] = Prices::find_all_prices();
			$data['types'] = Prices_types::find_all_types();

			$this->view->load('prices_view',$data);
			$this->view->load('common/footer_view');
		}

		function action_new_price() {
			$this->view->load('common/header_view');
			$this->view->load('common/menu_view');

			$data = Prices_types::find_all_types();

			$this->view->load('new_prices_view',$data);
			$this->view->load('common/footer_view');
		}

		function action_add_new_price() {
			if(isset($_POST)) {
				Prices::add_new_price(  
					$_POST['type_id'], 
					$_POST['price'], 
					$_POST['time_amount']
				); 
				redirect('prices');
			}
		}

		function action_delete_price_entry() {
			if(is_numeric($_GET['id'])) {
				$id = $_GET['id'];
				Prices::delete_price_entry($id);
			}
			redirect('prices');
		}

		function action_edit() {
			if(is_numeric($_GET['id'])) {
				$id = $_GET['id'];

				$data['entry'] = Prices::find_price_entry_by_id($id);
				$data['types'] = Prices_types::find_all_types();

				$this->view->load('common/header_view');
				$this->view->load('common/menu_view');
				$this->view->load('edit_price_view',$data);
				$this->view->load('common/footer_view');
			}else {
				redirect('common/404');
			}
		}

		function action_edit_price () {
			if(is_numeric($_POST['id'])) {
				$id = $_POST['id'];
				Prices::edit_price_entry(
					$id,
					$_POST['type_id'],
					$_POST['time_amount'], 
					$_POST['price']
				); 
			}
			redirect('prices');
		}
	}
