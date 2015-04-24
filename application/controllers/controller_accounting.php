<?php
	session_cheker();
	class Controller_Accounting extends Controller{
		function action_index() {
			$this->view->load('common/header_view');
			$this->view->load('common/menu_view');
			$this->view->load('accounting_view');
			$this->view->load('common/footer_view');
		}

		function action_budget() {
			$this->view->load('common/header_view');
			$this->view->load('common/menu_view');

			$data['history'] 	= Budget::show_budget();
			
			$this->view->load('budget_view',$data);
			$this->view->load('common/footer_view');
		}
		/**
		 * edit 
		 * delete
		 */
		function action_add_budget() {
			if(is_numeric($_POST['cat_id'])) {
				$id = $_POST['cat_id'];
				Budget::add_budget($_POST['cat_id'], $_POST['target'], $_POST['price'], $_POST['date'], $_POST['user_id']);
			}
			redirect('accounting/budget');
		}

		function show_today_stat ($width, $height) {
			$array = Accounting::get_statistic_for_today();

			$data_array = array();
			$labels_array = array();
			$date_now = date('Y-m-d');
			foreach ($array as $value) {
				if($value->date1 == $date_now) {
					array_push($data_array, $value->total_price);
					array_push($labels_array, $value->hour);
				}
			}

			ChartJS::addDefaultColor(array(
											'fill' 			=> 'rgba(28,116,190,.8)',
											'stroke' 		=> '#e5801d', 
											'point' 		=> '#e5801d', 
											'pointStroke' 	=> '#e5801d'
											));
			// ChartJS::addDefaultColor(array(	
			// 							'fill' 			=> 'rgba(28,116,190,.8)',
			// 							'stroke' 		=> '#1c74be',
			// 							'point' 		=> '#1c74be', 
			// 							'pointStroke' 	=> '#1c74be'
			// 							));
			// ChartJS::addDefaultColor(array(	
			//  								'fill' 			=> 'rgba(212,41,31,.7)',
			//  								'stroke' 		=> '#d4291f',
			//  								'point' 		=> '#d4291f', 
			//  								'pointStroke' 	=> '#d4291f'
			//  							 ));
			// ChartJS::addDefaultColor(array(
		 	// 								'fill' 			=> '#dc693c', 
		 	// 								'stroke' 		=> '#ff0000', 
		 	// 								'point' 		=> '#ff0000', 
		 	// 								'pointStroke' 	=> '#ff0000'));
				// ChartJS::addDefaultColor(array( 
		 	// 								'fill' 			=> 'rgba(46,204,113,.8)', 
		 	// 								'stroke' 		=> '#2ecc71', 
		 	// 								'point' 		=> '#2ecc71', 
		 	// 								'pointStroke' 	=> '#2ecc71'));

			$chart = new ChartJS_Line('lines', $width, $height); // name height width 
			$chart ->addLine($data_array);
			$chart ->addLabels($labels_array); // labels array
			return $chart;
		}

		function show_month_stat ($width, $height) {
			$array = Accounting::get_statistic_for_months();

			$data_array = array();
			$labels_array = array();
			$month_now = date('m');
			foreach ($array as $value) {
				if($value->month == $month_now) {
					array_push($data_array, $value->total_price);
					array_push($labels_array, $value->date1);
				}
			}
			ChartJS::addDefaultColor(array(
											'fill' 			=> '#f2b21a',
											'stroke' 		=> '#e5801d', 
											'point' 		=> '#e5801d', 
											'pointStroke' 	=> '#e5801d'
											));

			$chart = new ChartJS_Line('lines', $width, $height); 
			$chart ->addLine($data_array);
			$chart ->addLabels($labels_array);
			return $chart;
		}

		function show_year_stat ($width, $height) {
			$array = Accounting::get_statistic_for_years();

			$data_array = array();
			$labels_array = array();
		
			foreach ($array as $value) {
				array_push($data_array, $value->total_price);
				array_push($labels_array, $value->year);
			}
			ChartJS::addDefaultColor(array(
											'fill' 			=> '#f2b21a',
											'stroke' 		=> '#e5801d', 
											'point' 		=> '#e5801d', 
											'pointStroke' 	=> '#e5801d'
											));

			$chart = new ChartJS_Line('lines', $width, $height); 
			$chart ->addLine($data_array);
			$chart ->addLabels($labels_array); 
			return $chart;
		}

		function stats_test() {
			$array = Accounting::years_months_data_price(); // array with full information
			$years = Accounting::years(); // array only with years what we have
			$months = Accounting::months(); // array onlu with months  what we have

			foreach ($years as $year) { // checking year array 
				foreach ($months as $month) { //cheking all months what we have 
					$data_array = array();
					$labels_array = array();

					foreach ($array as $value) { //cheking data from this months 
						if($year->year == $value->y && $month->month == $value->m) { // find that data what we need 
							array_push($data_array, $value->total_price);   //pushing to array 
							array_push($labels_array, $value->date1);
						}
					}
					/*
					* Charts colors 
					*/
					ChartJS::addDefaultColor(array(
													'fill' 			=> '#f2b21a',
													'stroke' 		=> '#e5801d', 
													'point' 		=> '#e5801d', 
													'pointStroke' 	=> '#e5801d'
													));
					
					/*
					* create a chart 
					* add lines and labels data 
					 */
					$chart = new ChartJS_Line('lines', 700, 400); // name height width 
					$chart ->addLine($data_array); //data array
					$chart ->addLabels($labels_array); // labels array

					echo 'Год '.$year->year.' месяц '.$month->month.'<br>';
					echo $chart;//draw chart 
				}	
			}
		}
	}