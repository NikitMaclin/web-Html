<?php
    require_once ("classesBOARD/DataBase.php");
    require_once    ("classesBOARD/Model.php");

    class UsersPUT extends Model {
        public function PutUserNames ($userid) {
            DataBase::query ("UPDATE ads SET userid = '$userid' WHERE id = ".$_REQUEST ["id"]."");
        }
        public function PutUserFamilys ($Product_category) {
            DataBase::query ("UPDATE ads SET Product_category = '$Product_category' WHERE id = ".$_REQUEST ["id"]."");
        }
        public function PutUserLogins ($cost) {
            DataBase::query ("UPDATE ads SET cost = '$cost' WHERE id = ".$_REQUEST ["id"]."");
        }
        public function PutUserPasswords ($photo) {
            DataBase::query ("UPDATE ads SET photo = '$photo' WHERE id = ".$_REQUEST ["id"]."");
        }
        public function PutUserPhone ($ad_text) {
            DataBase::query ("UPDATE ads SET ad_text = '$ad_text' WHERE id = ".$_REQUEST ["id"]."");
        }
    }