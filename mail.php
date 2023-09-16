<?php
session_start();

if (isset($_POST["submit"])){
    $email = $_POST["email"];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        die("invalid email");
    }

    $headers = array(
        'Authorization: Bearer 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',
        'Content-Type: application/json'
    );

    $data = array(
        "personalizations" => array(
            array(
                "to" => array(
                    array(
                        "email" => $email,
                        "name" => 'JK'
                    )
                )
            )
        ),
        "from" => array(
            "email" => 'admin@icse.rochella.org',
            "name" => 'ICSE'
        ),
        "subject" => 'WELCOME TO YOUR APPLICATION!',
        "content" => array(
            array(
                "type" => "text/html",
                "value" => 'Hi there. welcome!<br> To complete your registration,<a href="afterEmail.php">Click here</a> ! '
            )
        )
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    if ($response) {
        echo "Welcome email sent successfully to $email";
        $_SESSION["control"] = "Hi there, $email. Welcome ";
    } else {
        echo "Failed to send the welcome email";
    }
}

?>