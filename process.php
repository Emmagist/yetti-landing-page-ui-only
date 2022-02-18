<?php

    // Create connection
    $servername = "db4free.net";
    $username = "emmargist_204";
    $password = "emma1994204";
    $database = "equipe2upgrade";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    if (isset($_POST['subscribe']) || isset($_POST['subscribe_button'])) {
        $error = '';
        $success = '';
        $email = $_POST['email'];

        if (empty($email)) { 
            $error = "Field can not be empty";
        }

        if (! filter_var($email, FILTER_VALIDATE_EMAIL)) { 
            $error = "Invalid email address";
        }

        if (empty($error)) {
            $sql = "INSERT INTO news_letter (email) VALUES ('$email')"; //var_dump($sql);exit;

            if ($conn->query($sql) === TRUE) {
                header('Location: index.php');
                $success = "Thanks for subscribing us";
            }
        }
    }
?>