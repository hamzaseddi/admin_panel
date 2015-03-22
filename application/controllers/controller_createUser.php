<?php
class Controller_Createuser extends Controller {


    function action_index() {
//        User::create(array(
//            'login'     => 'Jons',
//            'password'  => 'password'
//        ));

        $data = User::find_by_userid(1);
        $this->view->load('user_view.php',$data);

    }
}