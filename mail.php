<?php

$col = " ";
$happend1 = " ";
$happend2 = " ";
$happend3 = " ";

if(isset($_POST['submit'])){

    

    $fname      =      $_POST['fname'];
    $lname      =      $_POST['lname'];
    $tel        =      $_POST['tel'];
    $email      =      $_POST['email'];
    $address    =      $_POST['address'];
    $mess       =      strip_tags($_POST['mess']);  

    if(!(empty($fname) ||  empty($lname) || empty($tel) || empty($email) || empty($address) || empty($mess) )){
        
        $happend1 =  "<h1 style='color:#21825c;'>SUCCESS!!</h1>";
        $happend2 = "<strong>Your Massage is send Successfully<strong>";
        $happend3 = "<img src='./img/ok.png'  class='img-block'>";

        $col = "<div class='success animate ' id='suc'>

        $happend3
        $happend1
        $happend2
        
        <a id='close'>DISMISS</a>

        </div>";

        $to = 'randyruch5@gmail.com';
        $subject = "message from github Contact form create by me!";
        $message = "

        <p><b>Client First Name : </b> $fname </p>
        <p><b>Client Last Name : </b> $lname </p>
        <p><b>Client Tel-number : </b> $tel </p>
        <p><b>Client Email Address : </b> $email  </p>
        <p><b>Client Home Address : </b> $address  </p>
        <p><b>Client Message : </b> $mess  </p>
        
        ";
        $header = "From: GITHUB Contact Page" . "\r\n";
        mail($to,  $subject,  $message, $header);
        
        
    }
    else{
        $happend1 =  "<h1 style='color:red;'>UNSUCCESS!!</h1>";
        $happend2 = "<strong>Your Massage is not send Successfully<strong>";
        $happend3 = "<img src='./img/bad.png'  class='img-block'>";

        $col = "<div class='success animate ' id='suc'>

        $happend3
        $happend1
        $happend2
        
        <a id='close'>DISMISS</a>
        </div>";
    }


}





?>