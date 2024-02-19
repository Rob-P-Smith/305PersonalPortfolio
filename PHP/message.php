<?php
include('/home/rsmithsg/db/db_connect_rob.php');

$random = substr(md5(time()), 0, 10);
$contactMail = htmlspecialchars($_POST["recipient-email"]);
$comment = htmlspecialchars($_POST["message-text"]);
$sql = "INSERT INTO guests (email, message, extra) VALUES ('$contactMail','$comment','$random');";
$result = @mysqli_query($conn, $sql);

$recipient = "rsmithsg@rsmiths.greenriverdev.com";
$subject = "New Message on Portfolio Site";
$header = "From: RobsPortfolioSite@rsmiths.com";

$message = '
    New Message
    Email:
    '.$contactMail.'
    Message:
    '.$comment.'
    Visit the link below to approve this message for the guest book. Enter the code and submit.
    '.$random.'
    https://rsmiths.greenriverdev.com/PHP/approve.php
';

mail($recipient, $subject, $message, $header);

$request=$_POST['actionTrigger'];
if($request == "MessageSubmit"){
    echo '
    <div class="modal-body" hx-boost="true">
        <form method="post" action="PHP/message.php">
            <div id="mailModal">
                <div class="mb-2">
                    <p class="col-form-label">Thank you for your message!</p>
                </div>
                <div class="mb-2">
                    <p class="col-form-label">Your message has been received thank you for taking the time to send it.</p>
                </div>
                <button 
                type="button" 
                class="btn modal-button" 
                data-bs-dismiss="modal">
                Close
                </button>
            </div>
        </form>
    </div>
    ';
}



