<?php
    //variables:
    $to = "ec2266638@edinburghcollege.ac.uk";
    $subject = "Enquiry";
    $email_field = $_POST['email'];
    $message = $_POST['message'];
    $body = "From: E-mail: $email_field\n Message:\n $message\n";

    //set variable of pop up message on screen
    $popupMessage = "Thank you, your email has been sent to $to";
    
    //if else statement to show user if email has sent 
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