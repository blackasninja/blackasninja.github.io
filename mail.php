<?php
// require  __DIR__ ."/libs/vendor/autoload.php";

// if($_POST['sendmessage']!="")
//      {
//     $sendgrid = new SendGrid("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");
//     $email    = new SendGrid\Email();


//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $message = $_POST['sendmessage'];
//     $formcontent="From: $name<$email> \n Message: $message";
//     $to = 'ash_winp@hotmail.com';
//     $subject = "Contact Form";
//     $mailheader = "From: contact@ashwin.co.nz \r\n";

//     $email->addTo("$to")
//         ->setFrom("$email")
//         ->setSubject("$subject")
//         ->setHtml("$formcontent");

//     $response=$sendgrid->send($email);
//     echo '<script language="javascript">';
//     echo 'alert("$response")';		
//     echo '</script>';			
//     echo '<script language="JavaScript"> window.location.href ="index.html" </script>';
//     exit ;
    
//  }
    if($_POST['sendmessage']!="")
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['sendmessage'];
        $formcontent="From: $name<$email> \n Message: $message";
        $to = 'ash_winp@hotmail.com';
        $subject = "Contact Form";
        $mailheader = "From: contact@ashwin.co.nz \r\n";
        $send_message=mail($to, $subject, $formcontent, $mailheader);

        if($send_message){
			echo '<script language="javascript">';
			echo 'alert("Message successfully sent")';		
			echo '</script>';			
			echo '<script language="JavaScript"> window.location.href ="index.html" </script>';
			exit ;
			
        } else {
            echo "Error"; 
			} 
 }
?>