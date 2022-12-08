<?php
    //SELECT * FROM `bulletin_board`.`user_reg` WHERE `id` = 4

    require_once    ("classesBOARD/UsersGET.php");
    require_once   ("classesBOARD/UsersPOST.php");
    require_once    ("classesBOARD/UsersPUT.php");
    require_once ("classesBOARD/UsersDELETE.php");

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
        if (!empty ($_REQUEST["Names"] && $_REQUEST["Familys"] && $_REQUEST["Logins"] && $_REQUEST["Passwords"] && $_REQUEST["Phone"] && $_REQUEST["Email"])){
            $usersPOST->PostUser ($_REQUEST["Names"], $_REQUEST["Familys"], $_REQUEST["Logins"], $_REQUEST["Passwords"], $_REQUEST["Phone"], $_REQUEST["Email"]);
            echo json_encode (["result" => true]);
        }
        else {
            echo json_encode (["result" => false]);
        }
    }
    //Обновление записи(ей) в БД
    else if ($_SERVER ["REQUEST_METHOD"] == "PUT") {
        parse_str (file_get_contents ('php://input'), $_PUT);
        //Names
        if (!empty ($_PUT ["Names"])){
            $usersPUT->PutUserNames ($_PUT ["Names"]);
            echo json_encode (["result" => true]);
        }
        else {
            echo json_encode (["result" => false]);
        }
        //Familys
        if (!empty ($_PUT ["Familys"])){
            $usersPUT->PutUserFamilys ($_PUT ["Familys"]);
            echo json_encode (["result" => true]);
        }
        else {
            echo json_encode (["result" => false]);
        }
        //Logins
        if (!empty ($_PUT ["Logins"])){
            $usersPUT->PutUserLogins ($_PUT ["Logins"]);
            echo json_encode (["result" => true]);
        }
        else {
            echo json_encode (["result" => false]);
        }
        //Passwords
        if (!empty ($_PUT ["Passwords"])){
            $usersPUT->PutUserPasswords ($_PUT ["Passwords"]);
            echo json_encode (["result" => true]);
        }
        else {
            echo json_encode (["result" => false]);
        }
        //Phone
        if (!empty ($_PUT ["Phone"])){
            $usersPUT->PutUserPhone ($_PUT ["Phone"]);
            echo json_encode (["result" => true]);
        }
        else {
            echo json_encode (["result" => false]);
        }
        //Email
        if (!empty ($_PUT ["Email"])){
            $usersPUT->PutUserEmail ($_PUT ["Email"]);
            echo json_encode (["result" => true]);
        }
        else {
            echo json_encode (["result" => false]);
        }

    }
    //Удаление записией в БД
    else if ($_SERVER ["REQUEST_METHOD"] == "DELETE") {
        $usersDELETE->DeleteUser ();  
    }