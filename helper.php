<?php 
    $name = $_POST['name'];
    $from = $_POST['email'];
    $to = "francis6797@outlook.com";
    $body = $_POST['body'];
    $subject = $_POST['subject'];

    $success = mail($to, $subject, $body);
    if (!$success) {
        print_r(error_get_last()['message']);
     }
    echo "BEaN MAILED to $to from $from";
?>