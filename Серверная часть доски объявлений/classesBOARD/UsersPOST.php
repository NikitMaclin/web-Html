<?php
    require_once ("DataBase.php");
    require_once    ("Model.php");

    class UsersPOST extends Model {
        public function PostUser ($Names, $Familys, $Logins, $Passwords, $Phone, $Email) {
            DataBase::query ("INSERT INTO user_reg (Names, Familys, Logins, Passwords, Phone, Email) VALUES 
            ('" . $Names . "', '" . $Familys . "', '" . $Logins . "', '" . $Passwords . "', " . $Phone . ", '" . $Email . "')");
        }
    }