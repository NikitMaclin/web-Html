<?php

    // Калькулятор

    
    $otvet = "";

    if (!empty($_REQUEST ["knop"]) && (empty($_REQUEST ["one"]) || empty($_REQUEST ["oper"]) || empty ($_REQUEST["two"]))){
        $error = "Поля пустые, заполните их и повторите операцию";
    }
    if (!empty($_REQUEST ["one"]) && !empty($_REQUEST ["oper"]) && !empty ($_REQUEST["two"])){
        
        $okno1 = $_REQUEST ["one"];
        $vvod = $_REQUEST ["oper"];
        $okno2 = $_REQUEST ["two"];

            if ($vvod == "+"){
            $otvet = $okno1 + $okno2;
            }

            if ($vvod == "-"){
                $otvet = $okno1 - $okno2;
            }

            if ($vvod == "*"){
                $otvet = $okno1 * $okno2;
            }

            if ($vvod == "/"){
                $otvet = $okno1 / $okno2;
            }

            if ($okno2 == 0){
                $blok = "На ноль делить нельзя, введите другое число";
            }

    }

    /*$otvet = "";

    if (isset($_REQUEST ["knop"]) && (empty($_REQUEST ["one"]) || empty($_REQUEST ["oper"]) || empty ($_REQUEST["two"]))){
        $error = "Поля пустые, заполните их и повторите операцию";
    }

    if (isset($_REQUEST ["one"]) && isset($_REQUEST ["two"])){

        $okno1 = $_REQUEST ["one"];
        $vvod = $_REQUEST ["oper"];
        $okno2 = $_REQUEST ["two"];

            if ($vvod == "+"){
            $otvet = $okno1 + $okno2;
            }

            if ($vvod == "-"){
                $otvet = $okno1 - $okno2;
            }

            if ($vvod == "*"){
                $otvet = $okno1 * $okno2;
            }

            if ($vvod == "/"){
                $otvet = $okno1 / $okno2;
            }
          //  else $error = "На ноль делить нельзя, введите другое число";

    }*/
    
    ?>

<html>
    <head>
    
    </head>
    <body>

<!-- Калькулятор -->

        <form method = "post">
            <div> 
                <div>Калькулятор</div>
                <div>Введите первое число:</div>
                    <input type="number" name = "one" />
                <div>Выберите операцию:
                    <div>
                        <select name ="oper" style="padding-inline-end: 522px; padding-top: 15px;">
                            <option>+</option>
                            <option>-</option>
                            <option>*</option>
                            <option>/</option>
                        </select>
                    </div>
                </div>
                <div>Введите второе число:</div>
                    <input type="number" name = "two"/>
                
                <div>
                    <input type = "submit" name = "knop" value = "Вычислить" />
                </div>
            </div>
        </form>

        <?php if(!empty($blok)) { ?>
            <div>
                <span>Ваш результат: </span>
                <span>
                    <?php echo $blok; ?>
                </span>
            </div>
        <?php } ?>

        <?php if(!empty($error)) { ?>
            <div>
                <span>Ваш результат: </span>
                <span>
                    <?php echo $error; ?>
                </span>
            </div>
        <?php } ?>

        <?php if(!empty($otvet)) { ?>
            <div>
                <span>Ваш результат: </span>
                <span>
                    <?php echo $otvet; ?>
                </span>
            </div>
        <?php } ?>
            

    </body>
</html>