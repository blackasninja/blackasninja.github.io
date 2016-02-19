      <?php 
    if($_POST['sendmessage']!="")
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['sendmessage'];
        $formcontent="From: $name \n Message: $message";
        $to = 'ash_winp@hotmail.com';
        $subject = "Contact Form";
        $mailheader = "From: $email \r\n";
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