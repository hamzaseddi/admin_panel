<?php
    class Controller_Createuser extends Controller {
        function action_index() {
            $data['last'] = User::find_user(5);
            $data['id'] = User::last_user();

            $login = 'test';
            $pass = 'test';
            //User::create_user($login,$pass);

            $this->view->load('user_view',$data);
        }
    }