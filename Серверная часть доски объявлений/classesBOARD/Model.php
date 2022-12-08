<?php
    require_once ("DataBase.php");

    class Model {
        public function __construct() {
            DataBase::connect();
        }
    }