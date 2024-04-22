<?php
    echo "<h3>6. Повторить 2 задание, но вывести на экран только города, начинающиеся с буквы “К”.</h3>";

    foreach ($city_info as $region => $cities) {
        foreach ($cities as $city) {
            if (mb_substr($city, 0, 1, "UTF-8") == "К") {
                echo "<p>Из региона $region есть город $city.</p>";
            }
        }
    }
?>