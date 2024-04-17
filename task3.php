<?php
    echo "<h3>3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.</h3>";

    function sum($val1, $val2) { return $val1 + $val2; }
    function subtract($val1, $val2) { return $val1 - $val2; }
    function multiply($val1, $val2) { return $val1 * $val2; }
    function divide($val1, $val2) {
        return $val2 == 0 ? "Ошибка деления на ноль" : $val1 / $val2;
    }

    echo "<p>";
    echo sum(2, 3) . " ";
    echo subtract(2, 3) . " ";
    echo multiply(subtract(9, 6), sum(1, 1)) . " ";
    echo divide(515, 95) . " ";
    echo divide(515, multiply(sum(sum(4, 2), subtract(multiply(1, 6), 4), divide(5, 4)), sum(subtract(subtract(1, 5), multiply(4, 4), 1), multiply(3, -11)))) . " ";
    echo divide(515, 0) . " ";
    echo "</p>";
?>