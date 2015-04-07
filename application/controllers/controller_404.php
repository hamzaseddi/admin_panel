<?php
	class Controller_404 extends Controller {
		function action_index() {
            $this->view->load('common/header_view');
			$this->view->load('common/404_view');
            $this->view->load('common/footer_view');
		}
	}
