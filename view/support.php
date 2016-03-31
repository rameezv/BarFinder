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
            $headers = 'From:'. $email2 . "\r\n"; // Sender's Email
            $headers .= 'Cc:'. $email2 . "\r\n"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
            $message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
            mail("jtnptl89@gmail.com", $subject, $message, $headers);
            $msg = "Your mail has been sent successfuly !";
        }
    }
}
?>

<div class="container">
    <!-- Feedback Form Starts Here -->
    <div id="information">
        <!-- Heading Of The Form -->
        <div class="page-header">
            <h3>Support Form</h3>
        </div>
        <!-- Feedback Form -->
        <form action="#" id="form" method="post" name="form">
            <input name="vname" placeholder="Your Name" type="text" value="">
            <input name="vemail" placeholder="Your Email" type="text" value="">
            <input name="sub" placeholder="Subject" type="text" value="">
            <label>Your Suggestion/Feedback or Problem</label>
            <textarea rows="4" cols="50" name="msg" placeholder="Type your text here..."></textarea>
            <button id="send" type="submit" name="submit">Send</button>
        </form>

        <h3><?php echo $msg ?></h3>

    </div>
    <!-- Feedback Form Ends Here -->
</div>