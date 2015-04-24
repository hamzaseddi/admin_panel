<?php 
	/*
	*	Global function 
	* 	return string 
	*	base_url
	*/
	function base_url($path){
		return 'http://localhost/'.$path;
	}

	/*
	* Global function 
	* Checking session status 
	* if session ok show content
	* else redirect to login page
	*/
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