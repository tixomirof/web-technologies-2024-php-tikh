<?php
    echo "<h3>1. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:<br>
        0 – это ноль.<br>
        1 – нечётное число.<br>
        2 – чётное число.<br>
        3 – нечётное число.<br>
        …<br>
        10 – чётное число.        
    </h3>";
    
    echo "<p>";
        $value = 0;
        do {
            $output_text = "нечётное число.";
            if ($value == 0)
                $output_text = "это ноль.";
            elseif ($value % 2 == 0)
                $output_text = "чётное число.";
            echo "$value - $output_text<br>";
            $value++;
        } while ($value <= 10);
    echo "</p>";
?>