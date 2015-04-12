<?php
    // подключаем файлы ядра
	require_once 'helpers/upload.php'; // uploading file helper
	require_once 'helpers/global.php';// all global staff
    require_once 'library/php-activerecord/ActiveRecord.php'; //active records php  работа с базой данных
    require_once 'core/view.php';  // core view
    require_once 'core/controller.php'; // core controller
    require_once 'core/route.php';  //router 
    require_once 'core/config.php'; //config file 

    Route::start(); // run router
