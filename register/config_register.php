<?php

    $host = 'localhost';
    $name = 'root';
    $pass = 'root';
    $database = 'sushi';

    $username = "";
    $email = "";
    

    $db = mysqli_connect($host, $name, $pass, $database);

    $errors = array();

    //ricevo i valori dal form
    if (isset($_POST['reg_user']) ){
        $username = mysqli_real_escape_string( $db, $_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

        // controllo se non ci sono i dati
        if(empty($username)){
            array_push($errors, 'Username is required');
        }
        if(empty($email)){
            array_push($errors, 'Email is required');
        }
        if(empty($password_1)){
            array_push($errors, 'Password is required');
        }
        if($password_1 != $password_2){
            array_push($errors, 'The two passwords do not match');
        }

        // cerco se esiste già uno user con questo nome o con questa email
        $user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        // faccio uscire gli errori nel caso esista
        if ($user){
            if($user['username'] === $username){
                array_push($errors, 'This username already exist');
            }
            if($user['email'] === $email){
                array_push($errors, 'This email already exist');
            }
        }
        if(count($errors) == 0){
            $password = md5($password_1);
            $query = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password')";
            mysqli_query($db, $query);

            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "You're now logged in";
            header('location: ../reservation/reservation.php');
        }
    }



    // se non ci sono errori registro

    ?>