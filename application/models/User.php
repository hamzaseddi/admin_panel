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

		public function find_all_users() {
		   return User::find('all');
		}
		public function delete_user($id) {
			User::delete(array(
				'id' => $id
			));
	   }
	}