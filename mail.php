<?php
    //variables:
    $to = "adegnerbudd@gmail.com";
    $subject = "Enquiry";
    $email_field = $_POST['email'];
    $message = $_POST['message'];
    $body = "From: E-mail: $email_field\n Message:\n $message\n";

    //set variable of pop up message on screen
    $popupMessage = "Thank you, your email has been sent to $to";
    
    //
    $mailStatus = mail($to, $subject, $body);
    print($mailStatus);
    if ($mailStatus == True){
        print '<script type="text/javascript">alert("' . $popupMessage . '");</script>';
    }
    else {
        print '<script type="text/javascript">alert("Your message was unsuccessful, please try again");</script>';
    }
    print '<script type="text/javascript">location="contact.html";</script>';
    exit(); //to exit the script
?>