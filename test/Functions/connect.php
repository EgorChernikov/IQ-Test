<?php

    $connect = mysqli_connect('localhost', 'root', '', 'iqtestbd');

    if (!$connect) {
        die('Error connect to DataBase');
    }