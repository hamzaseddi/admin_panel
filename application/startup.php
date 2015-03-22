<?php
    // подключаем файлы ядра
    require_once 'core/model.php'; // модели
    require_once 'library/php-activerecord/ActiveRecord.php'; //active records php  работа с базой данных
    require_once 'core/view.php';  // представление
    require_once 'core/controller.php'; // котроллеры


    ActiveRecord\Config::initialize(function($cfg) {
        $path = 'application/models';
        $cfg->set_model_directory($path);
        $cfg->set_connections(array(
            'development' => 'mysql://root:@localhost/cell_game_club_db'));
    });

    /*
    Здесь обычно подключаются дополнительные модули, реализующие различный функционал:
        > аутентификацию
        > кеширование
        > работу с формами
        > абстракции для доступа к данным
        > ORM
        > Unit тестирование
        > Benchmarking
        > Работу с изображениями
        > Backup
        > и др.
    */

    require_once 'core/route.php';
    Route::start(); // запускаем маршрутизатор
