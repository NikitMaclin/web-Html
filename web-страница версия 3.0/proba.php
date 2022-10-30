<?php
    if (!empty($_REQUEST ["imya"])){
        $greetings = "Привет, " . $_REQUEST["imya"] . "!";
    }
    if (!empty($_REQUEST["knopka"]) && empty ($_REQUEST["imya"])){
        $error = "Пожалуйста укажите имя";
    }
?>

<html>
    <head>
    
    </head>
    <body>
        <form method="post">
            <div>
                <input type = "text" name = "imya"/>
            </div>
            <div>
                <input type = "submit" name = "knopka" value = "Сказать привет" />
        </form>

        <?php if(!empty($error)) { ?>
            <div>
                <span>Ошибка: </span> 
                <span>
                    <?php echo $error; ?>
                </span>
            </div>
        <?php } ?>

        <?php if(!empty($greetings)) { ?>
            <div>
                <span>Результат 1: </span> 
                <span>
                    <?php  echo $greetings; ?>
                </span>
            </div>

            <div>
                <span>Результат 2: </span> 
                <span>
                    <?php  echo $greetings; ?>
                </span>
            </div>
        <?php } ?>
    </body>
</html>