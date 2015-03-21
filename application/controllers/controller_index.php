<?php
session_start();
if ( $_SESSION['login'] != "true" ){
    session_destroy();
    header("Location: http://localhost/login");
}
    class Controller_Index extends Controller{
        function action_index() {
            $this->view->load('common/header_view.php');
            $this->view->load('common/menu_view.php');
            $this->view->load('index_view.php');
            $this->view->load('common/footer_view.php');
        }
    }
