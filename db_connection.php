<?php

try {
    $db_connect = new PDO('mysql:host=localhost;dbname=realestate', 'root', '');
}
catch (PDOException $ex) {
    echo "Не удалось установить соединение с базой данных: " . $ex->getMessage();
}
