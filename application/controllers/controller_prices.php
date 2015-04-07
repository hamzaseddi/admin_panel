<?php
    session_start();
    if ( $_SESSION['login'] != "true" ){
        session_destroy();
        redirect('login');
    }
    class Controller_Prices extends Controller{
        function action_index() {
            $this->view->load('common/header_view.php');
            $this->view->load('common/menu_view.php');
            $this->view->load('prices_view.php');
            $this->view->load('common/footer_view.php');
        }
    }
