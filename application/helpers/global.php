<?php 
	/*
	*	Global function 
	* 	return string 
	*	base_url
	*/
	function base_url($path){
		return 'http://localhost/'.$path;
	}

	function session_cheker(){
		session_start();
		if ( $_SESSION['login'] != "true" ) {
			session_destroy();
			redirect('login');
		}
	}

	/*
	* Global function
	* redirect
	 */
	function redirect($path) {
		header("Location: ".base_url($path));
        exit;
	}