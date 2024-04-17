<?php
    echo "<h3>4. Реализовать функцию с тремя параметрами: function mathOperation(\$arg1, \$arg2, \$operation), где \$arg1, \$arg2 – значения аргументов, \$operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из п.3)  и вернуть полученное значение (использовать switch).</h3>";

    function mathOperation($arg1, $arg2, $operation)
    {
        switch ($operation) {
            case "+": return sum($arg1, $arg2);
            case "-": return subtract($arg1, $arg2);
            case "*": return multiply($arg1, $arg2);
            case "/":
            case ":": return divide($arg1, $arg2);
            default: return "Unknown operand.";
        }
    }

    echo "<p>";
    echo mathOperation(4, 5, "+") . "<br>";
    echo mathOperation(7, 1, "-") . "<br>";
    echo mathOperation(2, 3, "*") . "<br>";
    echo mathOperation(8, 4, "/") . "<br>";
    echo mathOperation(8, 0, "/") . "<br>";
    echo mathOperation(5, 4, "+-") . "<br>";
    echo "</p>";
?>