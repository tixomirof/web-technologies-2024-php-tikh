<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Web-ИС Лабораторная Работа №16"; ?></title>
</head>
<body>
    <div class="content">
        <h1><?php echo "Web-ИС Лабораторная Работа №16"; ?></h1>
        <p><?php echo "Текущий год: " . date("Y"); ?></p>
        <p><?php
        function get_inflection($date_code, $var_1, $var_234, $var_567890, $base_word)
        {
            $current_time = date($date_code);
            $digit1 = substr($current_time, 0, 1);
            $digit2 = substr($current_time, 1, 2);

            if ($digit1 == "0")
                $current_time = $digit2;

            $digit2 = (int)$digit2;
            if ($digit1 != "1") {
                return $current_time . " " . $base_word . ($digit2 == 1 ? $var_1 :
                    ($digit2 > 1 && $digit2 < 5 ? $var_234 : $var_567890));
            }
            else {
                return $current_time . " " . $base_word . $var_567890;
            }
        }

        function get_current_time()
        {
            $hours = get_inflection("H", "", "а", "ов", "час");
            $minutes = get_inflection("i", "а", "ы", "", "минут");
            return $hours . " " . $minutes;
        }

        echo "Текущее время: " . get_current_time();
        ?></p>
    </div>
</body>
</html>