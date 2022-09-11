<?php



if (isset($_POST['submitContact'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "web@shibpursristi.org, secretary@shibpursristi.org, treasurer@shibpursristi.org";
    // $email_to = "manna.amit99@gmail.com";
    $email_subject = "ASK A QUESTION";
 
    function died($error)
    {
        // your error code can go here
        // echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
    // validation expected data exists
    if (!isset($_POST['name']) ||
       
        !isset($_POST['email']) ||
       
       !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }
   
     
 
    $name = $_POST['name']; // required
    
    $email_from = $_POST['email']; // required
    
    $message = $_POST['message']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
    if (!preg_match($email_exp, $email_from)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
    if (!preg_match($string_exp, $name)) {
        $error_message .= 'The  Name you entered does not appear to be valid.<br />';
    }
  
    // if (!preg_match($string_exp, $message)) {
    //     $error_message .= 'The message you entered do not appear to be valid.<br />';
    // }
    if (strlen($message) < 2) {
        $error_message .= 'The message you entered do not appear to be valid. It is too short.<br />';
    }
 
    if (strlen($error_message) > 0) {
        died($error_message);
    }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string)
    {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad, "", $string);
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";

    $email_message .= "Email: ".clean_string($email_from)."\n";
   
    $email_message .= "message: ".clean_string($message)."\n";
 
    // create email headers
    $headers = 'From: '.$email_from."\r\n".'Reply-To: '.$email_from."\r\n" . 'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers); ?>
<!-- include your own success html here -->
<html>
<div style="text-align: center;">
    <h2>Thank you for contacting us. We will be in touch with you very soon.</h2>
    <br>
    <a href="/">
        <h3>Back to Home</h3>
    </a>
</div>

</html>
<?php
}
?>