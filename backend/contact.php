<?php 

    require('./sendgrid-php/senddgrid-php.php');

    $request_body = json_decode('{
        "personalizations": [
          {
            "to": [
              {
                "email": "francis6797@outlook.com"
              }
            ],
            "subject": ' . $_POST['subject'] . '
          }
        ],
        "from": {
          "email": ' . $_POST['email'] . '
        },
        "content": [
          {
            "type": "text/plain",
            "value": ' . $_POST['description'] . '
          }
        ]
      }');
      
      $apiKey = getenv('SENDGRID_API_KEY');
      $sg = new \SendGrid($apiKey);
      
      $response = $sg->client->mail()->send()->post($request_body);
      echo $response->statusCode();
      echo $response->body();
      echo $response->headers();
?>