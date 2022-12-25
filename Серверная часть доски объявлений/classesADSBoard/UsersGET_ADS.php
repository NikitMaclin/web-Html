<?php
    require_once    ("classesBOARD/DataBase.php");
    require_once    ("classesBOARD/Model.php");

    class UsersGET extends Model {
            public function GetUser ($id) {
                $quer = DataBase::query ("SELECT * FROM ads WHERE id = " . $id . "");
                $us = mysqli_fetch_assoc ($quer);
                echo json_encode ($us);
            }
            public function GetUsers () {
                $query = DataBase::query ("SELECT * FROM ads LEFT JOIN user_reg ON ads.userid = user_reg.id");

                $bazatabl = [];
                
                while ($row = DataBase::fetch ($query)){
                    $bazatabl[] = $row;
                }
                echo json_encode ($bazatabl);
                return $bazatabl;
            }
        }