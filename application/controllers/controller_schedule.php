<?php
	session_cheker();
	class Controller_Schedule extends Controller{
		function action_index() {
			$this->view->load('common/header_view');
			$this->view->load('common/menu_view');
			$data['workers'] = User::find_all_users();
			$this->view->load('schedule_view',$data);
//            $this->view->load('common/footer_view.php');
		}

		function action_get_data() {
			$event_array = Schedule::get_event_data();
			$events = array();
			$i=0;
			foreach($event_array as $event){
				$events[$i]['title'] = $event -> title;
				$events[$i]['start'] = date('Y-m-d', strtotime($event -> start));
				$events[$i]['url'] 	 = base_url('schedule/delete_event/?id=').$event -> id;
				$i++;
			}
			echo json_encode($events);
		}

		function action_delete_event() {
			if(is_numeric($_GET['id'])) {
				$id = $_GET['id'];
				Schedule::delete_event_by_id($id);
			}
			redirect('schedule');
		}

		function action_event_save() {
			if(!empty($_POST)) {
				Schedule::add_event(
					$_POST['title'],
					$_POST['start']
				);
			}else{
				redirect('schedule');
			}
		}
	}
