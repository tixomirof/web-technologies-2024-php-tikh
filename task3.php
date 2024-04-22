<?php
    echo "<h3>3. Объявить массив, индексами которого являются буквы русского языка, 
    а значениями – соответствующие латинские буквосочетания 
    (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
    <br><br>Написать функцию транслитерации строк.
    </h3>";

    function translit($str) {
        $kv_table = [
            'а' => 'a',
            'б' => 'b',
            'в' => 'v',
            'г' => 'g',
            'д' => 'd',
            'е' => 'e',
            'ё' => 'yo',
            'ж' => 'zh',
            'з' => 'z',
            'и' => 'i',
            'й' => 'y',
            'к' => 'k',
            'л' => 'l',
            'м' => 'm',
            'н' => 'n',
            'о' => 'o',
            'п' => 'p',
            'р' => 'r',
            'с' => 's',
            'т' => 't',
            'у' => 'u',
            'ф' => 'f',
            'х' => 'h',
            'ц' => 'c',
            'ч' => 'ch',
            'ш' => 'sh',
            'щ' => 'sh\'',
            'ъ' => 'i',
            'ы' => 'i',
            'ь' => '\'',
            'э' => 'e',
            'ю' => 'yu',
            'я' => 'ya'
        ];
        $result = "";
        foreach (mb_str_split($str) as $char) {
            $c = mb_strtolower($char);
            if (array_key_exists($c, $kv_table))
                $result .= $c != $char ? mb_strtoupper($kv_table[$c]) : $kv_table[$c];
            else $result .= $char;
        }
        return $result;
    }

    function echo_translit($str) {
        $result = translit($str);
        echo "<p>$result</p>";
    }

    echo_translit("Сладкие и свежие французские булочки.");
    echo_translit("Скоро рассвет!");
    echo_translit("300 спартанцев");
    echo_translit("МЯЯЯЯЯЯЯЯЯЯЯЯЯУ");
?>