<?php

include './mysql.php';

function initCreation() {
    $root = iterator_to_array(doSQLQuery("SELECT * FROM files WHERE files.parentID = 0 LIMIT 1"), false);
    if (count($root) <= 0) {
        echo "Ошибка подключения к базе данных.";
        return;
    }

    echo '<div class="list-items" id="list-items-mysql">
    <div class="list-item list-item_open" data-parent>';
    createFolder($root[0]["catalogName"]);
    createList(intval($root[0]["catalogID"]));
    echo '</div></div>';
}

function createList($id) {
    $children = iterator_to_array(doSQLQuery("SELECT * FROM files WHERE files.parentID = $id"), false);
    if (!is_null($children) && count($children) > 0) {
        echo '<div class="list-item__items">
        <div class="list-item list-item_open" data-parent>';
        foreach ($children as $row) {
            if (is_null($row)) continue;
            $catalogID = intval($row["catalogID"]);
            $parentID = intval($row["parentID"]);
            $name = $row["catalogName"];

            createFolder($name);
            createList($catalogID);
        }
        echo "</div></div>";
    }
}

function createFolder($foldername) {
    echo <<<EOT
    <div class="list-item__inner">
        <img class="list-item__arrow" src="./lesson9/img/chevron-down.png" alt="chevron-down" data-open>
        <img class="list-item__folder" src="./lesson9/img/folder.png" alt="folder">
        <span>$foldername</span>
    </div>
    EOT;
}

?>