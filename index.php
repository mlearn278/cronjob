<?php


$to = "kavowa4867@gmail.com";
$subject = "My subject";
$txt = "This is from the 00webhiost file rntered to you!<br> <img src='https://images.ctfassets.net/6dczv5fypa6q/13x4w1V7In7j11gv9wUGZ2/28117feb543a4d39a458aa3aaabe6b25/cruise-ship-aardy-img-travel-se.jpg' width='100%' height=''auto' />";
$headers = "From: kavowa4867@gmail.com" . "\r\n" .
"CC: kavowa4867@gmail.com";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


if(mail($to,$subject,$txt,$headers)){
    echo "Email has been sent to your email";
}



?>
