<?php

include('./mail.php');




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Form</title>

    <!-- link css -->
    <link rel="stylesheet" href="./style.css">

    <!-- Font link -->


</head>

<body>

    <section action="./mail.php" id="contact">
        <h1>CONTACT US</h1>
        <form action="" method="POST" id="form">
            <div class="form-sec-1">
                <input type="text" name="fname" value="" placeholder="Enter Your First Name...">
                <input type="text" name="lname" value="" placeholder="Enter Your Last Name...">
            </div>
            <div class="form-sec-2">
                <input type="tel" name="tel" value="" placeholder="Enter Modile Number...">
                <input type="email" name="email" value="" placeholder="Enter Email Address...">
            </div>
            <div class="form-sec-3">
                <input type="text" name="address" value="" placeholder="Enter Your Home Address..." id="addr">
            </div>
            <div class="form-sec-4">
                <textarea placeholder="Type Your Massage...." name="mess"></textarea>
            </div>
            <div class="form-sec-5">
                <input type="submit" name="submit" value="SEND MESSAGE" id="sub">
            </div>
        </form>
    </section>


    <?php 
    
        if(!empty($col)){
            echo "$col";
        }
    ?>



<script src="./script.js"></script>

</body>

</html>