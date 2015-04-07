<?php
    session_start();
    if ( $_SESSION['login'] != "true" ){
        session_destroy();
        redirect('login');
    }
    class Controller_Schedule extends Controller{
        function action_index() {
            $this->view->load('common/header_view');
            $this->view->load('common/menu_view');
            $this->view->load('schedule_view');
//            $this->view->load('common/footer_view.php');
        }
    }
