<?php 
    
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $emailFrom = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['description'];

        $mailTo = "francis6797@outlook.com";
        $header = "From: ".$emailFrom;

        mail($mailTo, $subject, $message, $header);
        header("Location: index.php?mailsend");
    }
?>