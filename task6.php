<?php
    echo "<h3>6. * С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power(\$val, \$pow), где \$val – заданное число, \$pow – степень.</h3>";

    function power($val, $pow)
    {
        if ($pow > 0) return $val * power($val, $pow - 1);
        if ($pow == 0) return 1;
        return "Error";
    }

    echo "<p>";
    echo power(4, 2) . "<br>";
    echo power(6, 1) . "<br>";
    echo power(1, 7) . "<br>";
    echo power(6, 5) . "<br>";
    echo power(10, 3) . "<br>";
    echo power(3, 4) . "<br>";
    echo power(2, 6) . "<br>";
    echo power(7, -1) . "<br>";
    echo "</p>";
?>