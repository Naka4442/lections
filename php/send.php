<?php
    require_once("./Database.php");
    if($_POST["name"] && $_POST["message"] && count($_POST["name"]) <= 10 && count($_POST["message"]) <= 20){
        $name = $_POST["name"];
        $message = $_POST["message"];
        $sql = "INSERT INTO `Comments` (`Name`, `Message`) VALUES (:name, :message)";
        $data = array(
            "name" => $name,
            "message" => $message
        );
        $db->doRequest($sql, $data);
        header('Location:https://compas.chernov37.ru/php/index.php'); exit;
    }
?>