<?php

if (isset($_POST['submit '])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "aadarsh@agaramtamilpadasalai.com";
    $headers = "From: ".$mailFrom; 
    $txt = "New Form Submission from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: contactform.html?mailsend");







}