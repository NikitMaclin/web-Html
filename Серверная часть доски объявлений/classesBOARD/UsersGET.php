<?php
    require_once ("DataBase.php");
    require_once    ("Model.php");

    class UsersGET extends Model {
            public function GetUser ($id) {
                $quer = DataBase::query ("SELECT * FROM user_reg WHERE id = " . $id . "");
                $us = mysqli_fetch_assoc ($quer);
                echo json_encode ($us);
            }
            public function GetUsers () {
                $query = DataBase::query ("SELECT * FROM user_reg");

                $bazatabl = [];
                
                while ($row = DataBase::fetch ($query)){
                    $bazatabl[] = $row;
                }
                echo json_encode ($bazatabl);
                return $bazatabl;
            }
        }