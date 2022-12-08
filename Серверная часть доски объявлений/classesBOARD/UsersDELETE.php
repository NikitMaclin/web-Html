<?php
    require_once ("DataBase.php");
    require_once    ("Model.php");

    class UsersDELETE extends Model {
        public function DeleteUser () {
            $id = $_GET["id"];
            DataBase::query ("DELETE FROM user_reg WHERE id = $id");
        }
    }