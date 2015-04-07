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
	* redirect
	 */
	function redirect($path) {
		header("Location: ".base_url($path));
        exit;
	}