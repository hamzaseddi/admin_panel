<?php
    session_start();
    if ( $_SESSION['login'] != "true" ){
        session_destroy();
        redirect('login');
    }
    class Controller_Storage extends Controller{
        function action_index() {
            $this->view->load('common/header_view.php');
            $this->view->load('common/menu_view.php');
            $this->view->load('gallery_view.php');
            $this->view->load('common/footer_view.php');
        }
    }