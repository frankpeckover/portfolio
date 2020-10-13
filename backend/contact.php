<?php 
    require('./sendgrid-php/senddgrid-php.php');
    require('sendgrid-php/senddgrid-php.php');
    require('/sendgrid-php/senddgrid-php.php');

    $from = new From($_POST['email']);
    $subject = $_POST['subject'];
    $to = new To("francis6797@outlook.com");
    $content = new Content("text/plain", $_POST['description']);
    $mail = new Mail($from, $to, $subject, $content);

    $personalization = new Personalization();
    $personalization->addTo(new To("francis6797@outlook.com"));
    $mail->addPersonalization($personalization);
      
    $apiKey = getenv('SENDGRID_API_KEY');
    $sg = new \SendGrid($apiKey);

    $response = $sg->client->mail()->send()->post($request_body);
    echo $response->statusCode();
    echo $response->body();
    echo $response->headers();
?>