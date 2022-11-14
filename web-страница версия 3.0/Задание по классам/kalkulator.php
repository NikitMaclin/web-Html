<?php
    require_once ("classes/Doorman.php");
    require_once ("classes/kalkulator.php");
    require_once ("classes/saveResult.php");

    $doorman = new Doorman();
    $SaveResult = new saveResult();
    $kalkulator = new kalkulator();
    DataBase::connect();
    //Калькулятор
    $resultpost = "";
    $error = "";
        if ($_REQUEST ["one"]!="" && $_REQUEST ["oper"]!="" && $_REQUEST["two"]!="") {
            $result = $kalkulator->kalkulator($_REQUEST ["one"], $_REQUEST ["oper"], $_REQUEST["two"]);
        }
        else {
            $error= "Ошибка: Поля пустые, заполните их и повторите операцию";
        }
        //Добавление результатов в базу данных 
        if (isset ($result) /*&& $result! = "Ошибка: На ноль делить нельзя, введите другое число"*/) {
            $SaveResult->saveResult($_REQUEST ["one"], $_REQUEST ["oper"], $_REQUEST["two"], $result);
            $resultpost = "Последний результат = " . $result;
        }
    
    $bazatabl = $doorman->loadResults();
    $doorman->vidresult($resultpost, $error, $bazatabl);
?>