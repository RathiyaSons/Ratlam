<?php
    $to = "shishirmumbai@gmail.com,rathiyaandsons@gmail.com,shishirolympiad2018@gmail.com,sgehlot143786@gmail.com";
    $name = $_POST["name"];
    $email= $_POST["email"];
    $text= $_POST["message"];
    $phone= $_POST["phone"];
    $subject= $_POST["subject"];



    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";




    $message ='<table style="width:100%">
        <tr>
            <td>Cumtomer Name:'.$name.'</td>
        </tr>
        <tr><td>Subject: '.$subject.'</td></tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>phone: '.$phone.'</td></tr>
        <tr><td>Message: '.$text.'</td></tr>

    </table>';





    if (@mail($to,$subject,$message, $headers))
    {
        echo 'The message has been sent Succesfully.';
    }else{
        echo 'failed';
    }

?>
