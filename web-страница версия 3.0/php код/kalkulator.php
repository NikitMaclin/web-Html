<?php

    // Калькулятор

    if (isset($_REQUEST ["knop"])){
        if ($_REQUEST ["one"]!="" && $_REQUEST ["oper"]!="" && $_REQUEST["two"]!=""){

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
                if ($okno2 <> 0){
                    $otvet = $okno1 / $okno2;
                }
                else {
                    $blok = "На ноль делить нельзя, введите другое число";
                }
            }
        }
    
        else {
            $error = "Поля пустые, заполните их и повторите операцию";
        }
        
    }


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

        <?php if(isset($otvet)) { ?>
            <div>
                <span>Ваш результат: </span>
                <span>
                    <?php echo $otvet; ?>
                </span>
            </div>
        <?php } ?>
            

    </body>
</html>