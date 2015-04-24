<?php
	session_cheker();
	class Controller_Spot extends Controller{

		function action_take_spot() {
			if(is_numeric($_POST['spot_id'])) {
				$client_id = $_POST['client_id'];
				$spot_id = $_POST['spot_id'];
				$price_id = $_POST['price_id'];

				$price_info = Prices::find_price_entry_by_id($price_id);
				$price = $price_info -> price;
				$amount = $price_info -> time_amount;
				
				Spots::take_spot($client_id, $spot_id, $amount+1, $price);
			}
			redirect('timers');
		}

		function action_untake_spot() {
			if(is_numeric($_POST['spot_id'])) {
				$time_id = $_POST['time_id'];
				$spot_id = $_POST['spot_id'];
				Spots::untake_spot($spot_id,$time_id);
			}
			redirect('timers');
		}
	}