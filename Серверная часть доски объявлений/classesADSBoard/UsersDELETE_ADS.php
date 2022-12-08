<?php
    require_once ("classesBOARD/DataBase.php");
    require_once    ("classesBOARD/Model.php");

    class UsersDELETE extends Model {
        public function DeleteUser () {
            $id = $_GET["id"];
            DataBase::query ("DELETE FROM ads WHERE id = $id");
        }
    }