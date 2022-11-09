<?php
    $connecti = mysqli_connect("localhost" , "root" , "" , "kalkulator");
    if (!$connecti) {
        die ("Связь не установлена: " . mysqli_connect_error());
    }

    $resultpost = "";
    $blok = "";
    $error = "";
        if ($_REQUEST ["one"]!="" && $_REQUEST ["oper"]!="" && $_REQUEST["two"]!="") {

            $okno1 = $_REQUEST ["one"];
            $vvod = $_REQUEST ["oper"];
            $okno2 = $_REQUEST ["two"];
            
            if ($vvod == "+") {
                $result = $okno1 + $okno2;
            }
            if ($vvod == "-") {
                $result = $okno1 - $okno2;
            }
            if ($vvod == "*") {
                $result = $okno1 * $okno2;
            }
            if ($vvod == "/") {
                if ($okno2 <> 0) {
                    $result = $okno1 / $okno2;
                }
                else {
                    $blok = "Ошибка: На ноль делить нельзя, введите другое число";
                }
            }
            if (isset($result)) {
                mysqli_query ($connecti, "INSERT INTO baza_kalcul (one_data, operetion, two_data, otvet) VALUES ($okno1, '$vvod', $okno2, $result)");
                $resultpost = "Последний результат = " . $result;
            }
            
        }
        else {
            $error= "Ошибка: Поля пустые, заполните их и повторите операцию";
        }

    //$query = mysqli_query ($connecti, "SELECT * FROM baza_kalcul WHERE id ORDER BY id DESC LIMIT 7");
    $query = mysqli_query ($connecti, "SELECT * FROM baza_kalcul ORDER BY -ID LIMIT 7");
    

    $bazatabl = [];

    while ($row = mysqli_fetch_assoc($query)) { //Извлечёт из ответа $query первую строку, кторая в ней находится
        $bazatabl[] = $row; // Добавить в конец массива $morze сгенерированную строку
    }

    $vdox = [
        "resultpost" => $resultpost,
        "blok" => $blok,
        "error" => $error,
        "bazatabl" => $bazatabl
    ];

    echo json_encode ($vdox);
?>