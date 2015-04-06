<?php
    // подключаем файлы ядра
	require_once 'core/global.php';// глобальные функции переменнве
    require_once 'library/php-activerecord/ActiveRecord.php'; //active records php  работа с базой данных
    require_once 'core/view.php';  // представление
    require_once 'core/controller.php'; // котроллеры
    require_once 'core/route.php';  //роуты
    require_once 'core/config.php'; //фаил конфигураций

    Route::start(); // запускаем маршрутизатор
