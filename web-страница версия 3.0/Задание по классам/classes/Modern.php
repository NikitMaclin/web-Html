<?php
    require_once ("classes/DataBase.php");
    class Modern {
        public function __constuct() {
            DataBase::connect();
        }
    }
