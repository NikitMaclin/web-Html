<?php
    require_once ("DataBase.php");
    require_once    ("Model.php");

    class UsersPUT extends Model {
        public function PutUserNames ($Names) {
            DataBase::query ("UPDATE user_reg SET Names = '$Names' WHERE id = ".$_REQUEST ["id"]."");
        }
        public function PutUserFamilys ($Familys) {
            DataBase::query ("UPDATE user_reg SET Familys = '$Familys' WHERE id = ".$_REQUEST ["id"]."");
        }
        public function PutUserLogins ($Logins) {
            DataBase::query ("UPDATE user_reg SET Logins = '$Logins' WHERE id = ".$_REQUEST ["id"]."");
        }
        public function PutUserPasswords ($Passwords) {
            DataBase::query ("UPDATE user_reg SET Passwords = '$Passwords' WHERE id = ".$_REQUEST ["id"]."");
        }
        public function PutUserPhone ($Phone) {
            DataBase::query ("UPDATE user_reg SET Phone = '$Phone' WHERE id = ".$_REQUEST ["id"]."");
        }
        public function PutUserEmail ($Email) {
            DataBase::query ("UPDATE user_reg SET Email = '$Email' WHERE id = ".$_REQUEST ["id"]."");
        }
    }