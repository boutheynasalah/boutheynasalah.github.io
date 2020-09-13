<?php 
		
            require_once '../vendor/autoload.php';

            // Create the Transport
            $transport = (new Swift_SmtpTransport('smtp.gmail.com', 587,'tls'))
              ->setUsername('contact@gmail.com')
              ->setPassword('contact')
            ;
            
            // Create the Mailer using your created Transport
            $mailer = new Swift_Mailer($transport);
            
            // Create a message
            $message = (new Swift_Message($_POST['subject']. " sender : ". $_POST['email']))
              ->setFrom(['contact@gmail.com' => 'hhhh'])
              ->setTo(['boutheynasalah@gmail.com'])
              ->setBody($_POST['message'])
              ;
            
            // Send the message
           if($mailer->send($message)){
            echo '<script>alert("email sent successfully")</script>'; 
            
           }else{
             echo '<script>alert("Error")</script>'; 
           }
		
	 ?>