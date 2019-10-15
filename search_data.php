<?php
    require_once('db_connection.php');

    $query = 'SELECT * FROM houses';

    $result = $db_connection->query($query);

    try {
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
    }
    catch (PDOException $ex) {
        echo "Ошибка выполнения запроса: " . $ex->getMessage();
    }

//echo "<pre>";
//var_dump($data);
//echo "</pre>";