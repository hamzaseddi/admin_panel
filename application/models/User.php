<?php
    class User extends ActiveRecord\Model {
        public static $table_name = 'user';
        public static $primary_key = 'userid';
    }