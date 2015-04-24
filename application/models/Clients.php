<?php
	class Clients extends ActiveRecord\Model {
		public static $table_name = 'clients';
		
		public function create_client($first_name, $last_name, $birthday, $phone, $email, $info, $type_id) {
			Clients::create(array(
				'first_name' => $first_name,
				'last_name'  => $last_name,
				'birthday'   => $birthday,
				'phone'      => $phone,
				'email'      => $email,
				'info'       => $info,
				'type_id'	 => $type_id	
			));
		}

		public function find_client_by_id($id) {
			return Clients::find($id);
		}

		public function find_all_clients() {
		   return Clients::find('all');
		}
		public function delete_client($id) {
			$client = Clients::find($id);
			$client -> delete();
		}

		public function edit_client($id, $first_name, $last_name, $birthday, $phone, $email, $info, $type_id) {
			$client = Clients::find($id);
			$client -> first_name 	= $first_name;
			$client -> last_name    = $last_name;
			$client -> birthday 	= $birthday;
			$client -> phone 		= $phone;
			$client -> email 		= $email;
			$client -> info 		= $info;
			$client -> type_id 		= $type_id;
			$client -> save();
		}
	}