<?php 
    $name = $_POST['name'];
    $from = $_POST['email'];
    $to = "francis6797@outlook.com";
    $body = $_POST['body'];
    $subject = $_POST['subject'];

    mail($to, $subject, $body);
    echo "BEaN MAILED to $to from $from";
?>