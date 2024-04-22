<?php
    echo "<h3>4. В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP.
    Необходимо представить пункты меню как элементы массива и вывести их циклом.
    Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.</h3>";

    $content = file_get_contents('list.html');
    echo "<p>Default ul li list:</p>";
    echo $content;
    echo "<br>";

    echo "<p>PHP generated list:</p>";

    function get_ul_array($input) {
        $result = [];

        for ($i = 0; $i < strlen($input) - 1; $i++) {
            $possible_tag = mb_substr($input, $i, 4, "UTF-8");

            if ($possible_tag == "<ul>") {
                $start_index = $i + 4;
                $i = $start_index;
                $ul_skips = 0;
                while ($i < strlen($input)) {
                    if (mb_substr($input, $i, 4, "UTF-8") == "<ul>") {
                        $ul_skips++;
                    }
                    if (mb_substr($input, $i, 5, "UTF-8") == "</ul>") {
                        if ($ul_skips <= 0) {
                            break;
                        } else {
                            $ul_skips--;
                        }
                    }
                    $i++;
                }
                $ul_part = mb_substr($input, $start_index, $i - $start_index, "UTF-8");
                array_push($result, get_ul_array($ul_part));
            }

            if ($possible_tag == "<li>") {
                $start_index = $i + 4;
                $i = $start_index;
                $resulting_string = "";
                while ($i < strlen($input) && mb_substr($input, $i, 5, "UTF-8") != "</li>") {
                    $char = mb_substr($input, $i, 1, "UTF-8");
                    $resulting_string .= $char;
                    $i++;
                }
                array_push($result, $resulting_string);
            }
        }

        return $result;
    }

    $ul_array = get_ul_array($content);
    
    function print_ul_array($arr, $level = 0) {
        foreach ($arr as $item) {
            if (gettype($item) == "string") {
                echo str_repeat("\t", $level) . $item . "<br>";
            } else print_ul_array($item, $level + 1);
        }
    }

    echo "<pre>";
    print_ul_array($ul_array);
    echo "</pre>";
?>