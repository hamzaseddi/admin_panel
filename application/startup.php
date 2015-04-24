<?php
	/**
	 *	Helpers
	 * 
	 */
	require_once 'helpers/global.php';// all global staff
	/**
	 * Library
	 * 
	 */
	require_once 'library/charts/class/ChartJS.php';//chart.js php wrapper
	require_once 'library/charts/class/ChartJS_Line.php';//chart.js php wrapper
	require_once 'library/charts/class/ChartJS_Bar.php';//chart.js php wrapper
	require_once 'library/charts/class/ChartJS_Radar.php';//chart.js php wrapper
	require_once 'library/charts/class/ChartJS_PolarArea.php';//chart.js php wrapper
	require_once 'library/charts/class/ChartJS_Pie.php';//chart.js php wrapper
	require_once 'library/charts/class/ChartJS_Doughnut.php';//chart.js php wrapper
	require_once 'library/php-activerecord/ActiveRecord.php'; //active records php  работа с базой данных
	/**
	 * Core stuff
	 * 
	 */
	require_once 'core/view.php';  // core view
	require_once 'core/controller.php'; // core controller
	require_once 'core/route.php';  //router 
	require_once 'core/config.php'; //config file 

	Route::start(); // run router