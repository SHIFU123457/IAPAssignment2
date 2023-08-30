<?php

    $headers = array(
        'Authorization: Bearer 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',
        'Content-Type: application/json'
    );

    $data = array(
        "personalizations" => array(
            array(
                "to" => array(
                    array(
                        "email" => 'charlesmaina2002@gmail.com',
                        "name" => 'CM'
                    )
                )
            )
        ),
        "from" => array(
            "email" => 'admin@icse.rochella.org',
            "name" => 'ICSE'
        ),
        "subject" => 'Test me',
        "content" => array(
            array(
                "type" => "text/html",
                "value" => 'Hi there this is a test'
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

?>