<?php

	/*
	*Class router to determine the requested page.
	*get controller classes
	*instantiates controllers pages and causes of action of these controllers.
	*/
	class Route {
		static function start() {
			//deffoult action for controller
			$controller_name = 'Index';
			$action_name = 'index';

			$routes = explode('/', $_SERVER['REQUEST_URI']);

			// get controller name
			if ( isset($routes[1]) && !empty($routes[1])) {
				$controller_name = $routes[1];
			}

			// get action aname
			if ( isset($routes[2]) ) {
				$action_name = $routes[2];
			}

			// add prefix
			$controller_name = 'Controller_'.$controller_name;
			$action_name = 'action_'.$action_name;

	
			// get failes for controller
			$controller_file = strtolower($controller_name).'.php';
			$controller_path = "application/controllers/".$controller_file;
			if(file_exists($controller_path)) {
				include "application/controllers/".$controller_file;
			} else {
				//redirect to 404 page
				Route::ErrorPage404();
			}

			// create new controller object
			$controller = new $controller_name;
			$action = $action_name;

			if(method_exists($controller, $action)) {
				// call action of controller
				$controller->$action();
			} else {
				//redirect to 404 page
				Route::ErrorPage404();
			}
		}

		function ErrorPage404() {
			$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
			header('HTTP/1.1 404 Not Found');
			header("Status: 404 Not Found");
			header('Location:'.$host.'404');
		}

	}
