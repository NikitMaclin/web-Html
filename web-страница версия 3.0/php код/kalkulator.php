<?php
    // Калькулятор
    $connecti = mysqli_connect("localhost" , "root" , "" , "kalkulator");
    if (!$connecti){
        die ("Связь не установлена: " . mysqli_connect_error());
    }

    if (isset($_REQUEST ["knop"])){
        if ($_REQUEST ["one"]!="" && $_REQUEST ["oper"]!="" && $_REQUEST["two"]!=""){

            $okno1 = $_REQUEST ["one"];
            $vvod = $_REQUEST ["oper"];
            $okno2 = $_REQUEST ["two"];
 //           $result = $_REQUEST ["otvet"];
            
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
            mysqli_query($connecti, "INSERT INTO baza_kalcul (one_data, operetion, two_data, otvet) VALUES ('" . $_REQUEST["one"] . "', '" . $_REQUEST ["oper"] . "', '". $_REQUEST["two"] . "', '". $result ."')");
        }
        else {
            $error = "Поля пустые, заполните их и повторите операцию";
        }
    }

    $query = mysqli_query($connecti, "SELECT * FROM baza_kalcul WHERE id ORDER BY id DESC LIMIT 7");
    

    $baza_tabl = [];

    while ($row = mysqli_fetch_assoc($query)){ //Извлечёт из ответа $query первую строку, кторая в ней находится
        $baza_tabl[] = $row; // Добавить в конец массива $morze сгенерированную строку
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

        <?php if(isset($result)) { ?>
            <div>
                <span>Ваш результат: </span>
                <span>
                    <?php echo $result; ?>
                </span>
            </div>
        <?php } ?>

        <?php foreach ($baza_tabl as $user) {?>
            <form>
                <span>-> [</span><?php echo $user["id"];?><span>]</span> 
                <?php echo $user["one_data"]; ?>
                <?php echo $user["operetion"]; ?>
                <?php echo $user["two_data"]; ?> <span> = </span>
                <?php echo $user["otvet"]; ?>
                
                <input type = "hidden" value = "<?php echo $user["id"];?>" name ="user_id"/>
                <input type = "submit" value = "Удалить" name = "delete"/> 
            </form>
            
        <?php } ?>
           

    </body>
</html>