<?php
    class DataBase {
        public static $connecti;

        public static function connect (){
            if (empty(self::$connecti)){
                self::$connecti = mysqli_connect("localhost" , "root" , "" , "kalkulator");
            }
        }

        public static function query ($sqlString) {
            return mysqli_query(self::$connecti, $sqlString);
        }

        public static function fetch ($query) {
            return mysqli_fetch_assoc($query);
        }
    }
