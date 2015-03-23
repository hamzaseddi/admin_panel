<?php
    class User extends ActiveRecord\Model {
        public static $table_name = 'user';

        public function find_user($id) {
           return $data = User::find($id);
        }

        public function create_user($login,$pass) {
            User::create(array(
                'login'     => $login,
                'password'  => md5($pass)
            ));
            return User::insert_id();
        }

        public function last_user() {
            return User::last();
        }

    }