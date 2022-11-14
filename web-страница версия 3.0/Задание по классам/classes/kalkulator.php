<?php
    class kalkulator {
        public function kalkulator($okno1, $vvod, $okno2){

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
                    $result = "Ошибка: На ноль делить нельзя, введите другое число";
                }
            }
            return $result;
        }
    }
