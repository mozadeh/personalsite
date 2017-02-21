<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$email_to = "mo.zadeh@mozadeh.com";
$subject = "New Message Received";

if($name != '' && $email != '' && $message != ''){
    // prepare email body text
    $body = "";
    $body .= "Name: ";
    $body .= $name;
    $body .= "\n";
    $body .= "Email: ";
    $body .= $email;
    $body .= "\n";
    $body .= "Message: ";
    $body .= $message;
    $body .= "\n";

    // send email
    $success = mail($email_to, $subject, $body, "From:".$email);

    // sending back message status
    if ($success){
        echo "success";
    }else{
        echo "Something went wrong!";
    }
}else{
    echo "You Must Not Left Anything Empty!";
}
?>
