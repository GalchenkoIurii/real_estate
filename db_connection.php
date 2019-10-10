<?php

try {
    $db_connection = new PDO('mysql:host=localhost;dbname=realestate', 'root', '');
}
catch (PDOException $ex) {
    echo "Не удалось установить соединение с базой данных: " . $ex->getMessage();
}
