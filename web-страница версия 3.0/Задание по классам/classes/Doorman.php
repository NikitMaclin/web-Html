<?php
    require_once ("classes/DataBase.php");
    require_once ("classes/Modern.php");

    class Doorman extends Modern {
        public function loadResults(){
            $query = DataBase::query ("SELECT * FROM baza_kalcul WHERE id ORDER BY id DESC LIMIT 7");
            
            $bazatabl = [];

            while ($row = DataBase::fetch($query)) { //Извлечёт из ответа $query первую строку, кторая в ней находится
                $bazatabl[] = $row; // Добавить в конец массива $morze сгенерированную строку
            }
            return $bazatabl;
        }

        public function vidresult($resultpost, $error, $bazatabl){
            $vdox = [
                "resultpost" => $resultpost,
                "error" => $error,
                "bazatabl" => $bazatabl
            ];
        
            echo json_encode ($vdox);
        }
    }
