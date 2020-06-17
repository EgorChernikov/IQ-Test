<?php
    $mysqli = false;
    function connectDB(){
        global $mysqli; 
        $mysqli = new mysqli("localhost", "root", "", "iqtestbd");
        $mysqli->query("SET NAMES 'utf-8'");
    }

    function closeDB(){
        global $mysqli;
        $mysqli->close();
    }

    function getQuestion ($limit){
        global $mysqli;
        connectDB();
        $result = $mysqli->query("SELECT * FROM `questions_with_image` ORDER BY `id` DESC LIMIT $limit");
        closeDB();
        return resultToArray($result);
    }
    function resultToArray ($result){
        $array = array();
        while (($row = $result->fetch_assoc()) != false)
              $array[]= $row;
        return $array;
    }
?>