<?php
    require_once ("classes/DataBase.php");
    require_once ("classes/Modern.php");

    class saveResult extends Modern {
        public function saveResult($okno1, $vvod, $okno2, $result){
            DataBase::query ("INSERT INTO baza_kalcul (one_data, operetion, two_data, otvet) VALUES ($okno1, '$vvod', $okno2, '$result')");// Добавление в базу данных
        }
    }
