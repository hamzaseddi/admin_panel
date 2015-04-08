<?php
	class User extends ActiveRecord\Model {
		public static $table_name = 'users';
		
		public function create_user($first_name, $last_name, $birthday, $phone, $email, $password) {
			User::create(array(
				'first_name' => $first_name,
				'last_name'  => $last_name,
				'birthday'   => $birthday,
				'phone'      => $phone,
				'email'      => $email,
				'password'   => md5($password) 
			));
		}

		public function find_user_by_id($id) {
			return User::find($id);
		}

		public function find_all_users() {
		   return User::find('all');
		}
		public function delete_user($id) {
			$user = User::find($id);
			$user -> delete();
	    }

	    public function edit_user($id, $first_name, $last_name, $birthday, $phone, $email) {
	    	$user = User::find($id);
	    	$user -> first_name = $first_name;
	    	$user -> last_name  = $last_name;
	    	$user -> birthday 	= $birthday;
	    	$user -> phone 		= $phone;
	    	$user -> email 		= $email;
	    	$user -> save();
	    }
	}