<?php
	class Controller_404 extends Controller {
		function action_index() {
            $this->view->load('common/header_view.php');
			$this->view->load('common/404_view.php');
            $this->view->load('common/footer_view.php');
		}
	}
