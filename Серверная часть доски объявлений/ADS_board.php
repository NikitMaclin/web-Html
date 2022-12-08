<?php
    require_once    ("classesADSBoard/UsersGET_ADS.php");
    require_once   ("classesADSBoard/UsersPOST_ADS.php");
    require_once    ("classesADSBoard/UsersPUT_ADS.php");
    require_once ("classesADSBoard/UsersDELETE_ADS.php");

    $usersGET    = new    UsersGET ();
    $usersPOST   = new   UsersPOST ();
    $usersPUT    = new    UsersPUT ();
    $usersDELETE = new UsersDELETE ();

    // Получение записей с БД
    if ($_SERVER ["REQUEST_METHOD"] == "GET") {
        if (isset ($_GET ["id"])){
            $usersGET->GetUser ($_GET ["id"]);
        }
        else {
            $bazatabl = $usersGET->GetUsers ();
        }
    }
    // Создание новой записи в БД
    else if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        if (!empty ($_REQUEST["userid"] && $_REQUEST["Product_category"] && $_REQUEST["cost"] && $_REQUEST["photo"] && $_REQUEST["ad_text"])){
            $usersPOST->PostUser ($_REQUEST["userid"], $_REQUEST["Product_category"], $_REQUEST["cost"], $_REQUEST["photo"], $_REQUEST["ad_text"]);
            echo json_encode (["result" => true]);
        }
        else {
            echo json_encode (["result" => false]);
        }
    }
    //Обновление записи(ей) в БД
    else if ($_SERVER ["REQUEST_METHOD"] == "PUT") {
        parse_str (file_get_contents ('php://input'), $_PUT);
        //userid
        if (!empty ($_PUT ["userid"])){
            $usersPUT->PutUserNames ($_PUT ["userid"]);
            echo json_encode (["result" => true]);
        }
        else {
            echo json_encode (["result" => false]);
        }
        //Product_category
        if (!empty ($_PUT ["Product_category"])){
            $usersPUT->PutUserFamilys ($_PUT ["Product_category"]);
            echo json_encode (["result" => true]);
        }
        else {
            echo json_encode (["result" => false]);
        }
        //cost
        if (!empty ($_PUT ["cost"])){
            $usersPUT->PutUserLogins ($_PUT ["cost"]);
            echo json_encode (["result" => true]);
        }
        else {
            echo json_encode (["result" => false]);
        }
        //photo
        if (!empty ($_PUT ["photo"])){
            $usersPUT->PutUserPasswords ($_PUT ["photo"]);
            echo json_encode (["result" => true]);
        }
        else {
            echo json_encode (["result" => false]);
        }
        //ad_text
        if (!empty ($_PUT ["ad_text"])){
            $usersPUT->PutUserPhone ($_PUT ["ad_text"]);
            echo json_encode (["result" => true]);
        }
        else {
            echo json_encode (["result" => false]);
        }
    }
    //Удаление записией в БД
    else if ($_SERVER ["REQUEST_METHOD"] == "DELETE") {
        $usersDELETE->DeleteUser ();
        echo json_encode (["result" => true]);
    }