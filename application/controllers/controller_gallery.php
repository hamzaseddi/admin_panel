<?php
    session_cheker();
    class Controller_Gallery extends Controller{
        function action_index() {
            $this->view->load('common/header_view');
            $this->view->load('common/menu_view');
            $this->view->load('gallery_view');
            $this->view->load('common/footer_view');
        }
    }
