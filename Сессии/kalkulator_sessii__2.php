<?php
     session_start ();
    if (!empty($_SESSION["expretion"])){
        echo "Ваш ответ: " . $_SESSION ["expretion"];
    }
?>