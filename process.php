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

    require_once "vendor/autoload.php";

    // Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
    ->setUsername('emma1994204@gmail.com')
    ->setPassword('Emmagist1994204');
    ;

    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

    function sendAdminMessage($email){
        global $mailer;
        $body = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Subscribe Yetti</title>
        </head>
        <body>
            <div class="email_wrap">
                <h2>Hi Admin,</h2>
                <p>You have a new subscriber</p>
                <h3>Email: <strong>' . $email . '</strong></h4>
            </div> 
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        </body>
        </html>';
        // Create a message
        $message = (new Swift_Message('You have a new message'))
        ->setFrom('emma1994204@gmail.com')
        ->setTo('emma1994204@gmail.com')
        ->setBody($body, 'text/html');
        // Send the message
        $result = $mailer->send($message);

        return $result;
    }

    function appreciationMessage($email){
        global $mailer;
        $body = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Subscribe Yetti</title>
        </head>
        <body>
            <div class="email_wrap">
                <h2>Hi,</h2>
                <p>Thanks for subscribing us @ <img src="assets/svgs/logo.svg" alt="Yetti Logo" class="logo" />. <br> Your information is secured with us.</p>
            </div> 
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        </body>
        </html>';
        // Create a message
        $message = (new Swift_Message('Thanks for reaching to us.'))
        ->setFrom('Willzfrankenterprise4@gmail.com')
        ->setTo($email)
        ->setBody($body, 'text/html');
        // Send the message
        $result = $mailer->send($message);

        return $result;
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

            sendAdminMessage($email);
            appreciationMessage($email);

            if ($conn->query($sql) === TRUE) {
                header('Location: index.php');
                $success = "Thanks for subscribing us";
            }
        }
    }
?>