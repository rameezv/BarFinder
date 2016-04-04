<?php
if(isset($_POST["submit"])){
// Checking For Blank Fields..
    if($_POST["vname"]==""||$_POST["vemail"]==""||$_POST["sub"]==""||$_POST["msg"]==""){
        echo "Fill All Fields..";
    }else{
// Check if the "Sender's Email" input field is filled out
        $email=$_POST['vemail'];
// Sanitize E-mail Address
        $email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
        $email= filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$email){
            echo "Invalid Sender's Email";
        }
        else{
            $subject = $_POST['sub'];
            $message = $_POST['msg'];
            $headers = 'From:'. $email . "\r\n"; // Sender's Email
            $headers .= 'Cc:'. $email . "\r\n"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
            $message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
            if (mail("info@barme.club", $subject, $message, $headers)) {
                $msg = "Your mail has been sent successfuly!";
            } else {
                $smg = "Something went wrong!";
            }
        }
    }
}
?>

<div class="container">
    <!-- Feedback Form Starts Here -->
    <div id="information" class="shadow">
    <h2 style="margin-top:0;">Support Form</h2>
        <!-- Feedback Form -->
        <form action="#" id="form" method="post" name="form">
            <input name="vname" placeholder="Your Name" type="text" value="">
            <input name="vemail" placeholder="Your Email" type="text" value="">
            <input name="sub" placeholder="Subject" type="text" value="">
            <label>Your Suggestion/Feedback or Problem</label>
            <textarea rows="4" cols="50" name="msg" placeholder="Type your message here."></textarea>
            <button id="send" type="submit" name="submit">Send</button>
        </form>

        <?php
            if (isset($msg)) {
                echo '<h3>'.$msg.'</h3>';
            }
        ?>

    </div>
    <!-- Feedback Form Ends Here -->
</div>