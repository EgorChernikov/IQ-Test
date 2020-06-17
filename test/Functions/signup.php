<?php

    session_start();
    require_once 'connect.php';

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $password = $_POST['password'];
   

    

        $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: ../register.php');
        }
        $password = md5($password);

      

        mysqli_query($connect, "INSERT INTO `student` (`Id`, `full_name`, `login`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$password', '$path')");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../index.php');


    

?>
