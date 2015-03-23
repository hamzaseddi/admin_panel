<?php
    /*
     * Фаил для конфигураций
     */

    /*
     * Инициализируем php-activerecord для более удобной работы с базой данных
     */
    ActiveRecord\Config::initialize(function ($cfg) {
        $path = 'application/models';  //директория с моделями
        $cfg->set_model_directory($path);
        $cfg->set_connections(array(
            'development' => 'mysql://root:@localhost/cell_game_club_db')); //в массив можно положить несколько версий БД . dev, prod , test..
    });