<?php

if (isset($_POST ['submit'])){
    $message=$_POST['message'];

    $mailTo="wcywxc@gmail.com";
    $headers="From: My website"
    $txt = "You have received an email from your website".$message;

    mail($mailTo,$txt,$headers);
    header("Location: index.php?mailsend");
}