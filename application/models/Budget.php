<?php
	class Budget extends ActiveRecord\Model {
		public static $table_name = 'budget';
		
		function add_budget($cat_id, $target, $price, $date,$user_id) {
			Budget::create(array(
				'cat_id' 	=> $cat_id,
				'target' 	=> $target,
				'price' 	=> $price,
				'date'  	=> $date,
				'user_id'	=> $user_id
			));
		}

		function budget_find_by_id($id) {
			return $budget = Budget::find($id);
		}

		function edit_budget($id, $target, $price, $date, $user_id) {
			$budget = Budget::find($id);
			$budget -> target 	= $target;
			$budget -> price    = $price;
			$budget -> date 	= $date;
			$budget -> user_id 	= $user_id;
			$budget -> save();
		}

		function delete_budget($id) {
			$entry = Budget::find($id);
			$entry-> delete();
		}

		function show_budget() {
			return Budget::find_by_sql('SELECT users.first_name, users.last_name, budget.id ,budget.target,
											   budget.price , budget.date, budget_cat.name 
										FROM budget 
										LEFT JOIN budget_cat ON budget.cat_id = budget_cat.id 
										LEFT JOIN users ON budget.user_id = users.id  
										ORDER BY date 
										DESC LIMIT 5');
		}
	}