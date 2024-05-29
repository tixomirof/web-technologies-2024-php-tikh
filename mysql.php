<?php

function doSQLQuery($query) {
    $db_password = ".BQmPSwl_u7eyspq";
    $db_username = "webnc";
    $db_host = "localhost";
    $db_name = "webnc";

    $db_con = new mysqli($db_host, $db_username, $db_password, $db_name);

    if ($db_con -> connect_error) {
        die("Connection Failed: " . $db_con -> connect_error);
    }

    $result = $db_con -> query($query);

    if ($result -> num_rows > 0) {
        while ($row = $result -> fetch_assoc()) {
            yield $row; // можно было и без yield-а, но мне так проще было :) да и интересно было посмотреть, как ленивые итерации в php работают
            // без yield-а просто создать массив $rows = []; и заполнять его в этом же цикле, а затем вернуть return $rows;
        }
    }
    else {
        yield;
    }
}

?>