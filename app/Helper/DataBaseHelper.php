<?php


    class DataBaseHelper {

        static function connection() {
            return new PDO('mysql:host=localhost;'.'dbname=db_centro_acopio;charset=utf8', 'root', '');
        }

    }

