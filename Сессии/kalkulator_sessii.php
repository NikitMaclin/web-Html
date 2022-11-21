<?php
    session_start ();

    $connecti = mysqli_connect("localhost" , "root" , "" , "kalkulator");
    if (!$connecti){
        die ("Связь не установлена: " . mysqli_connect_error());
    }

    if (isset($_REQUEST ["knop"])){
        if ($_REQUEST ["one"]!="" && $_REQUEST ["oper"]!="" && $_REQUEST["two"]!=""){

            $okno1 = $_REQUEST ["one"];
            $vvod = $_REQUEST ["oper"];
            $okno2 = $_REQUEST ["two"];
            // $result = $_REQUEST ["otvet"];
            
            if ($vvod == "+"){
                $result = $okno1 + $okno2;
            }
            if ($vvod == "-"){
                $result = $okno1 - $okno2;
            }
            if ($vvod == "*"){
                $result = $okno1 * $okno2;
            }
            if ($vvod == "/"){
                if ($okno2 <> 0){
                    $result = $okno1 / $okno2;
                }
                else {
                    $blok = "На ноль делить нельзя, введите другое число";
                }
            }
            if (isset($result)){
                mysqli_query($connecti, "INSERT INTO baza_kalcul (one_data, operetion, two_data, otvet) VALUES ('" . $_REQUEST["one"] . "', '" . $_REQUEST ["oper"] . "', '". $_REQUEST["two"] . "', '". $result ."')");
            }
        }
        else {
            $error = "Поля пустые, заполните их и повторите операцию";
        }
        if (isset($result)){
            $expretion = $okno1 . $vvod . $okno2 . "=" . $result;
        }
    }

    if (!empty($expretion)){
        $_SESSION ["expretion"] = $expretion;
    }

?>

<html>
    <head>
    
    </head>
    <body>

<!-- Калькулятор -->

        <form method = "post">
            <div> 
                <!-- <div>Калькулятор</div> -->
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

        <?php if(isset($result)) { ?>
            <div>
                <span>Ваш результат: </span>
                <span>
                    <?php echo $result; ?>
                </span>
            </div>
        <?php } ?>

    </body>
</html>