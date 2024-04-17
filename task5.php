<?php
    echo "<h3>5. * Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести текущий год при помощи встроенных функций PHP. Попробовать вывести 3 разными способами, как было показано на лекции.</h3>";

    // Способ 1
    echo "<p>Текущий год: " . date("Y") . "</p>";

    // Способ 2
    $current_year = date("Y");
    echo "<p>Текущий год: $current_year</p>";

    // Способ 3
    $content = file_get_contents('year.html');
    $content = str_replace("{{ year }}", date("Y"), $content);
    echo $content;
?>