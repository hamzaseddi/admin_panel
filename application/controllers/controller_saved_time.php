<?php
    session_cheker();
    class Controller_Saved_time extends Controller{
        function action_index() {
            $this->view->load('common/header_view');
            $this->view->load('common/menu_view');
            $this->view->load('saved_time_view');
            $this->view->load('common/footer_view');
        }

        function action_save() {
        	var_dump($_POST);
        } 
    }
