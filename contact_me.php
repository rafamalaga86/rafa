<?php
if($_POST) {

    $to_Email = "rafamalaga86@gmail.com"; //Replace with recipient email address
   
    //check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
   
        //exit script outputting json data
        $output = json_encode(
        array(
            'type'=> 'error',
            'text' => 'Request must come from Ajax'
        ));
       
        die($output);
    }
   
    //check $_POST vars are set, exit if any missing
    if(!isset($_POST["userName"]) || !isset($_POST["userEmail"]) || !isset($_POST["userSubject"]) || !isset($_POST["userMessage"])) {
        $output = json_encode(array('type'=>'error', 'text' => 'Input fields are empty!'));
        die($output);
    }
   
    //additional php validation
    if(empty($_POST["userName"])) {
        $output = json_encode(array('type'=>'error', 'text' => 'Name is empty'));
        die($output);
    }
    if(!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
        $output = json_encode(array('type'=>'error', 'text' => 'Please enter a valid email'));
        die($output);
    }
   
    //proceed with PHP email.
    $headers = 'From: '.$_POST["userEmail"].'' . "\r\n" .
    'Reply-To: '.$_POST["userEmail"].'' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
   
        // send mail
    $sentMail = mail($to_Email, $_POST["userSubject"], $_POST["userMessage"] .'  -'.$_POST["userName"], $headers);
   
    if(!$sentMail) {
        $output = json_encode(array('type'=>'error', 'text' => 'Sorry the email was not sent'));
        die($output);
    } else {
        $output = json_encode(array('type'=>'message', 'text' => 'Hi '.$_POST["userName"] .'. Thank you for your email'));
        die($output);
    }
}
?>