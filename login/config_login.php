<?php
    session_start();

    $host = 'localhost';
    $name = 'root';
    $pass = 'root';
    $database = 'sushi';

    $email = "";


    $db = mysqli_connect($host, $name, $pass, $database);

    $errors = array();

    if(isset($_POST['log_user'])){
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if(empty($email)){
            array_push($errors, 'Email is required to login');
        }

        if(empty($password)){
            array_push($errors, 'Password is required to login');
        }

        if(count($errors) == 0){
            $password = md5($password);
            $user_check_query = "SELECT * FROM users WHERE email = '$email' AND password = '$password' LIMIT 1";
            $result = mysqli_query($db, $user_check_query);
            $user = mysqli_fetch_assoc($result);
        }

        if($user){
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $user['username'];
            $username =  $_SESSION['username']; 

            echo "ciao '$username'";
            header('location: ../reservation.php');
        }
        else{
            array_push($errors, 'Email and/or Password are wrong, try again');
        }
    }


?>