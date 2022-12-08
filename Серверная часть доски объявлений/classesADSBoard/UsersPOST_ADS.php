<?php
    require_once ("classesBOARD/DataBase.php");
    require_once    ("classesBOARD/Model.php");


    class UsersPOST extends Model {
        public function PostUser ($userid, $Product_category, $cost, $photo, $ad_text) {
            DataBase::query ("INSERT INTO ads (userid, Product_category, cost, photo, ad_text) VALUES 
            ('" . $userid . "', '" . $Product_category . "', " . $cost . ", '" . $photo . "', '" . $ad_text . "')");
        }
    }