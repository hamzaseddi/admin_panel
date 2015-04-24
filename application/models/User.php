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
		

		/*
		* generate randoom pass for user and send it to email 
		*	user need to know his email
		*	he will get password to it
		*	DOTO: need to create email sendr.
		*/
		public function restore_user_pass($login) {
			$user = User::find_by_email($login);
		}

		/*
		* Function for generation random password 
		* for sending it to user or somethig else/
		* return string
		*/
		public function randomPassword() {
			$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789"; //string for generating pass
			$pass = array();  // array for our future password 
			$alphaLength = strlen($alphabet) - 1;  
			for ($i = 0; $i < 8; $i++) { 
				$n = rand(0, $alphaLength);
				$pass[] = $alphabet[$n];  //getting password  together from randrom pices
			}
			return implode($pass);  // attay to string  and return  it 
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

		public function check_auth_data($login, $password) {
			$user = User::find_by_email($login);
			if($user -> password == md5($password)) {
				$user = User::find_by_email($login);
				
				$_SESSION['user_first_name'] = $user-> first_name;
				$_SESSION['user_last_name'] =  $user-> last_name; 
				$_SESSION['user_email'] =  $user-> email;
				$_SESSION['user_id'] =  $user-> id;
				$_SESSION['login'] = "true"; 
				return true;	
			}else{
				return false;
			}
		}
	}