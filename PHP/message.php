<?php
$recipient = "tcclaviger@gmail.com";
$subject = "New Message on Portfolio Site";
$question = $_POST["message-text"];
$responseEmail = $_POST["recipient-email"];
$header = "From: RobsPortfolioSite@rsmiths.com";
$message =
    "New Message: \r\n\n".
    "Email: \r\n".$responseEmail.
    "\r\n\nMessage: \r\n".$question;
mail($recipient, $subject, $message, $header);

header("Location: https://rsmiths.greenriverdev.com/index.html");
die();

//echo  '<div class="card col-9 mx-auto my-5 text-center" id="receipt-div">
//        <div class="card-body p-5">
//            <h4 class="card-title pb-3">Thank you for your message!</h4>
//            <p class="card-text">Your message has been received thank you for taking the time to send it.
//            </p>
//        </div>
//    </div>';